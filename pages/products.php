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
    <div class="container-fluid">
        <div class="row">
            <div class="card mx-2 my-2" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Product name</h5>
                    <h6 class="card-subtitle mt-2">Rs. Price</h6>
                    <p class="card-text">Some description about the product</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

            <div class="card mx-2 my-2" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Product name</h5>
                    <h6 class="card-subtitle mt-2">Rs. Price</h6>
                    <p class="card-text">Some description about the product</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include_once "./footer.php"; ?>

</body>

</html>