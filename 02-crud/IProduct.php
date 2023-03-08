<?php

interface IProduct
{
    public function getId();
    public function setId($newId);
    public function getName();
    public function setName($newName);
    public function getDesc();
    public function setDesc($newDesc);
}
