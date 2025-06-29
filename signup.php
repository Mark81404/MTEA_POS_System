<?php require 'includes/header.php'; ?>

<main class="form-page">
  <div class="form-container">
    <h2>Signup</h2>
    <form class="auth-form" action="includes/signup.inc.php" method="post">
      <input type="text" name="uid" placeholder="Username" required>
      <input type="email" name="mail" placeholder="Email" required>
      <input type="password" name="pwd" placeholder="Password" required>
      <input type="password" name="pwdrepeat" placeholder="Repeat Password" required>
      <button type="submit" name="signup-submit">Sign Up</button>
    </form>
    <p>Already have an account? <a href="milktea-pos/public/login.php">Login here</a>.</p>
  </div>
</main>
</body>

<?php require 'includes/header.php'; ?>