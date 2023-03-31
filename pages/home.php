<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NUTRIX | Home</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.min.css" />

    <!-- css -->
    <link rel="stylesheet" href="../css/home.css">
</head>
<?php
include_once '../backend/db_conn.php';
?>

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
                        <a href="./home.php" class="nav-link" aria-current="page">Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="./about.php" class="nav-link">About</a>
                    </li>

                    <li class="nav-item">
                        <a href="./product_page.php" class="nav-link">Products</a>
                    </li>

                    <li class="nav-item">
                        <?php if (isset($_SESSION["loggedUser"])) {
                        ?>
                            <a href="../backend/logout.php" class="nav-link">Logout <?php echo $_SESSION["loggedUser"] ?></a>
                        <?php
                        } else {
                        ?>
                            <a href="./login.php" class="nav-link">Login</a>
                        <?php
                        } ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- carousel -->
    <div class="carousel-area">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="..\images\sam-moghadam-khamseh-Z4Q9KHw9ofE-unsplash.jpg" class="d-block w-100 img-responsive" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="..\images\anastase-maragos-7kEpUPB8vNk-unsplash.jpg" class="d-block w-100 img-responsive" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="..\images\john-arano-h4i9G-de7Po-unsplash.jpg" class="d-block w-100 img-responsive" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- basic info -->
    <div class="container mt-4 mb-4">
        <div class="row">
            <div class="col">
                <h3>Some basic information about the website and a rough idea</h3>
            </div>

            <div class="col">
                <img src="..\images\bruce-mars-ZXq7xoo98b0-unsplash.jpg" alt="" class="img-fluid">
            </div>
        </div>
    </div>

    <!-- moonthly top products -->
    <div class="container">
        <div class="row">
            <!-- card area -->
            <div class="col">
                <div class="card">
                    <img src="https://media.istockphoto.com/id/468727548/photo/whey-isolate-protein-jar-isolated-on-white.jpg?s=612x612&w=0&k=20&c=tu4m5mlzYAyimxPbfdgzZQ7AlQa8o4eLSO2WGUoBUMk=" alt="product-image" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Product Name</h5>
                        <p class="card-text">Some info about the product</p>
                        <a href="" class="btn btn-danger">Buy Now</a>
                    </div>
                </div>
            </div>

            <!-- card area -->
            <div class="col">
                <div class="card">
                    <img src="https://media.istockphoto.com/id/468727548/photo/whey-isolate-protein-jar-isolated-on-white.jpg?s=612x612&w=0&k=20&c=tu4m5mlzYAyimxPbfdgzZQ7AlQa8o4eLSO2WGUoBUMk=" alt="product-image" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Product Name</h5>
                        <p class="card-text">Some info about the product</p>
                        <a href="" class="btn btn-danger">Buy Now</a>
                    </div>
                </div>
            </div>

            <!-- card area -->
            <div class="col">
                <div class="card">
                    <img src="https://media.istockphoto.com/id/468727548/photo/whey-isolate-protein-jar-isolated-on-white.jpg?s=612x612&w=0&k=20&c=tu4m5mlzYAyimxPbfdgzZQ7AlQa8o4eLSO2WGUoBUMk=" alt="product-image" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Product Name</h5>
                        <p class="card-text">Some info about the product</p>
                        <a href="" class="btn btn-danger">Buy Now</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php include './footer.php' ?>

    <script src="..\css\bootstrap\js\bootstrap.min.js"></script>

</body>

</html>