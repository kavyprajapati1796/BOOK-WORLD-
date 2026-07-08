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

        <a>
        <!-- ...existing code... -->
<header>
 

class="bg-white shadow-sm py-4 px-6 flex justify-between items-center sticky top-0 z-10">
    <div class="flex items-center">
        <!-- Back Button Start -->
        <a href="index.php" class="mr-4 px-3 py-1 bg-gray-200 text-gray-700 rounded hover:bg-primary hover:text-white transition-colors flex items-center">
            <i class="fas fa-arrow-left mr-2"></i> Back
        </a>
        <!-- Back Button End -->
        <button id="toggleSidebar" class="mr-4 text-gray-600 focus:outline-none">
            <i class="fas fa-bars"></i>
        </button>
        <h1 class="text-xl font-semibold text-dark" id="pageTitle">Dashboard</h1>
    </div>
    <!-- ...existing code... -->
</header>
<!-- ...existing code... -->

        </a>
    </script>
    <style>
        /* Custom styles */
        .sidebar {
            transition: all 0.3s ease;
        }
        .sidebar.collapsed {
            width: 80px;
        }
        .sidebar.collapsed .nav-text {
            display: none;
        }
        .sidebar.collapsed .logo-text {
            display: none;
        }
        .sidebar.collapsed ~ .main-content {
            margin-left: 80px;
        }
        .main-content {
            transition: margin-left 0.3s ease;
        }
        .card {
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        #customersTable, #dataGridTable {
            width: 100% !important;
        }
    </style>
</head>
<body class="bg-gray-100 font-sans">
    <!-- Sidebar -->
 <div class="sidebar fixed h-screen bg-white shadow-lg w-64 z-20" id="sidebar">
    <div class="p-4 flex items-center">
        <div class="w-12 h-12 rounded-full bg-primary flex items-center justify-center text-white font-bold">
            <i class="fas fa-cubes text-xl"></i>
        </div>
        <span class="logo-text ml-3 text-xl font-bold text-dark">AdminPanel</span>
    </div>
    <nav class="mt-6">
        <a href="#" class="flex items-center px-6 py-3 text-primary bg-primary bg-opacity-10 border-l-4 border-primary" id="dashboardLink">
            <i class="fas fa-tachometer-alt"></i>
            <span class="nav-text ml-3">Dashboard</span>
        </a>  
        <a href="#" class="flex items-center px-6 py-3 text-primary bg-primary bg-opacity-10 border-l-4 border-primary" id="productorder">
            <i class="fas fa-tachometer-alt"></i>
            <span class="nav-text ml-3">Book Catalogs</span>
        </a>
       
    </nav>
</div>

    <!-- Main Content -->
    <div class="main-content ml-64 min-h-screen">
        <!-- Header -->
        <header class="bg-white shadow-sm py-4 px-6 flex justify-between items-center sticky top-0 z-10">
            <div class="flex items-center">
                <button id="toggleSidebar" class="mr-4 text-gray-600 focus:outline-none">
                    <i class="fas fa-bars"></i>
                </button>
                <h1 class="text-xl font-semibold text-dark" id="pageTitle">Dashboard</h1>
            </div>
            <div class="flex items-center">
                <div class="relative mr-6">
                    <button class="text-gray-600 focus:outline-none">
                        <i class="fas fa-bell"></i>
                    </button>
                    <span class="absolute -top-1 -right-1 w-4 h-4 bg-red-500 rounded-full text-white text-xs flex items-center justify-center">3</span>
                </div>
                <div class="flex items-center">
                    <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center text-white">
                        <i class="fas fa-user"></i>
                    </div>
                    <span class="ml-2 text-gray-700">Admin</span>
                </div>
            </div>
        </header>

        <!-- Dashboard Content -->
        <main class="p-6" id="mainContent">
            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                <div class="card bg-white rounded-lg shadow p-6 flex items-center">
                    <div class="w-12 h-12 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center mr-4">
                        <i class="fas fa-users text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-gray-500 text-sm">Total Customers</h3>
                        <p class="text-2xl font-bold text-dark"><?php
                        include("connection69.php"); // DB connection

                        $sql = "SELECT COUNT(*) AS total_orders FROM orderdetail";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_assoc($result);
                        echo $row['total_orders'];
                        ?></p>
                    </div>
                </div>
                <div class="card bg-white rounded-lg shadow p-6 flex items-center">
                    <div class="w-12 h-12 rounded-full bg-green-100 text-green-600 flex items-center justify-center mr-4">
                        <i class="fas fa-shopping-cart text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-gray-500 text-sm">Total Orders</h3>
                        <p class="text-2xl font-bold text-dark"><?php
                        include("connection69.php"); // DB connection

                        $sql = "SELECT COUNT(*) AS total_orders FROM orderdetail";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_assoc($result);
                        echo $row['total_orders'];
                        ?></p>
                    </div>
                </div>
                <div class="card bg-white rounded-lg shadow p-6 flex items-center">
                    <div class="w-12 h-12 rounded-full bg-purple-100 text-purple-600 flex items-center justify-center mr-4">
                        <i class="fas fa-dollar-sign text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-gray-500 text-sm">Total Revenue</h3>
                        <p class="text-2xl font-bold text-dark">$45,254</p>
                    </div>
                </div>
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

        
            <!-- Recent Orders -->
            <div class="card bg-white rounded-lg shadow p-6 mb-6" id="#order">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-lg font-semibold text-dark">Recent Orders</h2>
                    <button class="px-3 py-1 text-sm bg-primary text-white rounded">View All</button>
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Order ID</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">BookName</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Customer</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">payment</th>
                                <!-- <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th> -->
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                            </tr>
                        </thead>
                       <?php
                            include("connection69.php"); // DB connection

                            $sql = "SELECT * FROM orderdetail ORDER BY id DESC"; 
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
                                        <?php echo ($row['book_name']) ?>
                                    </td>

                                    <!-- Customer -->
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-full" src="https://placehold.co/100x100" alt="Customer image">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    <?php echo htmlspecialchars($row['name']); ?>
                                                </div>
                                                <div class="text-sm text-gray-500">
                                                    <?php echo htmlspecialchars($row['phone_number']); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    <!-- Order Date -->
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <?php echo date("d M Y", strtotime($row['order_date'])); ?>
                                    </td>

                                    <!-- Amount -->
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        <?php echo htmlspecialchars($row['payment_mode']); ?>
                                    </td>

                                    <!-- Status -->
                                    <!-- <td class="px-6 py-4 whitespace-nowrap">
                                        <?php if ($row['status'] == "Delivered") { ?>
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                Delivered
                                            </span>
                                        <?php } else { ?>
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                                <?php echo htmlspecialchars($row['status']); ?>
                                            </span>
                                        <?php } ?>
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
            </div>

            <!-- Customers Content (Hidden by default) -->
            <div class="hidden" id="customersContent">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-semibold text-dark">Customers</h2>
                    <button class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-secondary transition-colors" id="addCustomerBtn">
                        <i class="fas fa-plus mr-2"></i> Add Customer
                    </button>
                </div>
                
                <div class="card bg-white rounded-lg shadow p-6 mb-6">
                    <div class="flex justify-between mb-4">
                        <div class="flex items-center">
                            <div class="relative mr-4">
                                <input type="text" placeholder="Search customers..." class="pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                                <div class="absolute left-3 top-3 text-gray-400">
                                    <i class="fas fa-search"></i>
                                </div>
                            </div>
                            <select class="border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent mr-2">
                                <option>All Status</option>
                                <option>Active</option>
                                <option>Inactive</option>
                                <option>Banned</option>
                            </select>
                        </div>
                        <button class="px-3 py-1 border rounded-lg text-gray-700 hover:bg-gray-50">
                            <i class="fas fa-filter mr-2"></i> Filter
                        </button>
                    </div>
                    
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200" id="customersTable">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Customer</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Phone</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Orders</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#001</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-full" src="https://placehold.co/100x100" alt="Professional headshot of Emily Johnson">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">Emily Johnson</div>
                                                <div class="text-sm text-gray-500">New York, USA</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">emily@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">+1 234 567 890</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">24</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <button class="text-primary hover:text-secondary mr-3">Edit</button>
                                        <button class="text-red-500 hover:text-red-700">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#002</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-full" src="https://placehold.co/100x100" alt="Professional headshot of Michael Chen">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">Michael Chen</div>
                                                <div class="text-sm text-gray-500">San Francisco, USA</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">michael@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">+1 345 678 901</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">18</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <button class="text-primary hover:text-secondary mr-3">Edit</button>
                                        <button class="text-red-500 hover:text-red-700">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#003</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-full" src="https://placehold.co/100x100" alt="Professional headshot of Sarah Williams">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">Sarah Williams</div>
                                                <div class="text-sm text-gray-500">Chicago, USA</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">sarah@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">+1 456 789 012</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">12</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Inactive</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <button class="text-primary hover:text-secondary mr-3">Edit</button>
                                        <button class="text-red-500 hover:text-red-700">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#004</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-full" src="https://placehold.co/100x100" alt="Professional headshot of David Kim">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">David Kim</div>
                                                <div class="text-sm text-gray-500">Los Angeles, USA</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">david@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">+1 567 890 123</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">35</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <button class="text-primary hover:text-secondary mr-3">Edit</button>
                                        <button class="text-red-500 hover:text-red-700">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#005</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-full" src="https://placehold.co/100x100" alt="Professional headshot of Jessica Martinez">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">Jessica Martinez</div>
                                                <div class="text-sm text-gray-500">Miami, USA</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">jessica@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">+1 678 901 234</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">8</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Banned</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <button class="text-primary hover:text-secondary mr-3">Edit</button>
                                        <button class="text-red-500 hover:text-red-700">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="flex justify-between items-center mt-4">
                        <div class="text-sm text-gray-500">
                            Showing 1 to 5 of 25 entries
                        </div>
                        <div class="flex">
                            <button class="px-3 py-1 border rounded-l-lg text-gray-700 hover:bg-gray-50">
                                Previous
                            </button>
                            <button class="px-3 py-1 border-t border-b border-r text-white bg-primary hover:bg-secondary">
                                1
                            </button>
                            <button class="px-3 py-1 border-t border-b border-r text-gray-700 hover:bg-gray-50">
                                2
                            </button>
                            <button class="px-3 py-1 border-t border-b border-r text-gray-700 hover:bg-gray-50">
                                3
                            </button>
                            <button class="px-3 py-1 border rounded-r-lg text-gray-700 hover:bg-gray-50">
                                Next
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Data Grid Content (Hidden by default) -->
            <div class="hidden" id="dataGridContent">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-semibold text-dark">Data Grid</h2>
                    <button class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-secondary transition-colors" id="addDataBtn">
                        <i class="fas fa-plus mr-2"></i> Add Data
                    </button>
                </div>
                
                <div class="card bg-white rounded-lg shadow p-6 mb-6">
                    <div class="flex justify-between mb-4">
                        <div class="flex items-center">
                            <div class="relative mr-4">
                                <input type="text" placeholder="Search data..." class="pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                                <div class="absolute left-3 top-3 text-gray-400">
                                    <i class="fas fa-search"></i>
                                </div>
                            </div>
                            <select class="border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent mr-2">
                                <option>All Categories</option>
                                <option>Products</option>
                                <option>Services</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div>
                            <button class="px-3 py-1 border rounded-lg text-gray-700 hover:bg-gray-50 mr-2">
                                <i class="fas fa-download mr-2"></i> Export
                            </button>
                            <button class="px-3 py-1 border rounded-lg text-gray-700 hover:bg-gray-50">
                                <i class="fas fa-filter mr-2"></i> Filter
                            </button>
                        </div>
                    </div>
                    
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200" id="dataGridTable">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Stock</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#1001</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded" src="https://placehold.co/100x100" alt="Wireless headphones with noise cancellation feature">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">Wireless Headphones</div>
                                                <div class="text-sm text-gray-500">Electronics</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Electronics</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">$199.99</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">45</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">In Stock</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <button class="text-primary hover:text-secondary mr-3">Edit</button>
                                        <button class="text-red-500 hover:text-red-700">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#1002</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded" src="https://placehold.co/100x100" alt="Smartwatch with fitness tracking features">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">Smart Watch</div>
                                                <div class="text-sm text-gray-500">Wearables</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Wearables</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">$249.99</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">28</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">In Stock</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <button class="text-primary hover:text-secondary mr-3">Edit</button>
                                        <button class="text-red-500 hover:text-red-700">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#1003</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded" src="https://placehold.co/100x100" alt="Leather wallet with multiple card slots">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">Leather Wallet</div>
                                                <div class="text-sm text-gray-500">Accessories</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Accessories</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">$49.99</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">12</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Low Stock</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <button class="text-primary hover:text-secondary mr-3">Edit</button>
                                        <button class="text-red-500 hover:text-red-700">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#1004</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded" src="https://placehold.co/100x100" alt="Bluetooth speaker with waterproof design">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">Bluetooth Speaker</div>
                                                <div class="text-sm text-gray-500">Electronics</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Electronics</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">$129.99</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">0</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Out of Stock</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <button class="text-primary hover:text-secondary mr-3">Edit</button>
                                        <button class="text-red-500 hover:text-red-700">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#1005</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded" src="https://placehold.co/100x100" alt="Digital camera with 4K video recording">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">Digital Camera</div>
                                                <div class="text-sm text-gray-500">Photography</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Photography</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">$599.99</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">7</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">In Stock</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <button class="text-primary hover:text-secondary mr-3">Edit</button>
                                        <button class="text-red-500 hover:text-red-700">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="flex justify-between items-center mt-4">
                        <div class="text-sm text-gray-500">
                            Showing 1 to 5 of 20 entries
                        </div>
                        <div class="flex">
                            <button class="px-3 py-1 border rounded-l-lg text-gray-700 hover:bg-gray-50">
                                Previous
                            </button>
                            <button class="px-3 py-1 border-t border-b border-r text-white bg-primary hover:bg-secondary">
                                1
                            </button>
                            <button class="px-3 py-1 border-t border-b border-r text-gray-700 hover:bg-gray-50">
                                2
                            </button>
                            <button class="px-3 py-1 border-t border-b border-r text-gray-700 hover:bg-gray-50">
                                3
                            </button>
                            <button class="px-3 py-1 border-t border-b border-r text-gray-700 hover:bg-gray-50">
                                4
                            </button>
                            <button class="px-3 py-1 border rounded-r-lg text-gray-700 hover:bg-gray-50">
                                Next
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Book Catalog Content (Visible only on catalog page) -->
            <?php
            if (isset($_GET['page']) && $_GET['page'] === 'catalog') {
                $catalogDir = __DIR__ . '/catalog';
                echo '<h2 class="text-2xl font-semibold text-dark mb-6">Book Catalog</h2>';
                if (is_dir($catalogDir)) {
                    $books = array_diff(scandir($catalogDir), ['.', '..']);
                    if (count($books) > 0) {
                        echo '<table class="min-w-full divide-y divide-gray-200 mb-6">';
                        echo '<thead class="bg-gray-50"><tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Book Name</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Action</th>
                              </tr></thead><tbody class="bg-white divide-y divide-gray-200">';
                        foreach ($books as $book) {
                            echo '<tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">' . htmlspecialchars($book) . '</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <form method="post" style="display:inline;">
                                            <input type="hidden" name="buy_book" value="' . htmlspecialchars($book) . '">
                                            <button type="submit" class="px-4 py-2 bg-primary text-white rounded hover:bg-secondary">Buy Now</button>
                                        </form>
                                    </td>
                                  </tr>';
                        }
                        echo '</tbody></table>';
                    } else {
                        echo '<p>No books found in the catalog.</p>';
                    }
                } else {
                    echo '<p>Catalog directory not found.</p>';
                }
            }

            // Show confirmation if a book was "bought"
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['buy_book'])) {
                $bookName = basename($_POST['buy_book']);
                echo '<div class="p-4 mb-4 bg-green-100 text-green-800 rounded">Thank you for buying <strong>' . htmlspecialchars($bookName) . '</strong>!</div>';
            }
            ?>
        </main>
    </div>

    <!-- Add Customer Modal -->
    <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-30 hidden" id="addCustomerModal">
        <div class="bg-white rounded-lg shadow-xl w-full max-w-md">
            <div class="flex justify-between items-center p-4 border-b">
                <h3 class="text-lg font-semibold text-dark">Add New Customer</h3>
                <button class="text-gray-500 hover:text-gray-700" id="closeCustomerModal">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="p-6">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="customerName">Full Name</label>
                    <input class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" id="customerName" type="text" placeholder="John Doe">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="customerEmail">Email</label>
                    <input class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" id="customerEmail" type="email" placeholder="john@example.com">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="customerPhone">Phone</label>
                    <input class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" id="customerPhone" type="tel" placeholder="+1 234 567 890">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="customerStatus">Status</label>
                    <select class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" id="customerStatus">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                        <option value="banned">Banned</option>
                    </select>
                </div>
                <div class="flex justify-end">
                    <button class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-secondary transition-colors" id="saveCustomerBtn">
                        <i class="fas fa-save mr-2"></i> Save Customer
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Customer Modal -->
    <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-30 hidden" id="editCustomerModal">
        <div class="bg-white rounded-lg shadow-xl w-full max-w-md">
            <div class="flex justify-between items-center p-4 border-b">
                <h3 class="text-lg font-semibold text-dark">Edit Customer</h3>
                <button class="text-gray-500 hover:text-gray-700" id="closeEditCustomerModal">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="p-6">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="editCustomerName">Full Name</label>
                    <input class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" id="editCustomerName" type="text" placeholder="John Doe">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="editCustomerEmail">Email</label>
                    <input class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" id="editCustomerEmail" type="email" placeholder="john@example.com">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="editCustomerPhone">Phone</label>
                    <input class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" id="editCustomerPhone" type="tel" placeholder="+1 234 567 890">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="editCustomerStatus">Status</label>
                    <select class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" id="editCustomerStatus">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                        <option value="banned">Banned</option>
                    </select>
                </div>
                <div class="flex justify-end">
                    <button class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-secondary transition-colors" id="updateCustomerBtn">
                        <i class="fas fa-save mr-2"></i> Update Customer
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Data Modal -->
    <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-30 hidden" id="addDataModal">
        <div class="bg-white rounded-lg shadow-xl w-full max-w-md">
            <div class="flex justify-between items-center p-4 border-b">
                <h3 class="text-lg font-semibold text-dark">Add New Data</h3>
                <button class="text-gray-500 hover:text-gray-700" id="closeDataModal">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="p-6">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="dataName">Name</label>
                    <input class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" id="dataName" type="text" placeholder="Data Name">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="dataCategory">Category</label>
                    <input class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" id="dataCategory" type="text" placeholder="Category">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="dataPrice">Price</label>
                    <input class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" id="dataPrice" type="number" placeholder="Price">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="dataStock">Stock</label>
                    <input class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" id="dataStock" type="number" placeholder="Stock">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="dataStatus">Status</label>
                    <select class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" id="dataStatus">
                        <option value="in_stock">In Stock</option>
                        <option value="low_stock">Low Stock</option>
                        <option value="out_of_stock">Out of Stock</option>
                    </select>
                </div>
                <div class="flex justify-end">
                    <button class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-secondary transition-colors" id="saveDataBtn">
                        <i class="fas fa-save mr-2"></i> Save Data
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Data Modal -->
    <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-30 hidden" id="editDataModal">
        <div class="bg-white rounded-lg shadow-xl w-full max-w-md">
            <div class="flex justify-between items-center p-4 border-b">
                <h3 class="text-lg font-semibold text-dark">Edit Data</h3>
                <button class="text-gray-500 hover:text-gray-700" id="closeEditDataModal">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="p-6">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="editDataName">Name</label>
                    <input class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" id="editDataName" type="text" placeholder="Data Name">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="editDataCategory">Category</label>
                    <input class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" id="editDataCategory" type="text" placeholder="Category">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="editDataPrice">Price</label>
                    <input class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" id="editDataPrice" type="number" placeholder="Price">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="editDataStock">Stock</label>
                    <input class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" id="editDataStock" type="number" placeholder="Stock">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="editDataStatus">Status</label>
                    <select class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" id="editDataStatus">
                        <option value="in_stock">In Stock</option>
                        <option value="low_stock">Low Stock</option>
                        <option value="out_of_stock">Out of Stock</option>
                    </select>
                </div>
                <div class="flex justify-end">
                    <button class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-secondary transition-colors" id="updateDataBtn">
                        <i class="fas fa-save mr-2"></i> Update Data
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // JavaScript code for interactivity
        document.addEventListener("DOMContentLoaded", function() {
            // Toggle sidebar
            const toggleSidebar = document.getElementById("toggleSidebar");
            const sidebar = document.getElementById("sidebar");
            const mainContent = document.getElementById("mainContent");
            const pageTitle = document.getElementById("pageTitle");

            toggleSidebar.addEventListener("click", function() {
                sidebar.classList.toggle("collapsed");
                mainContent.classList.toggle("ml-64");
                mainContent.classList.toggle("ml-16");
                pageTitle.classList.toggle("hidden");
            });

            // Switch between dashboard, customers, and data grid
            const dashboardLink = document.getElementById("dashboardLink");
            const productordersLink = document.getElementById("productordersLink");
            const dataGridLink = document.getElementById("dataGridLink");
            const dashboardContent = document.getElementById("dashboardContent");
            const customersContent = document.getElementById("customersContent");
            const dataGridContent = document.getElementById("dataGridContent");

            dashboardLink.addEventListener("click", function() {
                dashboardContent.classList.remove("hidden");
                customersContent.classList.add("hidden");
                dataGridContent.classList.add("hidden");
                pageTitle.innerText = "Dashboard";
            });

            productordersLink.addEventListener("click", function() {
                dashboardContent.classList.add("hidden");
                customersContent.classList.remove("hidden");
                dataGridContent.classList.add("hidden");
                pageTitle.innerText = "Customers";
            });

            dataGridLink.addEventListener("click", function() {
                dashboardContent.classList.add("hidden");
                customersContent.classList.add("hidden");
                dataGridContent.classList.remove("hidden");
                pageTitle.innerText = "Data Grid";
            });

            // Add Customer modal
            const addCustomerBtn = document.getElementById("addCustomerBtn");
            const addCustomerModal = document.getElementById("addCustomerModal");
            const closeCustomerModal = document.getElementById("closeCustomerModal");

            addCustomerBtn.addEventListener("click", function() {
                addCustomerModal.classList.remove("hidden");
            });

            closeCustomerModal.addEventListener("click", function() {
                addCustomerModal.classList.add("hidden");
            });

            // Edit Customer modal
            const editCustomerModal = document.getElementById("editCustomerModal");
            const closeEditCustomerModal = document.getElementById("closeEditCustomerModal");

            // Dummy data for editing
            const dummyCustomer = {
                id: "#001",
                name: "Emily Johnson",
                email: "emily@example.com",
                phone: "+1 234 567 890",
                status: "active"
            };

            // Open edit modal with dummy data
            document.getElementById("customersTable").addEventListener("click", function(e) {
                if (e.target.closest("tr")) {
                    const row = e.target.closest("tr");
                    const customerId = row.cells[0].innerText;
                    // Here you would fetch the real customer data based on the ID
                    // For now, we use dummy data
                    document.getElementById("editCustomerName").value = dummyCustomer.name;
                    document.getElementById("editCustomerEmail").value = dummyCustomer.email;
                    document.getElementById("editCustomerPhone").value = dummyCustomer.phone;
                    document.getElementById("editCustomerStatus").value = dummyCustomer.status;
                    editCustomerModal.classList.remove("hidden");
                }
            });

            closeEditCustomerModal.addEventListener("click", function() {
                editCustomerModal.classList.add("hidden");
            });

            // Add Data modal
            const addDataBtn = document.getElementById("addDataBtn");
            const addDataModal = document.getElementById("addDataModal");
            const closeDataModal = document.getElementById("closeDataModal");

            addDataBtn.addEventListener("click", function() {
                addDataModal.classList.remove("hidden");
            });

            closeDataModal.addEventListener("click", function() {
                addDataModal.classList.add("hidden");
            });

            // Edit Data modal
            const editDataModal = document.getElementById("editDataModal");
            const closeEditDataModal = document.getElementById("closeEditDataModal");

            // Dummy data for editing
            const dummyData = {
                id: "#1001",
                name: "Wireless Headphones",
                category: "Electronics",
                price: 199.99,
                stock: 45,
                status: "in_stock"
            };

            // Open edit modal with dummy data
            document.getElementById("dataGridTable").addEventListener("click", function(e) {
                if (e.target.closest("tr")) {
                    const row = e.target.closest("tr");
                    const dataId = row.cells[0].innerText;
                    // Here you would fetch the real data based on the ID
                    // For now, we use dummy data
                    document.getElementById("editDataName").value = dummyData.name;
                    document.getElementById("editDataCategory").value = dummyData.category;
                    document.getElementById("editDataPrice").value = dummyData.price;
                    document.getElementById("editDataStock").value = dummyData.stock;
                    document.getElementById("editDataStatus").value = dummyData.status;
                    editDataModal.classList.remove("hidden");
                }
            });

            closeEditDataModal.addEventListener("click", function() {
                editDataModal.classList.add("hidden");
            });
        });
    </script>
</body>
</html>