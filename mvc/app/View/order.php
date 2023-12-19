<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Tambahkan link Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
      padding: 15px;
      text-align: center;
    }

    section {
      max-width: 600px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
    }

    button {
      background-color: #3498db;
      color: #fff;
      padding: 10px;
      font-size: 16px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #2980b9;
    }
  </style>
  <title>Order Now</title>
</head>
<body>

  <header>
    <h1>Order Now</h1>
  </header>

  <section>
    <form>
      <div class="mb-3">
        <label for="product" class="form-label">Product:</label>
        <select id="product" class="form-select" required>
          <option value="product1">Product 1</option>
          <option value="product2">Product 2</option>
          <option value="product3">Product 3</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="quantity" class="form-label">Quantity:</label>
        <input type="number" id="quantity" class="form-control" min="1" required>
      </div>
      <div class="mb-3">
        <label for="name" class="form-label">Your Name:</label>
        <input type="text" id="name" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Your Email:</label>
        <input type="email" id="email" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-primary">Submit Order</button>
    </form>
  </section>

  <!-- Tambahkan script Bootstrap JS dan Popper.js jika diperlukan -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
