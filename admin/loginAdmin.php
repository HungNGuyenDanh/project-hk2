<?php
$userame = $password = "";
$error = "";


if (isset($_POST['submit'])) {
  if (!empty($userame) && !empty($password)) {
    echo $error;
  } else {
    echo "successfully submitted";
    header("Location: admin.php");
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
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <div class="container">
    <div class="myform">
      <form method="post">
        <h2>ADMIN LOGIN</h2>
        <input type="text" placeholder="Admin Name" name="name">
        <input type="password" placeholder="Password" name="password">
        <button type="submit">LOGIN</button>
      </form>
    </div>
    <div class="image">
      <img src="image.jpg">
    </div>
  </div>

</body>

</html>