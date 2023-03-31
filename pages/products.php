<?php
include_once '../backend/db_conn.php';

$sql = "Select * from product_tbl";
$query = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.min.css">

    <!-- css -->
</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Nutrix</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="./home.php" class="nav-link active" aria-current="page">Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="./about.php" class="nav-link active">About</a>
                    </li>

                    <li class="nav-item">
                        <a href="./product_page.php" class="nav-link active">Products</a>
                    </li>

                    <li class="nav-item">
                        <a href="./login.php" class="nav-link active">LogIn</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- product row -->
    <div class="container">
        <div class="row">

            <?php
            while ($row = mysqli_fetch_assoc($query)) {
            ?>
                <div class="card m-2" style="width: 18rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['prod_name'] ?></h5>
                        <p class="card-text"><?php echo $row['prod_desc'] ?></p>
                        <a href="#" class="btn btn-primary">Buy</a>
                    </div>
                </div>
            <?php
            }
            ?>

            <!-- <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div> -->
        </div>
    </div>

    <!-- footer -->
    <?php include_once "./footer.php"; ?>

</body>

</html>