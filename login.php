<?php 

session_start();
if (isset($_SESSION['seeker_has_login'])) {
  header('Location: dashboard.php');
  exit();
}

?>

<!DOCTYPE html>

<html lang="en-us">
  <head>
    <meta charset="utf-8" />
    <title>Wallet - Payday Loan Service Template</title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=5" />
    <meta name="description" content="This is meta description" />
    <meta name="author" content="Themefisher" />
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
    <link rel="icon" href="images/favicon.png" type="image/x-icon" />

    <!-- theme meta -->
    <meta name="theme-name" content="wallet" />

    <!-- # Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap"
      rel="stylesheet" />

    <!-- # CSS Plugins -->
    <!-- <link rel="stylesheet" href="plugins/slick/slick.css" />
    <link rel="stylesheet" href="plugins/font-awesome/fontawesome.min.css" />
    <link rel="stylesheet" href="plugins/font-awesome/brands.css" />
    <link rel="stylesheet" href="plugins/font-awesome/solid.css" /> -->

    <!-- # Main Style Sheet -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous" /> -->
    <style>
      body {
        background: linear-gradient(to right, #a8e5b8, #a2d0ea);
      }
    </style>
  </head>

  <body>
    <!-- navigation -->
    <nav
      style="height: 50px"
      class="border border-bottom border-3 border-dark mb-5"></nav>
    <div class="container">
      <h1 class="text-center">Log In</h1>
      <p class="text-center">
        No account yet? <a href="register.html"><u>Register</u></a>
      </p>

      <div class="row mt-5">
        <div class="col-lg-5">
          <form id="login_form">
            <div data-mdb-input-init class="form-outline mb-4">
              <label class="form-label" for="email">Email</label>
              <input
                type="email"
                id="email"
                name="email"
                class="form-control form-control-lg"
                required />
            </div>
            <div data-mdb-input-init class="form-outline mb-4">
              <label class="form-label" for="password">Password</label>
              <input
                type="password"
                id="password"
                name="password"
                class="form-control form-control-lg"
                required />
            </div>
            <div></div>
            <div class="d-grid gap-2">
              <button type="submit" id="login_button" class="btn btn-primary">
                Log In
              </button>
            </div>
          </form>
        </div>
        <div class="col-lg-7">
          <div class="text-center">
            <img src="images/illustration-2.png" alt="" />
          </div>
        </div>
      </div>
    </div>

    <!-- # JS Plugins -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <script src="plugins/slick/slick.min.js"></script>
    <script src="plugins/scrollmenu/scrollmenu.min.js"></script>

    <!-- Main Script -->
    <script src="js/script.js"></script>
    <script src="js/login/index.js"></script>

    <!-- validation -->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.min.js"></script>
  </body>
</html>
