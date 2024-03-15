<!-- Write PHP script to demonstrate the concept of introspection for examiningobject -->


<?php

class Employee
{
    public $id;
    public $name;

    public function __construct($i, $n)
    {
        $this->id = $i;
        $this->name = $n;
    }

    public function displayInfo()
    {
        echo "Emp Id : " . $this->id . "<br>";
        echo "Emp Name : " . $this->name . "<br>";
    }
}

$obj = new Employee(101, "Mukesh");

// Get  class name of the object
echo "Class Name: " . get_class($obj) . "<br>";

// Check if a property exists
$property = 'name';
echo "Does property $property exist? " . (property_exists($obj, $property) ? "Yes" : "No") . "<br>";


// Check if a method exists
echo "Does method displayInfo exist? " . (method_exists($obj, 'displayInfo') ? "Yes" : "No") . "<br>";



// Get list of class properties
$properties = get_object_vars($obj);
echo "Properties:\n";
foreach ($properties as $name => $value) {
    echo "$name: $value\n";
}

// Get list of class methods
$methods = get_class_methods($obj);
echo "Methods:\n";
foreach ($methods as $method) {
    echo "$method\n";
}

?>