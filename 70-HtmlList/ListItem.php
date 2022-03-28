<?php

require_once('Tag.php');

class ListItem extends Tag
{

    public function __construct()
    {
        parent::__construct('li');
    }

}