<?php
require_once('database.php');

class MenuItem
{
    public function __construct(){}

    function __set($property, $value)
    {
        $this->$property = $value;
    }

    function __get($property)
    {
        if (isset($this->$property)) {
            return $this->$property;
        }
    }
}

abstract class Menu
{
    private $menuId;
    private $parentId;
    private $menuitemid;
    private $menuName;
    private $description;

    public function setMenuID($menuId) {$this->menuId = $menuId;}
    public function getMenuID() {return $this->menuId;}

    public function setParent($parentId) {$this->parentId = $parentId;}
    public function getParent() {return $this->parentId;}

    public function setmenuitemid($menuitemid) {$this->menuitemid = $menuitemid;}
    public function getmenuitemid() {return $this->menuitemid;}

    public function setMenuName($menuName) {$this->menuName = $menuName;}
    public function getMenuName() {return $this->menuName;}

    public function setDescription($description) {$this->description = $description;}
    public function getDescription() {return $this->description;}

    public function getAllMenuItems($menuId)
    {
        $connection = Database::connect();
        $this->query = "select mitm.*, mi.itemname, mi.description,
                        mi.price, mi.picture, mi.servingsize
                        from `menuitemtomenu`
                        as mitm left join `menuitem`
                        as mi on mitm.menuitemid = mi.menuitemid
                        where mitm.menuid = $menuId";
        $menuItemList = array();
        $cursor = Database::reader($this->query, $connection);
        while($row = Database::read($cursor)) {
            $menuItem = new MenuItem();
            $menuItem->menuitemid = $row['menuitemid'];
            $menuItem->itemname = $row['itemname'];
            $menuItem->price = $row['price'];
            $menuItem->servingsize = $row['servingsize'];
            $menuItem->description = $row['description'];
            $menuItemList[] = $menuItem;
        }
        return $menuItemList;
    }
}

class MainMenu extends Menu
{
    static public $title="<b><font color=blue>Main Menu</font></b>";
    const id = 1;
    static public function menutime()
    {
        return  time();
    }
}

class DrinkMenu extends Menu
{
    static public $title = "<b><font color=lightblue>Drink Menu</font></b>";
    const id = 2;
}

class LunchMenu extends Menu
{
    static public $title="<b><font color=green>Lunch Menu</font></b>";
    const id = 3;
}

class KidsMenu extends Menu
{
     static public $title="<b><font color=yellow>Kids Menu</font></b>";
     const id = 5;
}

class DessertMenu extends Menu
{
    static public $title="<b><font color=red>Dessert Menu</font></b>";
    const id = 6;
}

class AppetizerMenu extends Menu
{
    static public $title="<b><font color=purple>Appetizer Menu</font></b>";
    const id = 7;
}

interface AdjustPortion
{
    public function setDinnerPortion($itemObject);
}

interface AdjustPrice
{
    public function setDinnerPrices($itemObject);
    public function setHappyHourDrinkPrices($itemObject);
}

final class HappyHourMenu extends DrinkMenu implements AdjustPrice
{
    static public $title="<b><font color=orange>Happy Hour Drink Menu</font></b>";

    public function setHappyHourDrinkPrices($menuItemObject)
    {
        $adjustedPrice = 1;
        $basePrice = $menuItemObject->getPrice();

        //Make the dinner price 30% less than the normal price. $adjusted_price = ($base_price * 0.7);
        $adjustedPrice = ($basePrice * 0.7);

        return round($adjustedPrice, 2);
    }

    public function setDinnerPrices($menuItemObject) {}
}

final class DinnerMenu extends LunchMenu implements AdjustPortion, AdjustPrice
{
    static public $title="<b><font color=blue>Dinner Menu</font></b>";

    public function setDinnerPortion($menuitemservingsize)
    {
        $adjustment = 1;
        $adjusted_servingsize = "";
        $portion = explode(" ", $menuitemservingsize);

        //Make the dinner portions 50% bigger than the lunch portion. foreach ($portion as $subportion)
        foreach ($portion as $subportion) {
            if (is_numeric($subportion)) {
                $adjustment = $subportion * 1.5;
                $adjusted_servingsize = $adjusted_servingsize . " " . round($adjustment, 2);
            } else {
                $adjusted_servingsize = $adjusted_servingsize . " " . $subportion;
            }
        }
        return $adjusted_servingsize;
    }

    public function setDinnerPrices($menuitemPrice)
    {
        $adjusted_price = 1;

        //Make the dinner price 25% more than the lunch price.
        try {
            if ($menuitemPrice != 0) {
                $adjusted_price = ($menuitemPrice * 1.25);
                return round($adjusted_price, 2);
            } else {
                throw new Exception('MenuItem Price is $0.0');
            }
        } catch (Exception $e) {
            echo "Caught exception: " . $e->getMessage() . "\n";
        }
    }

    public function GetAllMenuItems($menuid)
    {
        $connection = Database::connect();
        $this->query = "select mitm.*, mi.itemname, mi.description,
                        mi.price, mi.picture, mi.servingsize
                        from `menuitemtomenu`
                        as mitm left join `menuitem`
                        as mi on mitm.menuitemid = mi.menuitemid
                        where mitm.menuid = $menuid";
        try {
            // Note: Recall that the throw new Exception(...) statement is already in the Database class in Database.php.
            $menuitemList = array();
            $cursor = Database::reader($this->query, $connection);
            while ($row = Database::read($cursor)) {
                $menuitem = new MenuItem;
                $menuitem->menuitemid = $row['menuitemid'];
                $menuitem->itemname = $row['itemname'];
                $menuitem->price = self::setDinnerPrices($row['price']);
                $menuitem->description = $row['description'];
                $menuitem->servingsize = self::setDinnerPortion($row['servingsize']);
                $menuitemList[] = $menuitem;
            }
            return $menuitemList;
        } catch(Exception $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
        }
    }

    public function setHappyHourDrinkPrices($menuitemObject){}
}

class DBMapper extends Menu
{
    public function erase($menuitemid)
    {
        try {
            $connection = Database::connect();
            $this->query = "DELETE mi.*, mitm.* FROM `menuitem` AS mi LEFT JOIN `menuitemtomenu` AS mitm ON mitm.menuitemid = mi.menuitemid WHERE mi.menuitemid = $menuitemid";
            $rows = Database::query($this->query, $connection);
        } catch(Exception $e) {
            echo "Caught exception in Erase Method: " . $e->getMessage(), "\n";
        }
    }

    public function save($data)
    {
        try {
            $connection = Database::connect();
            if ((isset($data["menuid"])) && (isset($data["menuitemid"]))) {
                $this->query = "select `menuitemid`, `menuid`
                                from `menuitemtomenu`
                                where `menuitemid`= " . $data['menuitemid'] .
                                " and `menuid`= " . $data['menuid'] . " LIMIT 1";
                $rows = Database::query($this->query, $connection);
                if ($rows == 0) {
                    $this->query = "insert into `menuitemtomenu` (`menuitemid`,`menuid`) values ( ". $data['menuitemid'] . ", " . $data['menuid'] . " )";
                }
                $insertId = Database::insertOrUpdate($this->query, $connection);
            } else {
                $menuitem = new MenuItem;
                $menuitem->itemid = $data['menuitemid'];
                $menuitem->itemname = $data['itemname'];
                $menuitem->description = $data['description'];
                $menuitem->servingsize = $data['servingsize'];
                $menuitem->picture = $data['picture'];
                $menuitem->price = $data['price'];

                $this->query = "select `menuitemid` from `menuitem` where `menuitemid`='" . $menuitem->itemid ."' LIMIT 1";
                $rows = Database::query($this->query, $connection);
                if ($rows > 0) {
                    $this->query = "update `menuitem` set 
                        `itemname`='" . mysql_real_escape_string($menuitem->itemname) . "',
                        `description`='" . mysql_real_escape_string($menuitem->description) . "',
                        `servingsize`='" . $menuitem->servingsize . "',
                        `picture`='" . $menuitem->picture . "',
                        `price`='" . $menuitem->price . "'
                        where `menuitemid`='".$menuitem->itemid."'";
                } else {
                    $this->query = "insert into `menuitem` 
                        (`itemname`,`description`,`servingsize`,`picture`,`price`) values (
                        '".mysql_real_escape_string($menuitem->itemname)."',
                        '".mysql_real_escape_string($menuitem->description)."',
                        '".$menuitem->servingsize."',
                        '".$menuitem->picture."',
                        '".$menuitem->price."' )";
                }
                $insertId = Database::insertOrUpdate($this->query, $connection);
            }
        } catch (Exception $e) {
            echo "Caught exception in Save method: " . $e->getMessage(), "\n";
        }
    }

    public function getMenuItemTable()
    {
        $connection = Database::connect();
        $this->query = "select menuitemid, itemname, description,
                       price, picture, servingsize
                       from `menuitem`";
        $menuitemList = array();
        $cursor = Database::reader($this->query, $connection);
        while ($row = Database::read($cursor)) {
            $menuitem = new MenuItem;
            $menuitem->menuitemid = $row['menuitemid'];
            $menuitem->itemname = $row['itemname'];
            $menuitem->price = $row['price'];
            $menuitem->servingsize = $row['servingsize'];
            $menuitem->description = $row['description'];
            $menuitemList[] = $menuitem;
        }
        return $menuitemList;
    }
}

$happyHourMenu = new HappyHourMenu();
$menuItemList = $happyHourMenu->getAllMenuItems(2);
var_dump($menuItemList);
