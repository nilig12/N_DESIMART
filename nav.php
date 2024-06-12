<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .fullscreen-dropdown {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    width: 100vw;
    height: 100vh;
    margin: 0;
    padding: 20px;
    background-color: white;
    z-index: 1000; /* Ensure it's above other elements */
    overflow-y: auto; /* Enable scrolling if content exceeds screen height */
}

    </style>
</head>
<body>
    <!-- Topbar Start -->
    <div class="container-fluid px-5 d-none d-lg-block">
        <div class="row gx-5 py-3 align-items-center">
            <div class="col-lg-3">
                <div class="d-flex align-items-center justify-content-start">
                    <i class="bi bi-phone-vibrate fs-1 text-primary me-2"></i>
                    <h2 class="mb-0">+91 9999999969</h2>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex align-items-center justify-content-center">
                    <a href="index.html" class="navbar-brand ms-lg-5">
                        <h1 class="m-0 display-4 text-primary"><span class="text-secondary">Desi</span>Mart</h1>
                    </a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="d-flex align-items-center justify-content-end">
                    <a class="btn btn-primary btn-square rounded-circle me-2" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-primary btn-square rounded-circle me-2" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-primary btn-square rounded-circle me-2" href="https://www.linkedin.com/home"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-primary btn-square rounded-circle" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-5">
        <a href="index.html" class="navbar-brand d-flex d-lg-none">
            <h1 class="m-0 display-4 text-secondary"><span class="text-white">Desi</span>Mart</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto py-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="product.php" class="nav-item nav-link">Product</a>
                <a href="service.php" class="nav-item nav-link">Service</a>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
            </div>
            <!-- Login Button -->
        <!-- <div class="navbar-nav"> 
            <a href="login.php" class="nav-item nav-link">Login</a> 
        </div> -->
            <!-- Cart Icon -->

            <div class="navbar-nav">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i id="cartIcon" class="bi bi-cart"></i>
                    <span id="cartItemCount" class="ms-1">0</span>
                    <ul class="dropdown-menu dropdown-menu-end fullscreen-dropdown" aria-labelledby="navbarDropdown" id="cartDropdown">
                        <li class="dropdown-item">
                            <div>
                                <img class="img-fluid mb-2" src="img/product-1.png" alt="">
                            </div>
                            <div>
                                <h6 class="mb-1">Organic Vegetable</h6>
                                <h5 class="text-primary mb-0">200</h5>
                                <h5 class="text-primary mb-0">Total Price: </h5>
                            </div>
                        </li>
                    </ul>
                </a>
            </div>
        </div>
    </nav>
    <!-- Navbar End --> 
</body>
</html>