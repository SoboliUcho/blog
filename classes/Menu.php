<?php

class Menu
{
    public $name;
    public $menuItems = [];
    public $user;

    public function __construct($name)
    {
        $this->name = $name;
        $this->getMenuItems();
        $this->user = new User();
    }
    private function getMenuItems()
    {
        $sql = "SELECT * FROM menu Order by Sequence ASC";
        $result = Db::queryAll($sql);
        if (!$result) {
            return false;
        }
        foreach ($result as $item) {
            $this->menuItems[] = new MenuItem($item["ID"], $item['Name'], $item['Sequence'], $item['Link']);
        }
        if (empty($this->menuItems)) {
            return false;
        }
        return true;
    }
    public function __toString()
    {
        $output = "<div id='Menu'>";
        $output .= "";
        $output .= "<div class='menu' id='menu_$this->name'>";
        foreach ($this->menuItems as $item) {
            $output .= $item;
        }
        $output .= "</div>";
        $output .= "<div class='login'>";
        $output .= $this->user;
        $output .= "</div>";
        return $output;
    }
}
