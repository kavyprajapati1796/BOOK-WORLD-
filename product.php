



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

    <style>
    /* Product table */
    .table-container {
        background: white;
        border-radius: 12px;
        padding: 20px;
        box-shadow: 0 1px 3px rgb(0 0 0 / 0.1);
    }

    table {
        border-collapse: collapse;
        width: 100%;
        font-size: 14px;
        color: #374151;
    }

    thead {
        background-color: #f3f4f6;
        border-radius: 12px 12px 0 0;
    }

    th,
    td {
        text-align: left;
        padding: 14px 16px;
        border-bottom: 1px solid #e5e7eb;
    }

    th {
        font-weight: 600;
        color: #6b7280;
        text-transform: uppercase;
        letter-spacing: 0.04em;
    }

    tbody tr:hover {
        background-color: #e0e7ff;
        cursor: pointer;
    }
    </style>

</head>

<body>

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
      <a href="Buy.php" class="flex items-center px-6 py-3 text-blue-600 font-medium">
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
            <header class="bg-white border-b border-gray-200 p-3 flex justify-between items-center">
                <div class="flex items-center">
                    <button class="mr-4 text-gray-500 focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>

                </div>
                <div class="flex items-center space-x-4">
                    <button class="p-1 rounded-full bg-gray-100 text-gray-500 hover:bg-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
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
              <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-semibold leading-tight ml-5 mt-6">Orders</h2>
          <a href="add_product.php" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-md shadow-sm transition duration-150 ease-in-out mr-6 mt-6 flex items-center">
          + Add Product
        </a>
        </div>
        <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Order ID</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">BookName</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">price</th>
                                <!-- <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">payment</th> -->
                                <!-- <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th> -->
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                            </tr>
                        </thead>
                       <?php
                            include("connection69.php"); // DB connection

                            $sql = "SELECT * FROM products ORDER BY id DESC"; 

                            $result = mysqli_query($conn, $sql);
                            ?>

                            <tbody class="bg-white divide-y divide-gray-200">
                            <?php while($row = mysqli_fetch_assoc($result)) { ?>
                                <tr>
                                    <!-- Order ID -->
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        #ORD-<?php echo str_pad($row['id'], 5, "0", STR_PAD_LEFT); ?>
                                    </td>
                                     <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <?php echo ($row['name']) ?>
                                    </td>

                                    <!-- Customer -->
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <?php echo ($row['price']) ?>
                                    </td>

                                    <!-- Order Date -->
                                   

                                    <!-- Amount -->
                                   

                                    <!-- Status -->
                                    <!-- <td class="px-6 py-4 whitespace-nowrap">
                                        <?php //if ($row['status'] == "Delivered") { ?>
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                Delivered
                                            </span>
                                        <?php// } //else { ?>
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                                <?php// echo htmlspecialchars($row['status']); ?>
                                            </span>
                                        <?php// } ?>
                                    </td> -->

                                    <!-- Action -->
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <a href="view-order.php?id=<?php echo $row['id']; ?>" class="text-primary hover:text-secondary">View</a>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>

                    </table>

        </div>


        <script>
        // Simple script for toggling menu on mobile
        document.addEventListener('DOMContentLoaded', function() {
            const menuButton = document.querySelector('header button');
            const sidebar = document.querySelector('.sidebar');

            menuButton.addEventListener('click', function() {
                sidebar.classList.toggle('hidden');
            });

            let btns = document.querySelectorAll(".logout");

            btns.forEach(function(btn) {
                btn.addEventListener('click', function() {
                    // console.log("clicked....");
                    window.location.href = "index69.php";
                });
            });

            // Update active nav item
            const navItems = document.querySelectorAll('nav a');
            navItems.forEach(item => {
                item.addEventListener('click', function(e) {
                    navItems.forEach(i => i.classList.remove('active-nav-item',
                        'text-blue-600'));
                    this.classList.add('active-nav-item', 'text-blue-600');
                });
            });
        });
        </script>
</body>

</html>




