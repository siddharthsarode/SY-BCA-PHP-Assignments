<!DOCTYPE html>
<html>

<head>
    <title>Student Information</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h2>Student Information Form</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name"
                    value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>">
            </div>
            <div class="form-group">
                <label>Gender:</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="male"
                        <?php if (isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked'; ?>>
                    <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="female"
                        <?php if (isset($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked'; ?>>
                    <label class="form-check-label" for="female">Female</label>
                </div>
            </div>
            <div class="form-group">
                <label>Qualification:</label><br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="qualification[]" id="ssc" value="SSC"
                        <?php if (isset($_POST['qualification']) && in_array('SSC', $_POST['qualification'])) echo 'checked'; ?>>
                    <label class="form-check-label" for="ssc">SSC</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="qualification[]" id="hsc" value="HSC"
                        <?php if (isset($_POST['qualification']) && in_array('HSC', $_POST['qualification'])) echo 'checked'; ?>>
                    <label class="form-check-label" for="hsc">HSC</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="qualification[]" id="bca" value="BCA"
                        <?php if (isset($_POST['qualification']) && in_array('BCA', $_POST['qualification'])) echo 'checked'; ?>>
                    <label class="form-check-label" for="bca">BCA</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="qualification[]" id="mca" value="MCA"
                        <?php if (isset($_POST['qualification']) && in_array('MCA', $_POST['qualification'])) echo 'checked'; ?>>
                    <label class="form-check-label" for="mca">MCA</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['name']) && isset($_POST['gender']) && isset($_POST['qualification'])) {
                $name = $_POST['name'];
                $gender = $_POST['gender'];
                $qualification = implode(', ', $_POST['qualification']);
                echo "<div class='alert alert-success mt-3' role='alert'>Student Information:<br>Name: $name<br>Gender: $gender<br>Qualification: $qualification</div>";
            } else {
                echo "<div class='alert alert-danger mt-3' role='alert'>Please fill in all fields.</div>";
            }
        }
        ?>
    </div>

</body>

</html>