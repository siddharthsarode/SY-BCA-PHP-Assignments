<!-- 2) 
Create Class College and Class Department as base class and derived class respectively , Create one more class as Faculty to display it’s detail information.( U -->

<?php

interface DisplayMethod
{
    public function display();
}

class College implements DisplayMethod
{
    public $college_name = "CDJ College";
    public $location = "Shrirampur";

    public function display()
    {
        echo "<br>College Name : " . $this->college_name;
        echo "<br>College Location : " . $this->location;
    }
}

class Department extends College implements DisplayMethod
{
    public $depart_name = "Computer";
    public $depart_head = "Prof. Chandratre. Y. V.";

    public function display()
    {
        parent::display();
        echo "<br>Department Name : " . $this->depart_name;
        echo "<br>Department Head : " . $this->depart_head;
    }
}

class Faculty extends Department implements DisplayMethod
{
    public $fac_name = "Commerce";

    public function display()
    {
        parent::display();
        echo "<br> Faculty Name : " . $this->fac_name;
    }
}

$obj = new Faculty();
$obj->display();
?>