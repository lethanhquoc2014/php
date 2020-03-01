<?php
abstract class Menu
{
    private $menuid;
    private $parentid;
    private $menuitemid;
    private $menuname;
    private $description;

    public function setMenuID($menuid)
    {
        $this->menuid = $menuid;
    }

    public function getMenuID()
    {
        return $this->menuid;
    }

    public function setParent($parentid)
    {
        $this->parentid = $parentid;
    }

    public function getParent()
    {
        return $this->parentid;
    }

    public function setMenuItemID($menuitemid)
    {
        $this->menuitemid = $menuitemid;
    }

    public function getMenuItemID()
    {
        return $this->menuitemid;
    }

    public function setMenuName($menuname)
    {
        $this->menuname = $menuname;
    }

    public function getMenuName()
    {
        return $this->menuname;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }
}

class MenuItem
{
    private $menuitemid;
    private $itemname;
    private $description;
    private $price;
    private $servingsize;
    private $picture;

    public function setID($menuitemid)
    {
        $this->menuitemid = $menuitemid;
    }

    public function getID()
    {
        return $this->menuitemid;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPicture($picture)
    {
        $this->picture = $picture;
    }

    public function getPicture ()
    {
        return $this->picture;
    }

    public function setItemName($itemname)
    {
        $this->itemname = $itemname;
    }

    public function getItemName()
    {
        return $this->itemname;
    }

    public function setDescription($description)
    {
        $this->description= $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setServingSize($servingsize)
    {
        $this->servingsize = $servingsize;
    }

    public function getServingSize()
    {
        return $this->servingsize;
    }
}

interface DinnerPortion
{
    public function setDinnerPortion($menuitemObject);
}

interface DinnerPrices
{
    public function setDinnerPrices($menuitemObject);
}

interface HappyHourDrinkPrices
{
    public function setHappyHourDrinkPrices($drinkObject1);
}

class MainMenu extends Menu
{
//...
}

class DrinkMenu extends Menu
{
//...
}

class LunchMenu extends Menu
{
//...
}

final class DinnerMenu extends LunchMenu implements DinnerPortion, DinnerPrices
{
    public function setDinnerPortion($menuitemObject)
    {
        $adjusted_servingsize = 1;
        $base_servingsize = $menuitemObject->getServingSize();
        //Make the dinner portion 50% bigger than the lunch portion. $adjusted_servingsize = $base_servingsize * 1.5;
        return $adjusted_servingsize;
    }
    public function setDinnerPrices($menuitemObject)
    {
        $adjusted_price = 1;
        $base_price = $menuitemObject->getPrice();
        //Make the dinner price 25% more than the lunch price. $adjusted_price = $base_price * 1.25;
        return  $adjusted_price;
    }
}

final class KidsMenu extends Menu
{
//...
}

final class DessertMenu extends Menu
{
//...
}

final class HappyHourMenu extends DrinkMenu implements HappyHourDrinkPrices
{
    public function setHappyHourDrinkPrices($drinkObject)
    {
        $adjusted_price = 1;
        $base_price = $drinkObject->getPrice();
        //Make the happy hour drink prices 30% less than regular price $adjusted_price = $base_price * 0.7;
        return  $adjusted_price;
    }
}

