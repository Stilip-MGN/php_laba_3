<?php


namespace App;


class Vector
{
    public $x;
    public $y;

    public function __construct($X, $Y)
    {
        $this->x = $X;
        $this->y = $Y;
    }

    public function Length()
    {
        return sqrt(pow($this->x,2)  + pow($this->y,2));
    }

    public function is_zero()
    {
        /*  return if ($this->Length() == 0.0): true ? false ;*/

        if ($this->Length() == 0.0)
            return true;
        else
            return false;
    }

    public function is_perpendicular(Vector $v2){
        if ($this->x * $v2->x + $this->y * $v2->y == 0)
            return true;
        else
            return false;
    }
}