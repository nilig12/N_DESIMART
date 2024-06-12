<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>DesiMart</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?php include("nav.php"); ?>

    <!-- Login Page Content -->
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card" id="loginCard">
                <div class="card-body">
                    <h5 class="card-title">Login</h5>
                    <!-- User Type Selection Dropdown -->
                    <div class="mb-3">
                        <label for="userTypeSelect" class="form-label">Select User Type:</label>
                        <select class="form-select" id="userTypeSelect">
                            <option value="seller">Seller</option>
                            <option value="buyer">Buyer</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter your username">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter your password">
                    </div>
                    <button type="button" class="btn btn-primary" onclick="login()">Login</button>
                    <a href="#" onclick="showRegisterForm()">Register</a>
                </div>
            </div>
            <div class="card" id="registerCard" style="display: none;">
                <div class="card-body">
                    <h5 class="card-title">Register</h5>
                    <form>
                        <div class="mb-3">
                            <label for="registerUsername" class="form-label">Username</label>
                            <input type="text" class="form-control" id="registerUsername" placeholder="Enter Your Username">
                        </div>
                        <div class="mb-3">
                            <label for="registerPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="registerPassword" placeholder="Enter Your Password">
                        </div>
                        <div class="mb-3">
                            <label for="confirmPassword" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Your Password">
                        </div>
                        <div class="mb-3">
                            <label for="userTypeRegisterSelect" class="form-label">Select User Type:</label>
                            <select class="form-select" id="userTypeRegisterSelect">
                                <option value="seller">Seller</option>
                                <option value="buyer">Buyer</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                    <a href="#" onclick="showLoginForm()">Back to Login</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function showRegisterForm() {
        document.getElementById("loginCard").style.display = "none";
        document.getElementById("registerCard").style.display = "block";
    }

    function showLoginForm() {
        document.getElementById("loginCard").style.display = "block";
        document.getElementById("registerCard").style.display = "none";
    }
</script>

<!-- End Login Page Content -->

<!-- JavaScript for Login Functionality -->
<script>
    function login() {
        var userType = document.getElementById("userTypeSelect").value;
        if (userType === "seller") {
            window.location.href = "seller.php";
        } else if (userType === "buyer") {
            window.location.href = "buyer.php";
        }
        // Add more conditions for different user types if needed
    }
</script>
    
</body>
</html>