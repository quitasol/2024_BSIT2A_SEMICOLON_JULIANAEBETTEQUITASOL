<?php
session_start();

if(isset($_POST['checkout'])) {

    $cartItems = $_SESSION['cart'] ?? [];

    unset($_SESSION['cart']);
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" >
</head>
<body class="bg-light">

        <div id="sidebar" class="sidebar">
        <div class="logo">
            <img src="img/Facebook_cover_-_1-removebg-preview.png" alt="GadgetGroove Logo" width="150px">
        </div>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fa-solid fa-bars"></i></a>
        <a href="profile.php">Profile</a>
        <a href="#">About Us</a>
        <a href="#">Services</a>
        <a href="#">Contact</a>
        <a href="logout.php">Log Out</a>

    </div>

    <section id="header1">
        <ul id="navbar">
            <li><a href="javascript:void(0)" class="openbtn" onclick="openNav()"><i class="fa-solid fa-bars"></i></a></li>
        </ul> 
        <img src="img/Facebook_cover_-_1-removebg-preview.png" class="logo" alt="">
        <div class="nav-search">
            <select class="select-search">
                <option>All</option>
                <option>All Categories</option>
                <option>uno gusto mo</option>
                <option>Sale</option>
            </select>
            <input type="text" placeholder="Search" class="search-input">
            <div class="search-icon">
                <span class="fa-solid fa-magnifying-glass"></span>
            </div>
        </div>
        <div>
            <ul id="navbar">
                <li><a href="home2.php"><i class="fa-solid fa-house"></i></a></li>
                <li><a href="shop.php"><i class="fa-solid fa-shop"></i></a></li>
                <li><a class="active" href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
                <li><a href="order_tracking.php"><i class="fa-solid fa-truck-fast"></i></a></li>
            </ul> 
        </div>
    </section>

<?php 

include_once 'cart/php/Db.php'; 
include_once 'place_order.php'; 
?>

    <h3>Place Order</h3>
 
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

        <button type="submit" name="checkout">Place Order</button>

    </form>
    
    <?php  
    include_once 'place_order.php'; 
    ?>
        
</body>
</html>

