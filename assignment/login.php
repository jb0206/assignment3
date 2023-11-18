<?php
require_once 'included/config_session.php';
require_once 'included/login_view.php'
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
      }

      header {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 1em;
      }

      h2{  /* Updated css */
        text-align: center;
      }

      section { /* Updated css */
        max-width: 400px; 
        margin: 50px auto;
        background-color: #fff;
        padding: 2em;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: left; 
      }

      label {
        display: block;
        margin-bottom: 0.5em;
        font-weight: bold;
      }

      input { /* Updated css */
        width: 383px;
        padding: 0.5em;
        margin-bottom: 1em;
        border-radius: 6px;
      }

      button { /* Updated css */
        width: 100%; 
        padding: 8px;
        color: #ffffff;
        background: none #191970;
        border: none;
        border-radius: 6px;
        font-size: 18px;
        cursor: pointer;
        margin: 12px 0;
      }

      footer {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 1em;
        position: fixed;
        bottom: 0;
        width: 100%;
      }

      #signup{
        text-align: center;
        margin-top: 1em;
        display: block;
      }

      #loginAdmin { 
        text-align: center;
        margin-top: 1em;
        display: block;
      }

      .form-error{
        text-align: center;
        color: red;
      }

      .form-success{
        text-align: center;
        color: green;
      }

      a { 
        text-decoration: none;
      } 
    </style>
  </head>
  <body>
    <header>
      <h1>Azure</h1>
    </header>

    <section>
      <h2>Login</h2>
      <form action="included/login-inc.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required />

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required />

        <button type="submit" name="submit">Login</button>

        <a href="signup.php" id="signup">Don't have an account? Sign up!</a>
        <a href="login_admin.php" id="loginAdmin">Login as admin</a>
      </form>

      <?php
      check_login_errors();
      ?>
    </section>

    <footer>&copy; 2023 Azure</footer>
  </body>
</html>
