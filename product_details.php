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
   <?php
   include("nav.php")?>

    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 bg-hero mb-5">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-1 text-white mb-md-4">Our Products</h1>
                    <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Home</a>
                    <a href="" class="btn btn-secondary py-md-3 px-md-5">Products</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Products Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase">Products</h6>
                <h1 class="display-5">Our Fresh & Organic Products</h1>
            </div>
                <div class="pb-5">
                <?php
                    include("connection.php");
                    if (isset($_GET['Name'])) {
                        $name = $_GET['Name'];
                        $sno = 0;
                    $sql="SELECT * FROM add_product WHERE Name='$name'";
                    $result=mysqli_query($conn, $sql);
                    while($fetch = mysqli_fetch_assoc($result)){
                        $sno = $sno + 1;
                ?>
                        <!-- <div class="product-item position-relative bg-white d-flex flex-column text-center"> -->
                        <img src="Admin/images/<?php echo $fetch['Image']?>" alt="" class="popup-image" height="300px" width="300px">
                        <h3><?php echo $fetch['Name']?></h3>
                        <b>Discription: <?php echo $fetch['Discription']; ?></b> <br>
                        <b>Price: <?php echo $fetch['Price']; ?></b> <br>
                        <button class="btn btn-success"> <a href="buyer.php">Buy Now</a></button>                     
                        <!-- </div> -->
                        </div>
                        <?php
                        }
                    }
                    ?>
                </div>
        </div>
    </div>
    <!-- Products End -->


    

    <?php include("footer.php"); ?>
    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <script>
        // Function to update cart icon count
        function updateCartIcon(count) {
            const cartItemCountElement = document.getElementById("cartItemCount");
            cartItemCountElement.textContent = count;
        }

        // Function to update cart dropdown with items
        function updateCartDropdown(items) {
            const cartDropdown = document.getElementById("cartDropdown");
            cartDropdown.innerHTML = ''; // Clear previous items

            // Add new items to dropdown
            items.forEach(item => {
                const listItem = document.createElement('li');
                listItem.textContent = `${item.product}: ${item.price.toFixed(2)}`;
                cartDropdown.appendChild(listItem);
            });
        }

        // Initialize cart variables
        let cartItemCount = 0;
        let cartItems = [];

        // Event listener for Add To Cart buttons
        const addToCartButtons = document.querySelectorAll('.addToCartBtn');
        addToCartButtons.forEach(button => {
            button.addEventListener('click', function (event) {
                event.preventDefault();

                // Get product details from data attributes
                const productName = button.dataset.product;
                const productPrice = parseFloat(button.dataset.price);

                // Add product to cart
                cartItems.push({ product: productName, price: productPrice });

                // Update cart icon count
                cartItemCount++;
                updateCartIcon(cartItemCount);

                // Update cart dropdown
                updateCartDropdown(cartItems);
            });
        });

        // Initialize Bootstrap dropdown functionality
        var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'));
        dropdownElementList.map(function (dropdownToggleEl) {
            return new bootstrap.Dropdown(dropdownToggleEl);
        });
    </script>

    <!-- Add Bootstrap Bundle (Bootstrap + Popper.js) JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <script>
        // Function to update cart dropdown with items and total price
function updateCartDropdown(items) {
    const cartDropdown = document.getElementById("cartDropdown");
    cartDropdown.innerHTML = ''; // Clear previous items

    // Initialize total price variable
    let totalPrice = 0;

    // Add new items to dropdown
    items.forEach(item => {
        const listItem = document.createElement('li');
        listItem.classList.add('dropdown-item');

        // Create and append product name div
        const productNameDiv = document.createElement('div');
        productNameDiv.textContent = item.product;
        productNameDiv.classList.add('mr-2');
        listItem.appendChild(productNameDiv);

        // Create and append product price div
        const productPriceDiv = document.createElement('div');
        productPriceDiv.textContent = `Price: ${item.price.toFixed(2)}`;
        listItem.appendChild(productPriceDiv);

        // Update total price
        totalPrice += item.price;

        // Append list item to dropdown
        cartDropdown.appendChild(listItem);
    });

    // Display total price
    const totalItem = document.createElement('li');
    totalItem.classList.add('dropdown-item', 'text-right', 'font-weight-bold');
    totalItem.textContent = `Total: ${totalPrice.toFixed(2)}`;
    cartDropdown.appendChild(totalItem);
}

    </script>
</body>
</html>

