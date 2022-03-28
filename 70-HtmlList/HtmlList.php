<?php

require_once('Tag.php');
require_once('ListItem.php');

class HtmlList extends Tag
{
    private $items = [];

    public function addItem(ListItem $li)
    {
        $this->items[] = $li;
        return $this;
    }

    public function __toString()
    {
        return $this->show();
    }

    public function show()
    {
        $result = $this->open();

        foreach ($this->items as $item) {
            $result .= $item->show();           //здесь объекты класса ListItem
        }

        $result .= $this->close();

        return $result;
    }

}