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

        <section id="contact-details" class="section-p1">
            <div class="details">
                <span>GET IN TOUCH</span>
                <h2>Visit one of our agency locations or contact us today</h2>
                <h3>Head Office</h3>
                <div>
                    <li>
                        <i class="fa-solid fa-map"></i>
                        <p>56 Glassford Street Glasgow G1 1UL New York</p>
                    </li>
                </div>

                <div>
                    <li>
                        <i class="fa-solid fa-envelope"></i>
                        <p>test@example.com</p>
                    </li>
                </div>

                <div>
                    <li>
                        <i class="fa-solid fa-phone"></i>
                        <p>test@example.com</p>
                    </li>
                </div>

                <div>
                    <li>
                        <i class="fa-solid fa-clock"></i>
                        <p>Monday - Saturday</p>
                    </li>
                </div>
            </div>

            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d18110.861406271695!2d124.85103744066372!3d6.498504605357839!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sph!4v1658937143303!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>

        <section id="form-details">
            <form action="">
                <span>LEAVE A MESSAGE</span>
                <h2>We love to hear from you</h2>
                <input type="text" placeholder="Your Name">
                <input type="text" placeholder="E-mail">
                <input type="text" placeholder="Subject">
                <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
                <button class="normal">Submit</button>
            </form>

            <div class="people">
                <div>
                    <img src="img/people/1.png" alt="">
                    <p><span>John Doe</span>Senior Marketing Manager <br> Phone: + 000 123 000 77 88 <br> Email: contact@example.com</p>
                </div>

                <div>
                    <img src="img/people/2.png" alt="">
                    <p><span>John Doe</span>Senior Marketing Manager <br> Phone: + 000 123 000 77 88 <br> Email: contact@example.com</p>
                </div>

                <div>
                    <img src="img/people/3.png" alt="">
                    <p><span>John Doe</span>Senior Marketing Manager <br> Phone: + 000 123 000 77 88 <br> Email: contact@example.com</p>
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

    </div>

    <script src="script.js"></script>
</body>

</html>