<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Product</title>
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

      nav {
        background-color: #444;
        padding: 0.5em;
        text-align: center;
      }

      nav a {
        color: #fff;
        text-decoration: none;
        padding: 1em;
        margin: 0 1em;
      }

      section {
        padding: 2em;
        text-align: center;
      }

      form {
        max-width: 400px;
        margin: 0 auto;
        background-color: #fff;
        padding: 2em;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
        background-color: #333;
        color: #fff;
        padding: 0.5em 1em;
        border: none;
        border-radius: 4px;
        cursor: pointer;
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
    </style>
  </head>
  <body>
    <header>
      <h1>Azure</h1>
    </header>

    <nav>
      <a href="index.php">Home</a>
      <a href="form.php">Form</a>
      <a href="about.php">About</a>
      <a href="view_records.php">View Records</a>
      <a href="insert_records.php">Insert Records</a>
      <a href="update_records.php">Update Records</a>
      <a href="delete_records.php">Delete Records</a>
    </nav>

    <section>
      <h2>Add a New Product</h2>
      <form action="insert_records.php" method="post">
        <label for="name">Product Name:</label>
        <input type="text" id="name" name="name" required />

        <label for="price">Price:</label>
        <input type="number" id="price" name="price" step="0.01" required />

        <label for="description">Description:</label>
        <textarea
          id="description"
          name="description"
          rows="4"
          required
        ></textarea>

        <label for="stock_quantity">Stock Quantity:</label>
        <input
          type="number"
          id="stock_quantity"
          name="stock_quantity"
          required
        />

        <label for="category_id">Category ID:</label>
        <input type="number" id="category_id" name="category_id" required />

        <button type="submit">Add Product</button>
      </form>
    </section>

    <footer>&copy; 2023 Azure</footer>
  </body>
</html>
