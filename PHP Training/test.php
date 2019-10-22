<?php
//to run use php -f and run 
require "Rectangle.class.php";

//create obj from rectangle class
$obj = new Rectangle;

//Get properties values
echo $obj->length; // output : 0
echo $obj->width; // output : 0

//Set objects proterties
$obj->length = 30;
$obj->width = 20;

//read obj properties values again to show change
echo $obj->length; // ouput will be 30
echo $obj->width; // output will be 20

//Call obj values
echo $obj->getPerimeter(); //output : 100
echo $obj->getArea(); // output : 600

?>