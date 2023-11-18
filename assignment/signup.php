<?php
require_once 'included/config_session.php';
require_once 'included/signup_view.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>
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

      h2{  
        text-align: center;
      }

      section { 
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

      input {
        width: 100%;
        padding: 0.5em;
        margin-bottom: 1em;
      }

      button { 
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

      #loginAdmin { 
        text-align: center;
        margin-top: 1em;
        display: block;
      }

      #login{
        text-align: center;
        margin-top: 1em;
        display: block;
      }

      a { 
        text-decoration: none;
      } 

      .form-error{
        text-align: center;
        color: red;
      }
    </style>
  </head>
  <body>
    <header>
      <h1>Azure</h1>
    </header>

    <section>
      <h2>Sign Up</h2>
      <form action="included/signup-inc.php" method="post">
        
        <label for="email">Email:</label>
        <input type="text" name="email" id="email">
        
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"  />

        <label for="password">Password:</label>
        <input type="password" id="password" name="password"  />
        
        <button type="submit" name="submit">Sign Up</button>

        <a href="login.php" id="login">Already have an account? Log in!</a>
        <a href="login_admin.php" id="loginAdmin">Login as admin</a>
      </form>

      <?php
      check_signup_error();
      ?>
    </section>

    <footer>&copy; 2023 Azure</footer>
  </body>
</html>
