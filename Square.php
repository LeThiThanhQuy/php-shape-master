<?php
include_once ('Rectangle.php');
include_once ('interfaceResizeable.php');

class Square extends Rectangle implements interfaceResizeable
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width);

    }
    public function resize($random)
    {
        $this->width=$this->width+($this->width*$random/100);
    }

    /**
     * @return mixed
     */
}