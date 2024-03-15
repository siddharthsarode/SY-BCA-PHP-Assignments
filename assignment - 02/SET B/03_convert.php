<!DOCTYPE html>
<html>

<head>
    <title>Indian Currency Converter</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h2>Indian Currency Converter</h2>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        ?>
        <div class="row">
            <div class="col-md-6">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <div class="form-group">
                        <label for="tb1">Enter Indian Currency:</label>
                        <input type="text" class="form-control" id="tb1" name="tb1" maxlength="3">
                    </div>
                    <div class="form-group">
                        <label>Choose Operation:</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="r1" id="dollar" value="1">
                            <label class="form-check-label" for="dollar">Conversion in Dollars</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="r1" id="pound" value="2">
                            <label class="form-check-label" for="pound">Conversion in Pound</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
            </div>
        </div>
        <?php
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['tb1']) && isset($_POST['r1'])) {
                $Rs = $_POST['tb1'];
                switch ($_POST['r1']) {
                    case 1:
                        $dollar = $Rs / 81.84;
                        echo "<div class='alert alert-success' role='alert'>Rupees After Conversion in Dollar: $dollar</div>";
                        break;
                    case 2:
                        $pound = $Rs / 98.58;
                        echo "<div class='alert alert-success' role='alert'>Rupees After Conversion in Pound: £$pound</div>";
                        break;
                    default:
                        echo "<div class='alert alert-danger' role='alert'>Invalid Choice!</div>";
                }
            } else {
                echo "<div class='alert alert-danger' role='alert'>Unable to show result. Please fill in all fields.</div>";
            }
        }
        ?>
    </div>

</body>

</html>