<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Book Order Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 5 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #6dd5ed, #2193b0);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .card {
      border-radius: 16px;
      box-shadow: 0px 6px 20px rgba(0,0,0,0.15);
      border: none;
      background: #fff;
      padding: 2rem;
      transition: transform 0.3s ease-in-out;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    h2 {
      font-weight: 700;
      color: #007bff;
      text-align: center;
      margin-bottom: 1.5rem;
    }

    .form-label {
      font-weight: 500;
      color: #333;
    }

    .form-control, .form-select, textarea {
      border-radius: 10px;
      border: 1px solid #ccc;
      transition: 0.3s ease;
    }

    .form-control:focus, 
    .form-select:focus, 
    textarea:focus {
      border-color: #007bff;
      box-shadow: 0 0 8px rgba(0, 123, 255, 0.3);
    }

    button {
      border-radius: 12px !important;
      padding: 0.6rem 1.5rem;
      font-weight: 600;
    }

    .btn-primary {
      background: #007bff;
      border: none;
    }

    .btn-primary:hover {
      background: #0056b3;
    }

    .btn-danger {
      background: #dc3545;
      border: none;
    }

    .btn-danger:hover {
      background: #a71d2a;
    }
  </style>
</head>
<body>
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-5">
        <div class="card">
          <h2>📚 Place Your Order</h2>
          <form id="orderForm" method="post" action="form.php" class="needs-validation" novalidate>
            
            <div class="mb-3">
              <label for="bookName" class="form-label">Book Name</label>
              <input type="text" id="bookName" name="bookName" 
                     class="form-control" 
                     value="<?php echo isset($_GET['bookName']) ? htmlspecialchars($_GET['bookName']) : ''; ?>" readonly>
            </div>

            <div class="mb-3">
              <label for="name" class="form-label">Name:</label>
              <input type="text" id="name" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
              <label for="phone" class="form-label">Phone Number:</label>
              <input type="tel" id="phone" name="phone" class="form-control" required>
            </div>

            <div class="mb-3">
              <label for="address" class="form-label">Address:</label>
              <textarea id="address" name="address" class="form-control" rows="2" required></textarea>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="City" class="form-label">City:</label>
                <input type="text" id="City" name="City" class="form-control" required>
              </div>
              <div class="col-md-6 mb-3">
                <label for="District" class="form-label">District:</label>
                <input type="text" id="District" name="District" class="form-control" required>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="State" class="form-label">State:</label>
                <input type="text" id="State" name="State" class="form-control" required>
              </div>
              <div class="col-md-6 mb-3">
                <label for="pincode" class="form-label">Pincode:</label>
                <input type="text" id="pincode" name="pincode" class="form-control" required>
              </div>
            </div>

            <div class="mb-3">
              <label for="payment" class="form-label">Payment Method:</label>
              <select id="payment" name="payment" class="form-select" required>
                <option value="">Select Payment Method</option>
                <option value="COD">Cash on Delivery</option>
                <option value="Card">Credit/Debit Card</option>
                <option value="UPI">UPI</option>
              </select>
            </div>

            <div class="d-flex justify-content-between">
              <button type="submit" class="btn btn-primary">Place Order</button>
              <button type="reset" class="btn btn-danger">Cancel</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
