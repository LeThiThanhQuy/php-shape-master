<?php

include_once ('Shape.php');
include_once ('interfaceResizeable.php');
class Circle extends Shape implements interfaceResizeable
{
    public $radius;
    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }
    public function calculateArea(){
        return pi() * pow($this->radius, 2);
    }
    public function calculatePerimeter(){
        return pi() * $this->radius * 2;
    }
    public function resize($random)
    {
        $this->radius=$this->radius+($this->radius*$random/100);
    }
}