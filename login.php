<?php require 'includes/header.php'; ?>


<main class="form-page">
  <div class="form-container">
    <h2>Login</h2>
    <form class="auth-form" action="includes/login.inc.php" method="post">
      <input type="text" name="mailuid" placeholder="Username or Email" required>
      <input type="password" name="pwd" placeholder="Password" required>
      <button type="submit" name="login-submit">Login</button>
    </form>
    <p>Don't have an account? <a href="/milktea-pos/public/signup.php">Sign up here</a> </p>
  </div>
</main>
</body>

<?php require 'includes/header.php'; ?>