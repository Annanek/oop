<?php

require_once('HtmlList.php');

class Ol extends HtmlList
{
    public function __construct()
    {
        parent::__construct('ol');
    }
}