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
    private $menuItemId;
    private $menuName;
    private $description;

    public function setMenuID($menuId) {$this->menuId = $menuId;}
    public function getMenuID() {return $this->menuId;}

    public function setParent($parentId) {$this->parentId = $parentId;}
    public function getParent() {return $this->parentId;}

    public function setMenuItemID($menuItemId) {$this->menuItemId = $menuItemId;}
    public function getMenuItemID() {return $this->menuItemId;}

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
            $menuItem->menuItemId = $row['menuitemid'];
            $menuItem->itemName = $row['itemname'];
            $menuItem->price = $row['price'];
            $menuItem->servingSize = $row['servingsize'];
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
