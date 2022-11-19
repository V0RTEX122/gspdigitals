<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GSP DIGITALS</title>
    <!-- integrity to be remove -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="body-wrapper">
        <?php include('./view/header.php'); ?>

        <?php include('./view/login.php'); ?>

        <?php include('./view/register.php'); ?>

        <section id="prodetails" class="section-p1">
            <div class="single-pro-image">
                <img src="img/products/witcher3.jpg" width="100%" id="MainImg" alt="">

                <div class="small-img-group">
                    <div class="small-img-col">
                        <img src="img/products/witcher3.jpg" width="100%" class="small-img" alt="">
                    </div>

                    <div class="small-img-col">
                        <img src="img/products/witcher3.jpg" width="100%" class="small-img" alt="">
                    </div>

                    <div class="small-img-col">
                        <img src="img/products/witcher3.jpg" width="100%" class="small-img" alt="">
                    </div>

                    <div class="small-img-col">
                        <img src="img/products/witcher3.jpg" width="100%" class="small-img" alt="">
                    </div>
                </div>
            </div>

            <div class="single-pro-details">
                <h6>PC / Witcher 3</h6>
                <h4>Witcher 3 Enhanced Edition</h4>
                <h2>$139.00</h2>
                <select name="" id="">
                    <option value="">Select Edition</option>
                    <option value="">Standard</option>
                    <option value="">Enhanced</option>
                    <option value="">GOTY</option>                    
                </select>
                <input type="number" value="1">
                <button class="normal">Add To Cart</button>
                <h4>Product Details</h4>
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non commodo lacus. Sed bibendum porttitor nibh, rutrum sollicitudin tortor posuere vel. Mauris imperdiet auctor rhoncus. Aenean et bibendum massa. Cras faucibus tristique lectus, quis viverra neque consequat non. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac auctor elit. Duis vehicula orci non est varius molestie. Vestibulum quis tincidunt ante.</span>
            </div>
        </section>

        <section id="product1" class="section-p1">
            <h2>Featured Products</h2>
            <p>Summer Collection New Modern Design</p>
            <div class="pro-container">
                <div class="pro">
                    <img src="img/products/witcher3.jpg" alt="">
                    <div class="des">
                        <span>adidas</span>
                        <h5>Cartoon Astronaut T-Shirts</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fa-brands fa-opencart cart"></i></a>
                </div>

                <div class="pro">
                    <img src="img/products/witcher3.jpg" alt="">
                    <div class="des">
                        <span>adidas</span>
                        <h5>Cartoon Astronaut T-Shirts</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fa-brands fa-opencart cart"></i></a>
                </div>

                <div class="pro">
                    <img src="img/products/witcher3.jpg" alt="">
                    <div class="des">
                        <span>adidas</span>
                        <h5>Cartoon Astronaut T-Shirts</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fa-brands fa-opencart cart"></i></a>
                </div>

                <div class="pro">
                    <img src="img/products/witcher3.jpg" alt="">
                    <div class="des">
                        <span>adidas</span>
                        <h5>Cartoon Astronaut T-Shirts</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fa-brands fa-opencart cart"></i></a>
                </div>
            </div>
        </section>

        <section id="newsletter" class="section-p1 section-m1">
            <div class="newstext">
                <h4>Sign Up For Newsletters</h4>
                <p>Get E-mail updates about our latest shop and <span>special offers</span></p>
            </div>

            <div class="form">
                <input type="text" placeholder="Your email address">
                <button class="normal">Sign Up</button>
            </div>
        </section>

        <?php include('./view/footer.php'); ?>

        <script>
            var MainImg = document.getElementById("MainImg");
            var smallimg = document.getElementsByClassName("small-img");

            smallimg[0].onclick = function() {
                MainImg.src = smallimg[0].src;
            }

            smallimg[1].onclick = function() {
                MainImg.src = smallimg[1].src;
            }

            smallimg[2].onclick = function() {
                MainImg.src = smallimg[2].src;
            }

            smallimg[3].onclick = function() {
                MainImg.src = smallimg[3].src;
            }
        </script>

    </div>

    <script src="script.js"></script>
</body>

</html>