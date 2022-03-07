<?php

require_once('iFile.php');

class File implements iFile 
{
    private $path;

    public function __construct($filePath)
    {
        //проверить на существование
        $this->path = $filePath;
    }
		
    public function getPath() 
    {
        return $this->path;
    }

    public function getDir() 
    {
        return dirname($this->path);
    }

    public function getName()
    {
        return basename($this->path);
    }

    public function getExt()
    {
        return pathinfo($this->path, PATHINFO_EXTENSION);
    }
      
    public function getSize()
    {
        return filesize($this->path);
    }
    
    public function getText()
    {
        return file_get_contents($this->path);
    }         
    
    public function setText($text)  
    {
        return file_put_contents($this->path, $text);
    }

    public function appendText($text)
    {
        return file_put_contents($this->path, $text, FILE_APPEND);
    }
    
    public function copyFile($copyPath)    
    {
        return copy($this->path, $copyPath);
    }

    public function delete()
    {
        return unlink($this->path);
    }

    public function renameFile($newName)
    {
        $dir = $this->getDir();
        return rename($this->path, $dir . '/'. $newName);
    }

    public function replace($newPath) 
    {
        //проверить, существует ли такая директория, если нет - создать
        $name = $this->getName();
        return rename($this->path, $newPath . '/'. $name);
    }
}
