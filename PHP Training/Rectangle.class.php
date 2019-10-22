<?php
class Rectangle
{
    //properties
    public $length = 0;
    public $width = 0;

    //method to get the perimeter
    public function getPerimeter()
    {
        return (2 * ($this->length + $this->width));
    }

    //method to get area
    public function getArea()
    {
        return ($this->length + $this->width);
    }
}
?>