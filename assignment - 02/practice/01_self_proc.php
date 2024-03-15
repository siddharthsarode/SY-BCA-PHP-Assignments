<!--
Write a PHP script to Design a form to accept a number from the user to check whether number is palindrome or not. (Use the concept of self processingpage)

-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="w-25 my-5 mx-5">
        <div class="mb-3">
            <label for="num" class="form-label">Enter number</label>
            <input name="num" type="number" class="form-control" id="num">
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>

    <?php
    if (isset($_GET['submit'])) {
        $num = $_GET['num'];
        if ($num === strrev($num)) {
            echo '<div class="alert alert-primary w-25" role="alert">
                    ' . $num . ' is Palindrome number
                    </div>';
        } else {
            echo '<div class="alert alert-danger w-25" role="alert">
                    ' . $num . ' is not Palindrome number
                    </div>';
        }
    }
    ?>
</body>

</html>