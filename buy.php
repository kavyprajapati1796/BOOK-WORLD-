<?php
// session_start();

// ✅ Check if admin is logged in
// if (!isset($_SESSION['admin_id'])) {
//     header("Location: index69.php"); 
//     exit();
// }

include("connection69.php"); // DB connection
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#4361ee',
            secondary: '#3f37c9',
            accent: '#4895ef',
            dark: '#1e1e1e',
            light: '#f8f9fa'
          }
        }
      }
    }
  </script>

  <style>
    .sidebar { transition: all 0.3s ease; }
    .sidebar.collapsed { width: 80px; }
    .sidebar.collapsed .nav-text, .sidebar.collapsed .logo-text { display: none; }
    .sidebar.collapsed ~ .main-content { margin-left: 80px; }
    .main-content { transition: margin-left 0.3s ease; }
    .card { transition: transform 0.3s ease; }
    .card:hover { transform: translateY(-5px); }
  </style>
</head>
<body class="bg-gray-100 font-sans">

<div class="flex h-screen overflow-hidden">
  <!-- Sidebar -->
  <div class="sidebar bg-white w-64 border-r border-gray-200 flex-shrink-0">
    <div class="p-4 border-b border-gray-200 flex items-center">
                <div class="w-10 h-10 rounded-md  flex items-center justify-center">
                   <img src="images/logo.jpg" alt="icon" class="h-6 w-10 h-10 rounded w-6">

                </div>
                <h1 class="ml-3 text-xl font-semibold">Book World</h1>
            </div>

    <nav class="mt-6">
      <a href="dashboard.php" class="flex items-center px-6 py-3 text-blue-600 font-medium">
        <i class="fas fa-home mr-3"></i> Dashboard
      </a>
      <a href="product.php" class="flex items-center px-6 py-3 text-gray-600 hover:text-blue-600 font-medium">
        <i class="fas fa-box mr-3"></i> Products
      </a>
      <a href="orders.php" class="flex items-center px-6 py-3 text-gray-600 hover:text-blue-600 font-medium">
        <i class="fas fa-shopping-cart mr-3"></i> Orders
      </a>
    </nav>
  </div>

  <!-- Main Content -->
  <div class="flex-1 overflow-auto">
    <!-- Top Navigation -->
    <header class="bg-white border-b border-gray-200 p-4 flex justify-between items-center">
      <div class="flex items-center">
        <button class="mr-4 text-gray-500 focus:outline-none">
          <i class="fas fa-bars"></i>
        </button>
        <h1 class="text-xl font-semibold">Dashboard</h1>
      </div>
      <div class="flex items-center space-x-4">
        <button class="p-1 rounded-full bg-gray-100 text-gray-500 hover:bg-gray-200">
          <i class="fas fa-bell"></i>
        </button>
        <div class="flex items-center space-x-2">
          <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center">
            <span class="text-blue-600 font-medium text-sm">AD</span>
          </div>
          <span class="font-medium">Admin</span>
          <button class="logout">Logout</button>
        </div>
      </div>
    </header>

    <!-- Dashboard Content -->
    <main class="p-6 main-content">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
        
        <!-- Total Customers -->
        <div class="card bg-white rounded-lg shadow p-6 flex items-center">
          <div class="w-12 h-12 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center mr-4">
            <i class="fas fa-users text-xl"></i>
          </div>
          <div>
            <h3 class="text-gray-500 text-sm">Total Customers</h3>
            <p class="text-2xl font-bold text-dark">
              <?php
              $sql = "SELECT COUNT(*) AS total_customers FROM user";
              $result = mysqli_query($conn, $sql);
              $row = mysqli_fetch_assoc($result);
              echo $row['total_customers'];
              ?>
            </p>
          </div>
        </div>
        
        <!-- Total Orders -->
        <div class="card bg-white rounded-lg shadow p-6 flex items-center">
          <div class="w-12 h-12 rounded-full bg-green-100 text-green-600 flex items-center justify-center mr-4">
            <i class="fas fa-shopping-cart text-xl"></i>
          </div>
          <div>
            <h3 class="text-gray-500 text-sm">Total Orders</h3>
            <p class="text-2xl font-bold text-dark">
              <?php
              $sql = "SELECT COUNT(*) AS total_orders FROM orderdetail";
              $result = mysqli_query($conn, $sql);
              $row = mysqli_fetch_assoc($result);
              echo $row['total_orders'];
              ?>
            </p>
          </div>
        </div>

        <!-- Total Books -->
        <div class="card bg-white rounded-lg shadow p-6 flex items-center">
          <div class="w-12 h-12 rounded-full bg-purple-100 text-purple-600 flex items-center justify-center mr-4">
            <i class="fas fa-book text-xl"></i>
          </div>
          <div>
            <h3 class="text-gray-500 text-sm">Total Books</h3>
            <p class="text-2xl font-bold text-dark">
              <?php
              $sql = "SELECT COUNT(*) AS total_books FROM products";
              $result = mysqli_query($conn, $sql);
              $row = mysqli_fetch_assoc($result);
              echo $row['total_books'];
              ?>
            </p>
          </div>
        </div>

        <!-- Growth Rate -->
        <div class="card bg-white rounded-lg shadow p-6 flex items-center">
          <div class="w-12 h-12 rounded-full bg-orange-100 text-orange-600 flex items-center justify-center mr-4">
            <i class="fas fa-chart-line text-xl"></i>
          </div>
          <div>
            <h3 class="text-gray-500 text-sm">Growth Rate</h3>
            <p class="text-2xl font-bold text-dark">+12.5%</p>
          </div>
        </div>

      </div>
    </main>
    <main>
      
    </main>
    
  </div>
</div>
<script>
     let btns = document.querySelectorAll(".logout");
      btns.forEach(function(btn) {
        btn.addEventListener('click', function() {
            // ✅ Clear PHP session (redirect to logout page)
            window.location.href = "index69.php";
        });
      });
</script>

</body>
</html>
