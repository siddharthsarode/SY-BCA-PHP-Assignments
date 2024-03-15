<!-- 3) Write a PHP script for the following: Design a form to accept a number from theuser. 
Perform the operations and show theresults.
• Check whether number is palindrome ornot.
• Reverse the number using 
recursions.
(Use the concept of self processing page.)
 -->

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
            <label for="num" class="form-label">Enter Number</label>
            <input name="num" type="number" class="form-control" required id="num">
        </div>
        <div class="mb-3">
            <label for="city" class="form-label">City</label>
            <select name="choice" class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">Check palindrome or not</option>
                <option value="2">Reverse Number</option>
            </select>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>

    <?php

    function isPalindrome($num)
    {
        return $num === strrev($num) ? 1 : 0;
    }

    function revNum($num)
    {
        if ($num < 10)
            return $num;

        $digit = $num % 10;

        return $digit . revNum(intval($num / 10));
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST["num"];
        $choice = $_POST['choice'];

        switch ($choice) {
            case 1:
                if (isPalindrome($num))
                    echo "$num is palindrome Number <br>";
                else
                    echo "$num is not palindrome Number <br>";
                break;
            case 2:
                echo "Before Reverse Number is $num <br>";
                $res = revNum($num);
                echo "After Reverse Number is $res <br>";
                break;
        }
    }
    ?>
</body>

</html>