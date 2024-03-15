<!-- Write PHP program to create student registration form and display student information. 
(Use sticky formconcept). -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <form action="03_display.php" method="POST" class="w-25 mx-5">

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input name="name" type="text" class="form-control" required id="name"
                value="<?php if (isset($_POST['submit'])) echo $_POST['name']; ?>">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" required id="email"
                value="<?php if (isset($_POST['submit'])) echo $_POST['email']; ?>">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" required id="password"
                value="<?php if (isset($_POST['submit'])) echo $_POST['password']; ?>">
        </div>
        <div class="mb-3">
            <label for="number" class="form-label">Mobile No.</label>
            <input name="number" type="number" class="form-control" required id="number"
                value="<?php if (isset($_POST['submit'])) echo $_POST['number']; ?>">
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>