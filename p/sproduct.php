<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/utils.css">
    <link rel="stylesheet" href="CSS/sproduct.css">
    <link rel="stylesheet" href="CSS/responsive.css">
    <script src="https://kit.fontawesome.com/d36c3408bf.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
    
      <header>
        <nav>
            <div class="logo">
                <img src="img/logo1.jpg" alt="">
            </div>
            <ul>
                <li> <a href="home.php">Home</a></li>
                <li> <a href="About.php">About</a></li>
                <li> <a href="contact.php">Contact</a></li>
                

            </ul>
           
              <div class="search">
                <form id="search-box">

                    <select id="search-option">
                        <option value="All">All</option>
                        <option value="Best of electronics">Electronics</option>
                        <option value="Fashion">Men's fashion</option>
                        <option value="w-fashion">Women's Fashion</option>
        
                    </select>
                  <input type="text" name="" id="" placeholder="Search here">
                              </div>
                            </form>
                     <div class="login">
                <button class="btn" onclick="window.location.href='login.php';"><i class="fa-solid fa-user"></i></button>
             <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            
        
        </nav>
    </header>
    <section id="prodetails" class="section-p1">
        <div class="single-pro-img">
           <img src="img/c1.jpg" width="100%" id="mainimg" alt="" class="src"> 
           <div class="small-img-group">
            <div class="small-img-col">
                <img src="img/c1.jpg" width="100%"alt="" class="small-img">
            </div>
            <div class="small-img-col">
                <img src="img/c2.jpg" width="100%"alt="" class="small-img">
            </div>
            <div class="small-img-col">
                <img src="img/c3.jpg" width="100%"alt="" class="small-img">
            </div>
            <div class="small-img-col">
                <img src="img/c4.jpg" width="100%"alt="" class="small-img">
            </div>
           </div>
        </div>
        <div class="single-pro-details">
            <h2>Canon EOS M50 Mark II Mirrorless Camera EF-M15-45mm is STM Lens  (Black)</h2>
            <h6>Special price</h6>
            <h1>&#8377;56,899</h1>
           <h4> Quantity</h4>
            <input type="number" value = "1">
            <button class="buy" onclick="openPopup()">Buy Now</button>
            <button class="cart">Add To Cart</button>
            <h3>Coupons for you:</h3>
                <h3><i class="bi bi-tag-fill">Special Price₹100 off with cashback coupon on First OrderT&C</i>
                Available offers</h3>
                <h3><i class="bi bi-tag-fill"> Bank Offer10% off on Kotak Bank Credit Card, up to ₹1,750. On orders of ₹5,000 and aboveT&C</i></h3>
                <h3><i class="bi bi-tag-fill"> Bank Offer10% off on SBI Credit Card, up to ₹1,750, on orders of ₹5000 and aboveT&C</i></h3>
               <h3> <i class="bi bi-tag-fill"> Bank Offer10% off on Kotak Bank Credit Card EMI Transactions, up to ₹2,000. On orders of ₹5,000 and aboveT&C</i></h3>

                <h3>Warranty:
                    2 Year Warranty (1 year standard warranty + 1 year additional warranty from the date of purchase made by the customer.)</h3>
        </div>
    </section>
    <section>
        <h1 id="center">You May Also Like</h1>
        <div class="simillar">
        <div class="pro-container">
            <div class="pro">
                <img src="img/keyboard.jpg"alt=""class="src"onclick="window.location.href='pro2.php';">
                <div class="des">
                    <span>Zebronics</span>
                    <h5>Gaming keyboard and Mouse combo</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>Starting from</h4>
                    <h2>&#8377;1,999</h2>
                </div>
            </div>
        </div>
        <div class="pro-container">
            <div class="pro">
                <img src="img/mobile2.jpg" alt="" class="src">
                <div class="des">
                    <span>Oppo</span>
                    <h5>Oppo F21 Pro</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>Starting from</h4>
                    <h2>&#8377;14,999</h2>
                </div>
            </div>
        </div>
        <div class="pro-container">
            <div class="pro">
                <img src="img/m.jpg" alt="" class="src">
                <div class="des">
                    <span>i-phone </span>
                    <h5>i-phone 13 Pro</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>Starting from</h4>
                    <h2>&#8377;80,000</h2>
                </div>
            </div>
        </div>
        <div class="pro-container">
            <div class="pro">
                <img src="img/tv.jpg" alt="" class="src">
                <div class="des">
                    <span>Samsung</span>
                    <h5>Samsung Hd TV</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>Starting from</h4>
                    <h2>&#8377;12,999</h2>
                </div>
            </div>
        </div>
        <div class="pro-container">
            <div class="pro">
                <img src="img/laptop.jpg" alt="" class="src">
                <div class="des">
                    <span>Dell</span>
                    <h5>Dell laptop </h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>Starting from</h4>
                    <h2>&#8377;21,999</h2>
                </div>
            </div>
        </div>
    </div>
    </section>
    <div class="popup" id="popup">
        <img src="/img/tick.jpeg" alt="">
        <h2>Order Placed!</h2>
        <p>It Will Reach You In Two Days!!
        Thank You For Shopping With MS Cart!!
        </p>
        <button type="button" onclick="closePopup()">OK</button>
    </div>
    <footer class="flex-all-center">
        <p>Copyright &copy; MyCart.com</p>
    </footer>
    <script>
        var mainimg=document.getElementById("mainimg");
        var smallimg=document.getElementsByClassName("small-img");
        smallimg[0].onclick=function(){
            mainimg.src=smallimg[0].src;
        }
        smallimg[1].onclick=function(){
            mainimg.src=smallimg[1].src;
        }
        smallimg[2].onclick=function(){
            mainimg.src=smallimg[2].src;
        }
        smallimg[3].onclick=function(){
            mainimg.src=smallimg[3].src;
        }

        let popup = document.getElementById("popup");
        function openPopup(){
            popup.classList.add("open-popup");
        }
        function closePopup(){
            popup.classList.remove("open-popup");
        }
    </script>
</body>

</html>