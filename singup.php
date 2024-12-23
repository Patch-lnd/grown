<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grown: Signup</title>
    <link rel="stylesheet" href="singup.css">
</head>
<body>
    <?php require_once("nav.php") ?>

    <div class="container">

    <div class="img">
        <div class="image">
            <img src="images/login_img.jpg" alt="relaxful image">
        </div>
        <div class="text">
            <h2 class="title1">GROWN</h2>
            <p class="words">Work on yourself for yourself. Become who you are destined to be.</p>
        </div>
    </div>
        <div class="form">
            <h2 class="title2">Signup</h2>
            <form action="">
                <label for="name" class="words-form">User Name </label>
                <input type="text" id="name" placeholder=" John Doe...">
                <label for="pass" class="words-form">Password</label>
                <input type="password" id="pass"placeholder="password...">
                <div class="check">
                    <label for="check" class="words-form">Remember me</label>
                    <input type="checkbox" id="check">
                </div>
                <div class="text-accounts">
                    <p class="text-account">Do not yet have an account ? <a href="#">sign in</a></p>
                    <p class="text-account">Password forgotten ? <a href="#">Reset Password</a></p>
                </div>
        
                <div class="sign-logo">
                    <a href="#"><img src="images/logo_icon/google_icon.png" alt="connect with Google"></a>
                    <a href="#"><img src="images/logo_icon/apple_icon.png" alt="connect with Apple"></a>
                    <a href="#"><img src="images/logo_icon/facebook_icon.png" alt="connect with Facebook"></a>
                </div>
                <input type="submit" id="submit" value="Submit">
            </form>
        </div>
    </div>
    








    <br><br> <br> <br> <br><br> <br><br>
        <br> <br> <br><br> <br><br> <br> <br> <br><br> <br><br> <br> 
        <br> <br><br> <br><br> <br> <br> <br><br> <br><br> <br> <br>
        <br><br> <br><br> <br> <br> <br><br> <br><br> <br> <br> <br>
        <br> <br><br> <br> <br> <br><br> <br><br>
        <br> <br> <br><br> <br><br> <br> <br> <br><br> <br>
    <?php require_once("footer.php") ?>
</body>
</html>