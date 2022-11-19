<section id="signup-form" class="modal">
    <form class="modal-content animate" action="/action_page.php">
        <span onclick="document.getElementById('signup-form').style.display='none'" class="close" title="Close Modal">&times;</span>
        <div class="container">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

            <div class="date-container" >
                <label for="dd"><b>Birthdate</b></label>
                <?php include('./view/date.php'); ?>
            </div>

            <label>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.
            </label>
            <!-- <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p> -->

            <div class="clearfix">
                <button type="button" onclick="document.getElementById('signup-form').style.display='none'" class="cancelbtn">Cancel</button>
                <button type="submit" class="signupbtn">Sign Up</button>
            </div>
        </div>
    </form>
</section>