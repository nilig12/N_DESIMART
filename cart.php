<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>DesiMart</title>
    <!-- Your other meta tags, stylesheets, and scripts -->
</head>
<body>
    <!-- Your navigation and other content -->
    
    <!-- Product with Add to Cart Button -->
    <div class="container">
            <p>Total Items Number: <span id="totalItemsNumber">0</span></p>
            <p>Total Items Name: <span id="totalItemsName"></span></p>
            <p>Total Amount: <span id="totalAmount">0</span></p>
        </div>

    <!-- Your other content -->

    <!-- Your other scripts -->

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Get all Add to Cart buttons
            var addToCartButtons = document.querySelectorAll('.add-to-cart-btn');

            // Add click event listener to each button
            addToCartButtons.forEach(function(button) {
                button.addEventListener("click", function() {
                    // Get product information
                    var productId = this.getAttribute('data-product-id');
                    var productName = this.parentNode.querySelector('h3').innerText;
                    var productPrice = this.parentNode.querySelector('p').innerText;

                    // Store product information (e.g., in local storage)
                    var cart = JSON.parse(localStorage.getItem('cart')) || [];
                    cart.push({ id: productId, name: productName, price: productPrice });
                    localStorage.setItem('cart', JSON.stringify(cart));
                });
            });
        });
    </script>

<script>
        var selectedItems = {
            item1: false,
            item2: false,
            item3: false
        };
       
        function addToCart(itemId) {
            var button = document.querySelector('.add-to-cart');
            if (!button.classList.contains('clicked')) {
                button.classList.add('clicked');
                button.classList.remove('orange-button');
                button.classList.add('green-button');
                updateTotalItemsNumber(1);
            } else {
                button.classList.remove('clicked');
                button.classList.remove('green-button');
                button.classList.add('orange-button');
                updateTotalItemsNumber(-1);
            }
            selectedItems[itemId] = !selectedItems[itemId];
            updateTotalItemsName();
        }

        function updateTotalItemsNumber(change) {
            var totalItemsNumberElement = document.getElementById("totalItemsNumber");
            var currentTotal = parseInt(totalItemsNumberElement.innerText);
            totalItemsNumberElement.innerText = currentTotal + change;
        }

        function updateTotalItemsName() {
            var selectedNames = [];
            for (var item in selectedItems) {
                if (selectedItems[item]) {
                    selectedNames.push(item);
                }
            }
            document.getElementById("totalItemsName").innerText = selectedNames.join(", ");
        }


        function toggleItem(itemId) {
            selectedItems[itemId] = !selectedItems[itemId];
            updateTotals();
        }

        function updateTotals() {
            var totalItemsNumber = 0;
            var totalItemsName = [];
            var totalAmount = 0;

            for (var item in selectedItems) {
                if (selectedItems[item]) {
                    totalItemsNumber++;
                    totalItemsName.push(item);
                    totalAmount += parseInt(document.getElementById("total" + item.slice(-1)).innerText);
                }
            }

            document.getElementById("totalItemsNumber").innerText = totalItemsNumber;
            document.getElementById("totalItemsName").innerText = totalItemsName.join(", ");
            document.getElementById("totalAmount").innerText = totalAmount;
        }

        function increment(id) {
            var quantityElement = document.getElementById(id);
            var currentQuantity = parseInt(quantityElement.innerText.split(":")[1].trim());
            var totalPriceElement = document.getElementById("total" + id.slice(-1));
            var price = 200; // Assuming price is constant for all items, you can modify this if needed
            quantityElement.innerText = "Quantity : " + (currentQuantity + 1);
            totalPriceElement.innerText = (currentQuantity + 1) * price;
            updateTotals();
        }

        function decrement(id) {
            var quantityElement = document.getElementById(id);
            var currentQuantity = parseInt(quantityElement.innerText.split(":")[1].trim());
            var totalPriceElement = document.getElementById("total" + id.slice(-1));
            var price = 200; // Assuming price is constant for all items, you can modify this if needed
            if (currentQuantity > 0) {
                quantityElement.innerText = "Quantity : " + (currentQuantity - 1);
                totalPriceElement.innerText = (currentQuantity - 1) * price;
                updateTotals();
            }
        }
    </script>
</body>
</html>
