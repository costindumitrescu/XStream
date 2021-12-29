
<?php
  include("includes/handlers/register-handler.php");
  include("includes/handlers/login-handler.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to XStream</title>
</head>
<body>

  <div id="inputContainer">
    <form id="loginForm" action='register.php' method="POST">
        <h2> Login to your account </h2>
        <p>
          <label for="loginUsername">Username</label>
          <input id="loginUsername" name='loginUsername' type="text" placeholder="Username" required>
        </p>

        <p>
          <label for="loginPassword">Password</label>
          <input id="loginPassword" name='loginPassword' type="password" placeholder="Your Password" required>
        </p>


        <button type="submit" name="loginButton">Login</button>
      </form>


      <form id="loginForm" action='register.php' method="POST">

        <p>
          <label for="username">Username</label>
          <input id="username" name='username' type="text" placeholder="First Name" required>
        </p>

        <p>
          <label for="firstName">First Name</label>
          <input id="firstName" name='firstName' type="text" placeholder="First Name" required>
        </p>

        <p>
          <label for="lastName">Last Name</label>
          <input id="lastName" name='lastName' type="text" placeholder="Last Name" required>
        </p>

        <p>
          <label for="email">Email</label>
          <input id="email" name='email' type="email" placeholder="Email" required>
        </p>

        <p>
          <label for="email2">Confirm Email</label>
          <input id="email2" name='email2' type="email" placeholder="Confirm Email" required>
        </p>

        <p>
          <label for="password">Password</label>
          <input id="password" name='password' type="password" placeholder="Your Password" required>
        </p>

        <p>
          <label for="password2">Confirm Password</label>
          <input id="password2" name='password2' type="password" placeholder="Your Password" required>
        </p>

        <button type="submit" name="registerButton">Register</button>
      </form>
  </div>

</body>
</html>
