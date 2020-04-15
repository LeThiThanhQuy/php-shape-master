<?php
include_once ('Circle.php');
include_once ('Cylinder.php');
include_once ('Rectangle.php');
include_once ('Square.php');
include_once ('Shape.php');

$shapes = [];
$shapes[1]=new Circle('Circle',5);
$shapes[2]=new Rectangle('Rectangle',10,5);
$shapes[3]=new Square('Square',5);
echo $shapes[1]->show()." Area :".$shapes[1]->calculateArea()."<br>";


echo $shapes[2]->show()." Area :".$shapes[2]->calculateArea()."<br>";
echo $shapes[3]->show()." Area :".$shapes[3]->calculateArea()."<br>";
try {
    $random = random_int(1, 100);
} catch (Exception $e) {
    $e->getMessage();
}
foreach ($shapes as $shape){
    $shape->resize($random);
    echo $shape->show()." Area sau khi tăng kích thước lên $random"."%:".$shape->calculateArea()."<br>";
}