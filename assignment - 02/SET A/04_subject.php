<!-- 4) Write PHP program to select list of subjects from list box and display selected subject on 
information. (Use sticky multi-valuedparameter)
 -->

<!-- 1) Write PHP program accept name, select your cities you would like to visit and display 
selected information on page. (Use multi-valuedparameter),.
 -->

<!-- 2) Write PHP program to accept user details such as user-id, name, Address, email, and mobile 
no. Display same information on next page. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="w-25 my-5 mx-5">

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input name="name" type="text" class="form-control" required id="name">
        </div>
        <div class="mb-3">
            <label for="subject" class="form-label">Select Your Subject</label>
            <select name="subjects[]" multiple class="form-select" aria-label="Default select example">
                <option value="PHP">PHP</option>
                <option value="C++">C</option>
                <option value="Java">Java</option>
                <option value="CSS">CSS</option>
                <option value="JS">JS</option>
            </select>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo '<h2>Selected Subjects</h2>';
        $name = $_POST["name"];
        $subjects = isset($_POST["subjects"]) ? $_POST["subjects"] : array();

        echo "Name: $name<br>";
        if (count($subjects) > 0) {
            echo "Subjects selected:<br>";
            echo "<ul>";
            foreach ($subjects as $sub) {
                echo "<li>$sub</li>";
            }
            echo "</ul>";
        } else {
            echo "No Subjects selected.";
        }
    }
    ?>
</body>

</html>