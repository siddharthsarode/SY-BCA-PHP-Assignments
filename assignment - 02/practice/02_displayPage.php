<?php
if (isset($_POST['submit'])) {
    $id = $_POST['user_id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $mobile = $_POST['number'];

    echo '<div class="alert alert-primary w-25" role="alert">
            <h2>Student Details</h2>     
            <p>Id : ' . $id . '</p>     
            <p>Name : ' . $name . '</p>     
            <p>address : ' . $address . '</p>     
            <p>Email : ' . $email . '</p>     
            <p>Mobile : ' . $mobile . '</p>     
            </div>';
}