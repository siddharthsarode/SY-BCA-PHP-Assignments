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
    <form action="02_displayPage.php" method="POST" class="w-25 my-5 mx-5">
        <div class="mb-3">
            <label for="user_id" class="form-label">User Id</label>
            <input name="user_id" type="number" class="form-control" required id="user_id">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input name="name" type="text" class="form-control" required id="name">
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input name="address" type="text" class="form-control" required id="address">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" required id="email">
        </div>

        <div class="mb-3">
            <label for="number" class="form-label">Mobile No.</label>
            <input name="number" type="number" class="form-control" required id="number">
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>