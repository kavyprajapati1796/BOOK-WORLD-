<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book World</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        /* Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Header styling */
        header {
            background: linear-gradient(135deg, #007bff, #0056b3);
            color: #fff;
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        /* Logo section */
        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo img {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            object-fit: cover;
            box-shadow: 0 2px 6px rgba(0,0,0,0.3);
        }

        .logo #text {
            font-size: 28px;
            font-family: 'Pacifico', cursive;
            color: #fff;
            letter-spacing: 1px;
        }

        /* Nav menu */
        nav ul {
            list-style: none;
            display: flex;
            gap: 25px;
            font-family: 'Poppins', sans-serif;
        }

        nav ul li {
            display: inline-block;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
            font-weight: 500;
            font-size: 16px;
            transition: all 0.3s ease;
            padding: 8px 14px;
            border-radius: 8px;
        }

        /* Hover effect */
        nav ul li a:hover {
            background: #fff;
            color: #0056b3;
            box-shadow: 0 2px 8px rgba(255,255,255,0.3);
        }

        /* Active page */
        nav ul li a.active {
            background: #fff;
            color: #0056b3;
            font-weight: 600;
        }

        /* Responsive */
        @media (max-width: 768px) {
            header {
                flex-direction: column;
                align-items: flex-start;
            }
            nav ul {
                flex-direction: column;
                width: 100%;
                gap: 15px;
                margin-top: 10px;
            }
        }
    </style>
</head>
<body>

    <header>
        <div class="logo">
            <!-- Logo image optional -->
            <img src="images/logo.jpg" alt="Book World Logo">
            <p id="text">Book World</p>
        </div>
        <nav>
            <ul>
                <li><a href="index69.php" class="active">Home</a></li>
                <li><a href="catalog69.php">Catalog</a></li>
                <li><a href="contact69.php">Contact</a></li>
                <li><a href="faq69.php">FAQ</a></li>
                <li><a href="buy.php">Admin</a></li>
                <li><a href="login69.php">Log-out</a></li>
            </ul>
        </nav>
    </header>

    <!-- <main style="padding: 40px; font-family: 'Poppins', sans-serif;">
        <h1>Welcome to Book World</h1>
        <p>Explore our wide collection of books with a beautiful design.</p>
    </main> -->

</body>
</html>
