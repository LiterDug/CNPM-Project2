<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="style.css" />
    <!-- font roboto -->
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- from login -->
    <div class="login">
      <div class="login__container">
        <h1>Đăng Nhập</h1>
        <form id="frmLogin" name="frmLogin" method="post" action="HandleLogin.php">
          <h5>Email</h5>
          <input type="text" class="input-login-username" id="username" name="username"/>
          <h5>Password</h5>
          <input type="password" class="input-login-password" id="password" name="password" />
          <button type="submit" id="submit" name="submit" class="login__signInButton">Đăng Nhập</button>
        </form>
        <a href="signup.php" class="login__registerButton"
          >Tạo tài khoản mới</a
        >
      </div>
    </div>
  </body>
 <!-- <script src="./JS/login.js"></script>  -->
</html>
