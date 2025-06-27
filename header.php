<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MilkTea POS</title>
  <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>

<?php
  // Get the current page filename
  $page = basename($_SERVER['PHP_SELF']);
  // Only show nav if not login or signup
  if ($page !== "login.php" && $page !== "signup.php" && $page !== "logout.php") :
?>
  <header>
    <nav class="navbar">
      <a href="index.php" class="logo">
        <img src="assets/img/logo.png" alt="logo" />
      </a>
      <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
      </ul>
      <div class="auth-box">
        <form action="includes/login.inc.php" method="post" class="login-form">
          <input type="text" name="mailuid" placeholder="Username/Email" />
          <input type="password" name="pwd" placeholder="Password" />
          <button type="submit" name="login-submit">Login</button>
        </form>
        <a href="signup.php" class="signup-btn">Signup</a>
        <form action="includes/logout.inc.php" method="post">
          <button type="submit" name="logout-submit">Logout</button>
        </form>
      </div>
    </nav>
  </header>
<?php endif; ?>
