<?php

interface iTag
{
    // Геттер имени:
    public function getName();
    
    // Геттер текста:
    public function getText();
    
    // Геттер всех атрибутов:
    public function getAttrs();
    
    // Геттер одного атрибута по имени:
    public function getAttr($name);
    
    // Открывающий тег, текст и закрывающий тег:
    public function show();
    
    // Открывающий тег:
    public function open();
    
    // Закрывающий тег:
    public function close();
    
    // Установка текста:
    public function setText($text);
    
    // Установка атрибута:
    public function setAttr($name, $value = true);
    
    // Установка атрибутов:
    public function setAttrs($attrs);
    
    // Удаление атрибута:
    public function removeAttr($name);
    
    // Установка класса:
    public function addClass($className);
    
    // Удаление класса:
    public function removeClass($className);
}