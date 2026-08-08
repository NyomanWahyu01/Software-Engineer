<?php

namespace Data;

class shape{
    public function getCorner()
    {
        return 0;
    }
}

class Rectangle extends Shape{
    public function getCorner()
    {
        return 4;
    }

    public function getparentCorner()
    {
        return parent::getCorner();
    } 
}


