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
        <div class="row title-area mt-4 mb-4">
            <div class="col">
                <h3>Create your account now</h3>
            </div>
        </div>

        <div class="form-area">
            <form action="../backend/signup_action.php" method="post" autocomplete="off">
                <div class="input-fields">
                    <div class="row">
                        <div class="col col-sm col-md col-lg">
                            <input type="text" name="username" id="username" placeholder="Enter username...">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col col-sm col-md col-lg mt-2">
                            <input type="email" name="email" id="email" placeholder="Enter email...">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col col-sm col-md col-lg mt-2">
                            <input type="password" name="password" id="password" placeholder="Enter password...">
                        </div>
                    </div>
                </div>

                <div class="row button-section mt-4 mb-4 d-flex align-items-center">
                    <div class="col col-sm col-md col-lg">
                        <button class="btn btn-success create" type="submit" name="create">Create account</button>
                        <button class="btn btn-danger login" name="login">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>

</html>