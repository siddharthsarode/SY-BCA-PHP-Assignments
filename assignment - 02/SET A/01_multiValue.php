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
            <label for="city" class="form-label">City</label>
            <select name="cities[]" multiple class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="Mumbai">Mumbai</option>
                <option value="Delhi">Delhi</option>
                <option value="Bangalore">Bangalore</option>
                <option value="Chennai">Chennai</option>
                <option value="Kolkata">Kolkata</option>
            </select>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo '<h2>Selected Cities</h2>';
        $name = $_POST["name"];
        $selected_cities = isset($_POST["cities"]) ? $_POST["cities"] : array();

        echo "Name: $name<br>";
        if (count($selected_cities) > 0) {
            echo "Cities selected:<br>";
            echo "<ul>";
            foreach ($selected_cities as $city) {
                echo "<li>$city</li>";
            }
            echo "</ul>";
        } else {
            echo "No cities selected.";
        }
    }
    ?>
</body>

</html>