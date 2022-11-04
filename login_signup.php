<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title> SignUp and Login</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <div class="container" id="container">
        <div class="header">
            <h1>SignUp and Login</h1>
        </div>
        <div class="form-container sign-up-container">
            <form action="signup_action.php" method="POST">
                <h1 style="padding-top: 15px">Create Account</h1>
                <input type="text" name="full_name" placeholder="Full Name" required>
                <input type="text" name="email" placeholder="Email Id" required>
                <input type="date" name="dob" placeholder="Birth Date" required>
                <input type="number" name="phone" placeholder="Phone Number" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="confirm_password" placeholder="Confirm_Password" required>
                <button type="submit" style="margin-top:10px"> Create Account</button>
                <h5>Already have an account! <a class="ghost" id="signIn" style="color:blue;"><u>Sign In</u></a></h5>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="login_action.php" method="post">
                <h1 style="padding-bottom: 15px"> Login Now</h1>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <a href="#" style="padding-left:150px; font-weight: bold"> Forgot Your Password?</a>
                <button type="submit" style="margin-top: 10px"> Let Me In...</button>
                <h5>New to here! <a class="ghost" id="signUp" style="color:blue;"><u>Sign Up</u></a></h5>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <img src="https://www.nacionrex.com/__export/1570213049857/sites/debate/img/2019/10/04/joker_estreno_fbi_vigilancia_redes_sociales_espionaje_2019_crop1570212801819.jpg_423682103.jpg" alt="movie-1" height="480" width="500"/>
                    
                </div>
                <div class="overlay-panel overlay-right">
                    <img src="https://i.pinimg.com/originals/b8/e1/b6/b8e1b67a3f203dac4bc4602339e534a3.jpg" alt="movie-2" height="480" width="500"/>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
    });
    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
    });
</script>
</body>
</html>
