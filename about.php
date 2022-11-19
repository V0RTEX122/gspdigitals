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
            <h2>#KnowUs</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non commodo lacus. Sed bibendum porttitor nibh, rutrum sollicitudin tortor posuere vel.</p>
        </section>

        <section id="about-head" class="section-p1">
            <img src="img/about/a6.jfif" alt="">
            <div>
                <h2>Who We Are?</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non commodo lacus. Sed bibendum porttitor nibh, rutrum sollicitudin tortor posuere vel. Mauris imperdiet auctor rhoncus. Aenean et bibendum massa. Cras faucibus tristique lectus, quis viverra neque consequat non. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac auctor elit. Duis vehicula orci non est varius molestie. Vestibulum quis tincidunt ante.
                    Morbi eu orci eu justo luctus dignissim. Ut nisi nisi, varius consequat semper nec, efficitur volutpat orci.
                </p>
                <abbr title="">Morbi felis neque, ornare et cursus quis, bibendum vel dolor. Proin rhoncus, est ut semper convallis, massa justo varius libero, vel pellentesque metus eros non nibh. Nullam sed luctus elit, imperdiet suscipit nulla. Nam rhoncus tempor nulla, eu laoreet urna commodo eu. Nunc quis diam ut ligula sollicitudin aliquet eu ut lectus. Sed metus erat, efficitur vitae vehicula eget, vehicula ac dui. In non nulla et leo efficitur vestibulum sed id ligula.</abbr>
                <br><br>
                <marquee bgcolor="#ccc" loop="-1" scrollamount="5" width="100%">Suspendisse odio nisl, elementum id sodales sed, tempus a nisl. In fringilla non erat ut sodales. Vestibulum commodo mauris sed magna condimentum consequat. Ut turpis nulla, vestibulum id iaculis at, porttitor id ligula.</marquee>
            </div>
        </section>

        <section id="about-app" class="section-p1">
            <h1>Download Our <a href="#">App</a></h1>
            <div class="video">
                <video autoplay muted loop src="img/about/1.mp4"></video>
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
        
    </div>

    <script src="script.js"></script>
</body>

</html>