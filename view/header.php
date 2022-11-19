<section id="header" class="section-p3">
    <a href="#"><img src="img/logo2.png" class="logo" alt=""></a>

    <div id="search-bar">
        <form action="submit">
            <input type="text" placeholder="Search..">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
        <ul id="most-search">
            <li><span>Top Searches</span></li>
            <li><a href="shop.html">Elden Ring</a></li>
            <li><a href="shop.html">Monster Hunter Rise</a></li>
            <li><a href="shop.html">Resident Evil</a></li>
        </ul>
    </div>

    <div>
        <ul id="login-reg">
            <button id="sign-up" class="normal" onclick="document.getElementById('signup-form').style.display='block'">REGISTER</button>
            <button id="login" class="normal" onclick="document.getElementById('login-form').style.display='block'">LOGIN</button>
            <li><a id="wishlist" href="wishlist.html"><i class="fa fa-thumbs-up fa-2x" aria-hidden="true"></i></a></li>
        </ul>
        <ul id="navbar">
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li class="mobile-navbar-menu"><a href="contact.php">Wishlist</a></li>
            <li class="mobile-navbar-menu" onclick="document.getElementById('login-form').style.display='block'"><a>Login</a></li>
            <li class="mobile-navbar-menu" onclick="document.getElementById('signup-form').style.display='block'"><a>Register</a></li>
            <li id="lg-bag"><a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a></li>
            <a href="#" id="close"><i class="fa fa-times"></i></a>
        </ul>
    </div>

    <div id="mobile">
        <a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a>
        <i id="bar" class="fas fa-outdent"></i>
    </div>
</section>