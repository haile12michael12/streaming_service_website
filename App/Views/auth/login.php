
<?php require "../includes/header.php"; ?>
 <?php require "../config/config.php"; ?>

<?php
 if(isset($_SESSION['username'])) {
      header("location: http://localhost/streaming_service_website/index.php");
    }

if(isset($_POST['submit'])) {
        if($_POST['email'] == '' OR $_POST['password'] == '') {
            echo "<script>alert('some inputs are empty');</script>";
                  
        } else {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $login = $conn->query("SELECT * FROM users WHERE email = '$email'");

            $login->execute();

            $row = $login->FETCH(PDO::FETCH_ASSOC);

             if($login->rowCount() > 0) {

                if(password_verify($password, $row['password'])){
                    

                    $_SESSION['username'] = $row['username'];
                    $_SESSION['user_id'] = $row['id'];
                     $_SESSION['email'] = $row['email'];

                    header("location:" .APPRUL."");
                } else {

                  echo "<script>alert('some inputs are empty');</script>";
                 }


             } else {

              echo "<div class='alert alert-danger  text-center  role='alert'>
                        the email or password is wrong
                    </div>";
             }
        }
    }




?>
    <!-- Normal Breadcrumb Begin -->
    <section class="normal-breadcrumb set-bg" data-setbg="<?php echo APPURL; ?>/assets/img/normal-breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2>Login</h2>
                        <p>Welcome to the official blog.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Normal Breadcrumb End -->

    <!-- Login Section Begin -->
    <section class="login spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login__form">
                        <h3>Login</h3>
                        <form action="#">
                            <div class="input__item">
                                <input type="text" placeholder="Email address">
                                <span class="icon_mail"></span>
                            </div>
                            <div class="input__item">
                                <input type="text" placeholder="Password">
                                <span class="icon_lock"></span>
                            </div>
                            <button type="submit" class="site-btn">Login Now</button>
                        </form>
                        <a href="#" class="forget_pass">Forgot Your Password?</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login__register">
                        <h3>Dont’t Have An Account?</h3>
                        <a href="signup.html" class="primary-btn">Register Now</a>
                    </div>
                </div>
            </div>
          
        </div>
    </section>
    <!-- Login Section End -->
<?php require "../includes/footer.php"; ?>
    
     