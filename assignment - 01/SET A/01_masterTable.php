<!-- Write class declarations and member function definitions for an employee(code, name, designation). 
Derive emp_account(account_no, joining_date) from employee and emp_sal(basic_pay, earnings, 
deduction) from emp_account. Write a menu drivenprogram
a) To build a mastertable
b) To sort allentries
c) To search anentry
d) Displaysalary
 -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="search"><b>Enter name for search</b></label>
        <input type="text" name="search" id="search">
        <br>
        <br>
        <label for="choice"><b>Select your choice:</b></label>
        <select name="choice">
            <option value="1">Build a master table</option>
            <option value="2">To sort all entries</option>
            <option value="3">To search an entry</option>
            <option value="4">display salary</option>
        </select><br>
        <br>
        <input type="submit" name="submit" id="submit">
        <input type="reset" name="reset" id="reset">
    </form>
</body>

</html>
<?php

class Employee
{
    public $code, $name, $designation;
    public function __construct($code, $name, $designation)
    {
        $this->code = $code;
        $this->designation = $designation;
        $this->name = $name;
    }
    public function displayEmployee()
    {
        echo "<td>" . $this->code . "</td>";
        echo "<td>" . $this->name . "</td>";
        echo "<td>" . $this->designation . "</td>";
    }

    public function getName()
    {
        return ($this->name);
    }
}

class EmployeeAccount extends Employee
{
    public $accountNo, $date;
    public function __construct($code, $name, $designation, $accountNo, $date)
    {
        parent::__construct($code, $name, $designation);
        $this->accountNo = $accountNo;
        $this->date = $date;
    }

    public function displayEmployeeAccount()
    {
        echo "<td>" . $this->accountNo . "</td>";
        echo "<td>" . $this->date . "</td>";
    }
}

class EmployeeSalary extends EmployeeAccount
{
    public $basicPay, $deduction, $earnings;
    public function __construct($code, $name, $designation, $accountNo, $date, $basicPay, $deduction, $earnings)
    {
        parent::__construct($code, $name, $designation, $accountNo, $date);
        $this->basicPay = $basicPay;
        $this->deduction = $deduction;
        $this->earnings = $earnings;
    }

    public function displayEmployeeSalary()
    {
        echo "<td>" . $this->basicPay . "</td>";
        echo "<td>" . $this->deduction . "</td>";
        echo "<td>" . $this->earnings . "</td>";
    }
}
$emp = array();
$emp[0] = new EmployeeSalary(101, "ganesh", "manager", 758694, "22-05-2023", 25000, 200, 30000);
$emp[1] = new EmployeeSalary(102, "rakesh", "staff", 878694, "26-11-2003", 20000, 100, 25000);
$emp[2] = new EmployeeSalary(103, "rohan", "CEO", 753294, "12-09-2011", 40000, 500, 45000);
$emp[3] = new EmployeeSalary(104, "ramesh", "HOD", 721694, "16-03-2021", 35000, 300, 40000);
$emp[4] = new EmployeeSalary(105, "govind", "CEO", 998694, "28-07-2020", 45000, 400, 50000);
$emp[5] = new EmployeeSalary(106, "gopal", "chief manager", 658694, "08-10-2010", 35000, 300, 40000);

function displayMasterTable($emp)
{
    echo "<table border='1px solid black'>";
    echo "<tr>
    <th>Emp_code</th>
    <th>Emp_name</th>
    <th>Emp_designation</th>
    <th>Account</th>
    <th>Date of joining</th>
    <th>Basic salary</th>
    <th>Deduction</th>
    <th>Earnings</th>
    </tr>";
    for ($i = 0; $i < count($emp); $i++) {
        echo "<tr>";
        $emp[$i]->displayEmployee();
        $emp[$i]->displayEmployeeAccount();
        $emp[$i]->displayEmployeeSalary();
        echo "</tr>";
    }
    echo "</table>";
}

function displaySalary($emp)
{
    echo "<table border='1px solid black'>";
    echo "<tr>";
    echo "<th>Emp_code</th>
        <th>Emp_name</th>
        <th>Emp_designation</th>
        <th>Emp_basic pay</th>
        <th>Emp_deduction</th>
        <th>Emp_earnings</th>";
    echo "</tr>";
    for ($i = 0; $i < count($emp); $i++) {
        echo "<tr>";
        $emp[$i]->displayEmployee();
        $emp[$i]->displayEmployeeSalary();
        echo "</tr>";
    }
    echo "</table>";
}
if (isset($_POST['submit'])) {
    $choice = $_POST['choice'];
    $search = $_POST['search'];
    switch ($choice) {
        case '1':
            displayMasterTable($emp);
            break;
        case '2':
            function sortByName($first, $last)
            {
                return strcmp($first->name, $last->name);
            }
            usort($emp, "sortByName");
            displayMasterTable($emp);
            break;
        case '3':
            $flag = 0;
            for ($i = 0; $i < count($emp); $i++) {
                if ($emp[$i]->getName() == $search) {
                    $flag = 1;
                    echo "<table border='1px solid black'>";
                    echo "<tr>
    <th>Emp_code</th>
    <th>Emp_name</th>
    <th>Emp_designation</th>
    <th>Account</th>
    <th>Date of joining</th>
    <th>Basic salary</th>
    <th>Deduction</th>
    <th>Earnings</th>
    </tr>";
                    echo "<tr>";
                    $emp[$i]->displayEmployee();
                    $emp[$i]->displayEmployeeAccount();
                    $emp[$i]->displayEmployeeSalary();
                    echo "</tr>";
                    echo "</table>";
                }
            }

            if ($flag == 0) {
                echo "No data found!!";
            }
            break;
        case '4':
            displaySalary($emp);
            break;
    }
}
?>