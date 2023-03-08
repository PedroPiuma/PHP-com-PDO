<?php

class Product implements IProduct
{
    private $id;
    private $name;
    private $desc;

    public function getId()
    {
        return $this->id;
    }
    public function setId($newId)
    {
        $this->id = $newId;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName($newName)
    {
        $this->name = $newName;
        return $this;
    }

    public function getDesc()
    {
        return $this->desc;
    }
    public function setDesc($newDesc)
    {
        $this->id = $newDesc;
        return $this;
    }
}
