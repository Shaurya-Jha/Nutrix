<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.min.css">
    <!-- css -->
    <link rel="stylesheet" href="./dashboard.css">

</head>

<body>

    <!-- top section for basic admin info -->
    <div class="row">
        <div class="col-3">
            <h3>Admin Panel</h3>
            <p>admin image goes here</p>
        </div>

        <div class="col-9 d-flex">
            <p>show logged in admin name</p>
            <a href="" class="btn">Logout</a>
        </div>
    </div>

    <!-- bottom section for main content -->
    <div class="row">
        <!-- nav buttons -->
        <div class="col-3 admin-nav d-flex flex-column">
            <form action="" method="post">
                <button class="btn" name="mng-users">Manage Users</button>
                <button class="btn" name="mng-inquiries">Manage Inquiries</button>
                <button class="btn" name="mng-products">Manage Products</button>
            </form>
        </div>

        <!-- on click show required details -->
        <div class="col-9">
            <?php
            if (isset($_POST['mng-users'])) {
                include './mngUsers.php';
            }elseif(isset($_POST['mng-inquiries'])){
                include './mngInquiries.php';
            }elseif(isset($_POST['mng-products'])){
                include './mngProducts.php';
            }
            ?>
        </div>
    </div>

</body>

</html>