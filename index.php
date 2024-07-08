<?php
session_start();
$noNavbar = true; // تعديل لأنه لم يكن معرفًا سابقًا
if (isset($_SESSION['username'])) {
    header('location:dashboard.php');
    exit();
}
include 'init.php';
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['user'];
    $psw = $_POST['psw'];
    $hashedPass = sha1($psw); // تعديل: يفضل استخدام password_hash

    $stmt = $conn->prepare("SELECT userName, psw FROM users WHERE userName=? AND psw=? AND groupeID=1");
    $stmt->execute(array($username, $hashedPass));
    $count = $stmt->rowCount();

    if ($count > 0) {
        $_SESSION['username'] = $username;
        header('location:dashboard.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="layout/images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="layout/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="layout/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="layout/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="layout/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="layout/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="layout/css/util.css">
    <link rel="stylesheet" type="text/css" href="layout/css/main.css">
</head>
<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="layout/images/img-01.png" alt="IMG">
                </div>

                <form class="login100-form validate-form" method="POST">
                    <span class="login100-form-title">
                        sign in 
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="user" placeholder="Email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="psw" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <input type="submit" class="login100-form-btn" value="login">
                    </div>

                    <div class="text-center p-t-12">
                        <span class="txt1">
                            Forgot
                        </span>
                        <a class="txt2" href="#">
                            Username / Password?
                        </a>
                    </div>

                    <div class="text-center p-t-136">
                        <a class="txt2" href="#">
                            Create your Account
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include $tpl.'footer.php'; ?>
</body>
</html>
