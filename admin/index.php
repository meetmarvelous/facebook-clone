<?php

include('../dbcon.php');


$message = "";
if (count($_POST) > 0) {
  $result = mysqli_query($con, "SELECT * FROM admin WHERE username='" . $_POST["username"] . "' and password = '" . $_POST["password"] . "'");
  $row  = mysqli_fetch_array($result);
  if (is_array($row)) {
    $_SESSION["admin_id"] = $row['id'];
    $_SESSION["username"] = $row['username'];
  } else {
    echo "<script>window.alert='Incorrect Password';</script>";
  }
}

if (isset($_SESSION['admin_id']) || !empty($_SESSION['admin_id'])) {
  header("Location: dashboard.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>

  <style>
    * {
      box-sizing: border-box;
    }

    input[type=text],
    input[type=password] {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      resize: vertical;
    }

    label {
      padding: 12px 12px 12px 0;
      display: inline-block;
    }

    .login {
      background-color: #04AA6D;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      float: right;
    }

    .login:hover {
      background-color: #45a049;
    }

    .container {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
    }

    .col-25 {
      float: left;
      width: 25%;
      margin-top: 6px;
    }

    .col-75 {
      float: left;
      width: 75%;
      margin-top: 6px;
    }

    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {

      .col-25,
      .col-75,
      .login {
        width: 100%;
        margin-top: 0;
      }
    }
  </style>
</head>

<body>

  <h2>Admin Login</h2>

  <div class="container">
    <form method="POST">
      <div class="row">
        <div class="col-25">
          <label for="fname">Username</label>
        </div>
        <div class="col-75">
          <input type="text" id="username" name="username" placeholder="Your username..">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="password">Password</label>
        </div>
        <div class="col-75">
          <input type="password" id="password" name="password" placeholder="Password...">
        </div>
      </div>
      <br>
      <div class="row">
        <button class="login" type="submit" value="Submit">Login</button>
      </div>
    </form>
  </div>

</body>

</html>