<!-- 2) Write a PHP program to accept two strings from user and check whether entered 
strings are matching or not. (Use sticky formconcept). -->

<!DOCTYPE html>
<html>

<head>
    <title>Validating Strings</title>
</head>

<body>
    <fieldset>
        <legend>Validating Strings</legend>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
            <table>
                <tr>
                    <th>Enter First String:</th>
                    <td><input type="text" name="tb1" value="<?php if (isset($_GET['tb1'])) echo $_GET['tb1']; ?>"></td>
                </tr>
                <tr>
                    <th>Enter Second String:</th>
                    <td><input type="text" name="tb2" value="<?php if (isset($_GET['tb2'])) echo $_GET['tb2']; ?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Submit"></td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>

<?php
if (isset($_GET['submit'])) {
    if (isset($_GET['tb1']) && isset($_GET['tb2'])) {
        $string1 = $_GET['tb1'];
        $string2 = $_GET['tb2'];

        if ($string1 === $string2) {
            echo "Strings matched!";
        } else {
            echo "Strings not matched!";
        }
    } else {
        echo "Please enter both strings.";
    }
}
?>