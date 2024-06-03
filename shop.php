<?php
session_start();

if (isset($_POST['add'])){
   
    if (isset($_SESSION['cart'])) {
        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if (in_array($_POST['product_id'], $item_array_id)) {
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'shop.php'</script>";
        } else {
            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }
    } else {
        $item_array = array(
            'product_id' => $_POST['product_id']
        );

    
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>

    <div id="sidebar" class="sidebar">
        <div class="logo">
            <img src="img/Facebook_cover_-_1-removebg-preview.png" alt="GadgetGroove Logo" width="150px">
        </div>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fa-solid fa-bars"></i></a>
        <a href="#">Profile</a>
        <a href="#">About Us</a>
        <a href="#">Services</a>
        <a href="#">Contact</a>
        <a href="logout.php">Log Out</a>
    </div>

    <section id="header1">
        <ul id="navbar">
            <li><a href="javascript:void(0)" class="openbtn" onclick="openNav()"><i class="fa-solid fa-bars"></i></a></li>
        </ul> 
        <img src="img/Facebook_cover_-_1-removebg-preview.png" class="logo" alt=""></a>
    
    <div class="nav-search">
          <select class="select-search">
            <option>All</option>
            <option>All Categories</option>
            <option>uno gusto mo</option>
            <option>Sale</option>
          </select>
          <input type="text" placeholder="Search" class="search-input">
          <div class="search-icon">
            <span class="fa-solid fa-magnifying-glass"></i></span>
          </div>
    </div>
        <div>
            <ul id="navbar">
                <li><a href="home2.php"><i class="fa-solid fa-house"></i></a></li>
                <li><a class="active" href="shop.php"><i class="fa-solid fa-shop"></i></a></li>
                <li><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
                <li><a href="order_tracking.php"><i class="fa-solid fa-truck-fast"></i></a></li>
                
            </ul>    
        </div>
    </section>
    
    <section id="page-header">
        <h2>#Unlock endless possibilities </h2><h2>with cutting-edge gadgets!</h2>
    </section>


    <section id="product1" class="section-p1">

    <div class="row text-center py-5">
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
            <form action="shop.php" method="post">
                <div class="card shadow">
                    <div>
                        <img src="img/product/1.jpg" alt="image" class="img-fluid card-img-top">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">MatePad</h5>
                        <h6>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </h6>
                        <p class="card-text">New camera. New design.</p>
                        <h5><span class="price">Php 20,000</span></h5>
                        <input type="hidden" name="product_id" value="1">
                        <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
            <form action="shop.php" method="post">
                <div class="card shadow">
                    <div>
                        <img src="img/product/2.jpg" alt="image" class="img-fluid card-img-top">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Xiaomi Pad</h5>
                        <h6>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </h6>
                        <p class="card-text">New camera. New design.</p>
                        <h5><span class="price">Php 20,000</span></h5>
                        <input type="hidden" name="product_id" value="2">
                        <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
            <form action="shop.php" method="post">
                <div class="card shadow">
                    <div>
                        <img src="img/product/3.jpg" alt="image" class="img-fluid card-img-top">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Tecno</h5>
                        <h6>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </h6>
                        <p class="card-text">New camera. New design.</p>
                        <h5><span class="price">Php 20,000</span></h5>
                        <input type="hidden" name="product_id" value="3">
                        <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
            <form action="shop.php" method="post">
                <div class="card shadow">
                    <div>
                        <img src="img/product/4.jpg" alt="image" class="img-fluid card-img-top">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Xiaomi Smartphone</h5>
                        <h6>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </h6>
                        <p class="card-text">New camera. New design.</p>
                        <h5><span class="price">Php 20,000</span></h5>
                        <input type="hidden" name="product_id" value="4">
                        <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
    <div class="flash-container">
        <div class="flash">
            <img src="img/product/l.png" alt="">
            <div class="des">
              <span>Laptop</span>
              <h5>BMAX X15 PLUS Laptop Windows 11 </h5>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h4>₱16,526</h4>
            </div>
              <input type="hidden" name="product_id" value="2">
              <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>
            </div>
        <div class="flash">
            <img src="img/product/laptoppp.png" alt="">
            <div class="des">
              <span>Laptop</span>
              <h5>ASUS Laptop Savior Intel Core i7 2023</h5>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h4>₱18,990 - ₱22,593</h4>
            </div>
              <input type="hidden" name="product_id" value="2">
              <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>
            </div>
        <div class="flash">
            <img src="img/product/selponv2.jpg" alt="">
            <div class="des">
              <span>Cellphone</span>
              <h5>2023 Brand New Cellphone i14 Pro Max </h5>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h4>₱2,399 - ₱3,599</h4>
             </div>
              <input type="hidden" name="product_id" value="2">
              <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>
            </div>
        <div class="flash">
            <img src="img/product/selpon.jpg" alt="">
            <div class="des">
              <span>Selpon</span>
              <h5>(New) vivo V30 5G </h5><br>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h4>₱24,999 - ₱27,999</h4>
              </div>
              <input type="hidden" name="product_id" value="2">
              <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>
            </div>
        <div class="flash">
            <img src="img/product/1.jpg" alt="">
            <div class="des">
              <span>Tablet</span>
              <h5>2024 New Realme tablet 16+512GB </h5>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h4>₱2,080 - ₱2,980</h4>
              </div>
              <input type="hidden" name="product_id" value="2">
              <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>
            </div>
        <div class="flash">
            <img src="img/product/2.jpg" alt="">
            <div class="des">
              <span>Tablet</span>
              <h5>Xiaomi Redmi Pad 10.5 inch </h5><br>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h4>₱4,990</h4>
              </div>
              <input type="hidden" name="product_id" value="2">
              <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>
            </div>
        <div class="flash">
            <img src="img/product/3.jpg" alt="">
            <div class="des">
              <span>Cellphone</span>
              <h5>[NEW] Tecno Spark Go 2024 </h5><br>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h4>₱3,799</h4>
              </div>
              <input type="hidden" name="product_id" value="2">
              <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>
            </div>
        <div class="flash">
            <img src="img/product/4.jpg" alt="">
            <div class="des">
              <span>Pad</span>
              <h5>Redmi Pad SE </h5><br>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h4>₱9,599 - ₱11,999</h4>
              </div>
              <input type="hidden" name="product_id" value="2">
              <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>
            </div>
        <div class="flash">
            <img src="img/product/t.jpeg" alt="">
            <div class="des">
              <span>Tablet</span>
              <h5>HUAWEI MatePad3</h5>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h4>13,999</h4>
              </div>
              <input type="hidden" name="product_id" value="2">
              <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>
            </div>
        <div class="flash">
            <img src="img/product/l.jpeg" alt="">
            <div class="des">
              <span>Laptop</span>
              <h5>Acer A315-44P-R9WX</h5>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h4>32,999</h4>
              </div>
              <input type="hidden" name="product_id" value="2">
              <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>
            </div>
        <div class="flash">
            <img src="img/product/r.jpeg" alt="">
            <div class="des">
              <span>Watch</span>
              <h5>Xiaomi Redmi Watch 3</h5>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h4>3,599</h4>
              </div>
              <input type="hidden" name="product_id" value="2">
              <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>
            </div>
        <div class="flash">
            <img src="img/product/c.jpeg" alt="">
            <div class="des">
              <span>Cellphone</span>
              <h5>Vivo V30 5G</h5>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h4>22,799 - 23, 949</h4>
              </div>
              <input type="hidden" name="product_id" value="2">
              <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>
            </div>
    </div>
    </section>
    
    <section id="pagination" class="section-p1">
      <a href="#">1</a>
      <a href="#">2</a>
      <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
    </section>

    <footer>
      <a href="#" class="footer-title">
        Back to top
      </a>
      <div class="footer-items">
        <ul>
          <h3>Get to Know Us</h3>
          <li><a href="#">About us</a></li>
          <li><a href="#">Careers</a></li>
          <li><a href="#">Press Release</a></li>
          <li><a href="#">Gadget Groove</a></li>
        </ul>
        <ul>
          <h3>Connect with Us</h3>
          <li><a href="#"><i class="fa-brands fa-facebook" &amp;></i> Facebook</a></li>
          <li><a href="#"><i class="fa-brands fa-twitter" ></i> Twitter</a></li>
          <li><a href="#"><i class="fa-brands fa-instagram"></i> Instagram</a></li>
        </ul>
        <ul>
          <h3>Make Money with Us</h3>
          <li><a href="#">Sell on Gadget Groove</a></li>
          <li><a href="#">Sell under Gadget Groove Accelerator</a></li>
          <li><a href="#">Protect and Build Your Brand</a></li>
          <li><a href="#">Gadget Groove Global Selling</a></li>
          <li><a href="#">Become an Affiliate</a></li>
          <li><a href="#">Fulfillment by Gadget Groove</a></li>
          <li><a href="#">Advertise Your Products</a></li>
          <li><a href="#">Gadget Groove Pay on Merchants</a></li>
        </ul>
        <ul>
          <div class="col-install">
          <h3>Install App</h3>
          <p> From App Store or Google Play</p>
          <div class="row">
            <img src="img/hmmm.png" alt="">
          </div>
          <p> Secured Payments Gateways</p>
            <img src="img/pay.png" alt="">
          </div>
        </ul>
      </div>
    </footer>

    
    <script src="script.js"></script>
</body>
</html>
