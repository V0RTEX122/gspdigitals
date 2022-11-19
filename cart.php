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

        <section id="page-header" class="about-header">
            <h2>#let's_talk</h4>
                <p>LEAVE A MESSAGE, We love to hear from you</p>
        </section>

        <section id="cart" class="section-p1">
            <table width="100%">
                <thead>
                    <tr>
                        <td>Remove</td>
                        <td>Image</td>
                        <td>Product</td>
                        <td>Price</td>
                        <td>Quatity</td>
                        <td>Subtotal</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                        <td><img src="img/products/stardew.png" alt=""></td>
                        <td>TEST GAME PRODUCT</td>
                        <td>$118.19</td>
                        <td><input type="number" value="1"></td>
                        <td>$118.19</td>
                    </tr>
                    <tr>
                        <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                        <td><img src="img/products/stardew.png" alt=""></td>
                        <td>TEST GAME PRODUCT</td>
                        <td>$118.19</td>
                        <td><input type="number" value="1"></td>
                        <td>$118.19</td>
                    </tr>
                    <tr>
                        <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                        <td><img src="img/products/stardew.png" alt=""></td>
                        <td>TEST GAME PRODUCT</td>
                        <td>$118.19</td>
                        <td><input type="number" value="1"></td>
                        <td>$118.19</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section id="cart-add" class="section-p1">
            <div id="coupon">
                <h3>Apply Coupon</h3>
                <div>
                    <input type="text" placeholder="Enter Your Coupon">
                    <button class="normal">Apply</button>
                </div>
            </div>

            <div id="subtotal">
                <h3>Cart Totals</h3>
                <table>
                    <tr>
                        <td>Cart Subtotal</td>
                        <td>$355</td>
                    </tr>
                    <tr>
                        <td>Shipping</td>
                        <td>Free</td>
                    </tr>
                    <tr>
                        <td><strong>Total</strong></td>
                        <td><strong>$355</strong></td>
                    </tr>
                </table>
                <button class="normal">Proceed to checkout</button>
            </div>
        </section>

        <?php include('./view/footer.php'); ?>

    </div>

    <script src="script.js"></script>
</body>

</html>