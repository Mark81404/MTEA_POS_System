<?php require "includes/header.php"; ?>

<main class="home-page">
  <section class="welcome-box">
    <h1>Welcome to MilkTea POS</h1>
    <p>This is your point-of-sale system. Use the navigation above to log in or sign up.</p>

    <?php
      // Example status message
      if (isset($_GET['status'])) {
        if ($_GET['status'] == "loggedout") {
          echo "<p class='status-msg'>You have been logged out successfully.</p>";
        } elseif ($_GET['status'] == "loggedin") {
          echo "<p class='status-msg success'>Welcome back!</p>";
        }
      }
    ?>
  </section>
</main>

<?php require "includes/footer.php"; ?>