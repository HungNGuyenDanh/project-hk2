<?php
require_once("../admin/connect/connectDB.php");

$email = $password = $repeatPassword = "";
$errors = array();
$errors["pass"] = $errors["mail"] = '';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    setcookie("cookie_name", "", time() - 3600); // Set the expiration time in the past
}

if (isset($_POST["submit"]) && !empty($_POST["submit"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $repeatPassword = $_POST["repeatPassword"];
    
    if ($password != $repeatPassword) {
        $errors["pass"] = 'Password dont match !';
    }

    if(empty($errors["pass"])){
        //nếu như user đăng ký email mà đã đăng ký rồi thì báo lỗi
        $sql = "SELECT * FROM tbUsers WHERE email = '$email'";
        $result = executeSingleResult($sql);
        if ($result == null) {
         $sql = "INSERT INTO tbUsers (email, password) VALUES ('$email', '$password')";
         execute($sql);
         header("Location: login.php");
         exit();  
} else {
    $errors["mail"] = "Email exists. Please enter another email or reset your password if you forgot!";
}

    }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet"
        href="../admin/CSS/login-register.css"/>
</head>

<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="" method="post">
                    <h2 class="login-h2" >Register Form</h2>
                        <p style="color: red; margin-bottom:0px; margin-top:17px;">
                            <?php echo $errors["pass"] ?>
                            <?php echo $errors["mail"] ?>
                        </p>
                    <div class="inputbox">
                        <ion-icon name="mail"></ion-icon>
                        <input type="email" name="email" required  value="<?=$email?>" >
                        <label for="">Your Email : </label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-open"></ion-icon>
                        <input type="password" name="password" required>
                        <label for=""> Your Password : </label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed"></ion-icon>
                        <input type="password" name="repeatPassword" required>
                        <label for="">Repeat Your Password : </label>
                    </div>
                    <button type="submit" name="submit">Submit</button>
                    <div class="register">
                        <p> Tôi đã có tài khoản <a href="login.php"> Đăng Nhập </a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</html>
