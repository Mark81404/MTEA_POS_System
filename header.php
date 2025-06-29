<?php
  $page = basename($_SERVER['PHP_SELF']);
  $bodyClass = '';

  if ($page === 'login.php') {
    $bodyClass = 'login-page';
  } elseif ($page === 'signup.php') {
    $bodyClass = 'signup-page';
  }
?>

<!DOCTYPE html>
<html lang="en">  
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MilkTea POS</title>
  <link rel="stylesheet" href="/milktea-pos/public/assets/css/style.css" />
</head>

<body class="<?php echo $bodyClass; ?>">

<?php if (!in_array($bodyClass, ['login-page', 'signup-page'])): ?>
  <header>
    <nav class="navbar">
      <a href="index.php" class="logo">
        <img src="/milktea-pos/public/assets/img/logo.png" alt="logo" />
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
        <a href="/milktea-pos/public/signup.php">Sign up here</a>
        <form action="includes/logout.inc.php" method="post">
          <button type="submit" name="logout-submit">Logout</button>
        </form>
      </div>
    </nav>
  </header>
<?php endif; ?>