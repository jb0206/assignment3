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

      h2 {
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
        width: 383px;
        padding: 0.5em;
        margin-bottom: 1em;
        border-radius: 6px;
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
      <h2>Admin Login</h2>
      <form action="index.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required />

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required />

        <button type="submit">Login</button>

        <a href="login.php" id="loginAdmin">Login as guest</a>
      </form>
    </section>

    <footer>&copy; 2023 Azure</footer>
  </body>
</html>
