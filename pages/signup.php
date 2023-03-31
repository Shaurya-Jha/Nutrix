<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create new account</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.min.css" />

    <!-- css -->
    <link rel="stylesheet" href="../css/login.css">

</head>

<body>

    <?php
    include_once '../backend/db_conn.php';
    ?>

<div class="container d-flex flex-column align-items-center">
        <div class="row mt-4">
            <div class="col">
                <h3>Create account</h3>
            </div>
        </div>

        <form action="../backend/signup_action.php" method="post" autocomplete="off">
            <div class="row mt-4">
                <div class="col">
                    <input type="text" name="username" id="" placeholder="Enter username...">
                </div>
            </div>

            <div class="row mt-4">
                <div class="col">
                    <input type="email" name="email" id="" placeholder="Enter email...">
                </div>
            </div>

            <div class="row mt-4">
                <div class="col">
                    <input type="password" name="password" id="" placeholder="Enter password...">
                </div>
            </div>

            <div class="row mt-4">
                <div class="col">
                    <button class="btn btn-success" type="submit" name="signup">Signup</button>
                    <button class="btn btn-danger" name="login">Login</button>
                </div>
            </div>
        </form>
    </div>

</body>

</html>