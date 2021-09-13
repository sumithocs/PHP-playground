<?php

class Car
{

    private $color = 'grey';
    public $weight;
    private $year;
    private $available_colors = array('red', 'black', 'blue', 'white', 'custom');

    public function __construct()
    {
    }


    public function setYear($year)
    {
        $this->year = $year;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setColor($color)
    {
        if (in_array($color, $this->available_colors)) {
            $this->color = $color;
        }
    }

    public function getColor(): string
    {
        return $this->color;
    }
}

$mycar = new Car();
//$mycar->color = "red";
$mycar->setYear(2012);
$mycar->setColor('red');

//echo $mycar->getColor();



//// Abstract and Interface combined

interface ObjectShapes
{
    public function getArea(): float;
}

abstract class Shape implements ObjectShapes
{
    public $color = "Cyan";

    abstract public function getArea(): float;

    public function getColor()
    {
        //var_dump($this);
        return $this->color;
    }
}

class Triangle extends Shape
{

    public function getArea(): float
    {
        return "2.4";
    }
}

$obj = new Triangle();
echo $obj->getColor();
