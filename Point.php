<?php


namespace App;


class Point
{
    public $x;
    public $y;

    public function __construct($X, $Y)
    {
        $this->x = $X;
        $this->y = $Y;

    }

    public function Move($X,$Y){
        $this->x += $X;
        $this->y += $Y;
    }

}