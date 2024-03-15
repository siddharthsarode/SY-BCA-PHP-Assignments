<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['number'];

        echo '<div class="alert alert-primary w-25 " role="alert">
            <h2>Student Details</h2>     
            <p>Name : ' . $name . '</p>     
            <p>Email : ' . $email . '</p>     
            <p>Mobile : ' . $mobile . '</p>     
            </div>';
    }

    ?>
</body>

</html>