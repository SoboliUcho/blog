<?php
class MenuItem
{
    public $id;
    public $name;
    public $link;
    public $sequence;
    public $subItems = [];

    public function __construct($id, $name, $sequence, $link = null)
    {
        $this->name = $name;
        $this->link = $link;
        $this->sequence = $sequence;
        $this->id = $id;
        $this->loadSubItems();
    }

    private function loadSubItems()
    {
        $sql = "SELECT * FROM sub_menu WHERE Menu_ID = $this->id Order by Sequence ASC";
        $result = Db::queryAll($sql);
        if ($result == null) {
            return;
        }
        foreach ($result as $item) {
            $this->subItems[] = new SubMenuItem($item['Name'], $item['Sequence'], $item['Link']);
        }
    }
    public function __toString()
    {
        $output = "<div class='menu_item' id='menu_ietm_$this->sequence'>";
        $output .= "<div class='menu_item_name'><a href='clanky/$this->link'>$this->name</a></div>";
        if (!empty($this->subItems)) {
            $output .= "<div class='subitems'>";
            foreach ($this->subItems as $subItem) {
                $output .= $subItem;
            }
            $output .= "</div>";
        } 
        $output .= "</div>";
        return $output;
    }
}