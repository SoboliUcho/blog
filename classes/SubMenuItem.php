<?php
class SubMenuItem{
    public $name;
    public $link;
    public $sequence;

    public function __construct($name, $sequence, $link)
    {
        $this->name = $name;
        $this->link = $link;
        $this->sequence = $sequence;
    }
    public function __toString()
    {
        $output = "<div class='subitem' id='subitem_$this->sequence'>";
        $output .= "<a href='$this->link'>$this->name</a>";
        $output .= "</div>";
        return $output;
    }
}