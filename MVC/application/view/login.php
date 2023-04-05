<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User-Login</title>
  <?php include "components/header.php" ?>
</head>
<body class="parent-tag" onload="darkModeLoad();loadCookieStatus();">
  <?php include "components/navbar.php" ?>
  <div class="container">
    <div class="form-content">
      <div class="form-field">
        <h1>User Log-in Page</h1>
        <?php include "components/googleLogin.php" ?>
        <?php include "components/loginForm.php" ?>
      </div>
    </div>
  </div>
  <div class="cookie-policy">
    <?php include "components/cookies-policy.php" ?>
  </div>
</body>
</html>
