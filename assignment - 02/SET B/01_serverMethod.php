<!-- 1) Write a PHP Script to display Server information in table format (Use$_SERVER).
 -->

<?php
// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        overflow-x: hidden;
    }
    </style>
</head>

<body>

    <h1>Display Server Information</h1>
    <button class="btn btn-primary">Display</button>
    <div class="container"></div>

    <script>
    document.addEventListener("DOMContentLoaded", () => {
        let div = document.querySelector(".container");
        let btn = document.querySelector(".btn");

        btn.addEventListener("click", () => {
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "01__serverdata.php", true);
            xhr.send();
            xhr.onreadystatechange = () => {
                if (xhr.readyState == 4 && xhr.status == 200)
                    div.innerHTML = xhr.responseText;
            }
        })
    })
    </script>
</body>

</html>