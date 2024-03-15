<?php

/*1) Write a PHP program to create class circle having radius data member and two member functions find_circumfernce () and find_area() . Display area and Circumference depending on user’ spreference. */

class Circle
{
    const PI = 3.14;

    public function find_circum($radius)
    {
        return (2 * self::PI * $radius);
    }

    public function area($radius)
    {
        return (self::PI * $radius * $radius);
    }
}

$obj = new Circle();
echo "The Circumference of circle is " . $obj->find_circum(5);
echo "<br>";
echo "The Area of circle is " . $obj->area(5);
