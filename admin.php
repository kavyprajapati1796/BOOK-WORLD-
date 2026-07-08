
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StyleHub Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f5f7fa;
        }
        .sidebar {
            transition: all 0.3s ease;
        }
        .active-nav-item {
            background-color: rgba(59, 130, 246, 0.1);
            border-left: 4px solid #3b82f6;
        }
        .card-shadow {
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="bg-gray-50">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <div class="sidebar bg-white w-64 border-r border-gray-200 flex-shrink-0">
            <div class="p-4 border-b border-gray-200 flex items-center">
                <div class="w-10 h-10 rounded-md bg-blue-500 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h1 class="ml-3 text-xl font-semibold">StyleHut Admin</h1>
            </div>
            <nav class="mt-6">
                    <div>
                        <a href="Buy.php" class="nav-item flex items-center px-6 py-3 hover:text-blue-600 text-blue-600 font-medium">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            Dashboard
                        </a>
                        <a href="add_product.php" class="flex items-center px-6 py-3 text-gray-600 hover:text-blue-600 font-medium">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                            </svg>
                            Products
                        </a>
                        <a href="orders.php" class="flex items-center px-6 py-3 text-gray-600 hover:text-blue-600 font-medium">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                            </svg>
                            Orders
                        </a>
                        <!-- <a href="customer.php" class="flex items-center px-6 py-3 text-gray-600 hover:text-blue-600 font-medium">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            Customers
                        </a> -->
                        
                    </div>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 overflow-auto">
            <!-- Top Navigation -->
            <header class="bg-white border-b border-gray-200 p-4 flex justify-between items-center">
                <div class="flex items-center">
                    <button class="mr-4 text-gray-500 focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                   
                </div>
                <div class="flex items-center space-x-4">
                    <button class="p-1 rounded-full bg-gray-100 text-gray-500 hover:bg-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
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

            <!-- Dashboard Content -->
            <main class="p-6">
                <div class="mb-6 flex justify-between items-center">
                    <h2 class="text-2xl font-bold text-gray-800">Dashboard Overview</h2>
                    
                </div>

                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
                    <div class="bg-white rounded-lg p-6 card-shadow">
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-gray-500 text-sm">Total Revenue</p>
                                <h3 class="text-2xl font-bold text-gray-800 mt-1">Rs.3,284</h3>
                                <p class="text-green-500 text-sm mt-2">+2.4% from last month</p>
                            </div>
                            <div class="w-12 h-12 rounded-lg bg-blue-100 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg p-6 card-shadow">
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-gray-500 text-sm">Total Orders</p>
                                <h3 class="text-2xl font-bold text-gray-800 mt-1">2</h3>
                                <p class="text-green-500 text-sm mt-2">+5.2% from last month</p>
                            </div>
                            <div class="w-12 h-12 rounded-lg bg-green-100 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg p-6 card-shadow">
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-gray-500 text-sm">New Customers</p>
                                <h3 class="text-2xl font-bold text-gray-800 mt-1">7<h3>
                                <p class="text-green-500 text-sm mt-2">+1.7% from last month</p>
                            </div>
                            <div class="w-12 h-12 rounded-lg bg-purple-100 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                   
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
                    navItems.forEach(i => i.classList.remove('active-nav-item', 'text-blue-600'));
                    this.classList.add('active-nav-item', 'text-blue-600');
                });
            });
        });
    </script>
</body>
</html>
