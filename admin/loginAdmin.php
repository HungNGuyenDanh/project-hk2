<?php
$username = $password = "";
$error = "";

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if (empty($username) || empty($password)) {
    $error = "Do not blank username or password";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login Panel</title>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Vidaloka&display=swap");

    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
      font-family: "Vidaloka", sans-serif;
    }

    body {
      background-color: #c98d83;
    }

    div.container {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      display: flex;
      flex-direction: row;
      align-items: center;
      background-color: #783b31;
      padding: 30px;
      box-shadow: 0 50px 50px -50px darkslategray;
      border-radius: 10px;
    }

    div.container div.myform {
      width: 270px;
      margin-right: 30px;
    }

    div.container div.myform h2 {
      color: #1c1c1e;
      margin-bottom: 20px;
    }

    div.container div.myform input {
      border: none;
      outline: none;
      border-radius: 0;
      width: 100%;
      border-bottom: 2px solid #1c1c1e;
      margin-bottom: 25px;
      padding: 7px 0;
      font-size: 14px;
    }

    div.container div.myform button {
      color: white;
      background-color: #1c1c1e;
      border: none;
      outline: none;
      border-radius: 2px;
      font-size: 14px;
      padding: 5px 12px;
      font-weight: 500;
    }

    div.container div.image img {
      width: 300px;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="myform">
      <form method="post">
        <h2>ADMIN LOGIN</h2>
        <input type="text" placeholder="Admin Name" name="username" style="border-radius: 5px;">
        <input type="password" placeholder="Password" name="password" style="border-radius: 5px;">
        <input type="submit" name="submit" style="border-radius: 5px;">
      </form>
      <span style="padding-top: 50px; color: red;"><?php echo $error ?></span>
    </div>
  </div>
</body>

</html>