<?php

require_once('Tag.php');

class Link extends Tag
{
    const ACTIVE = 'active';

    public function __construct()
    {
        parent::__construct('a');
        $this->setAttr('href', '');
    }

    public function open()
    {
        $this->activateSelf();
        return parent::open();
    }

    private function activateSelf()
    {
        if ($this->getAttr('href') === $_SERVER['REQUEST_URI']) {
            $this->addClass(SELF::ACTIVE);
        } 
    }
}