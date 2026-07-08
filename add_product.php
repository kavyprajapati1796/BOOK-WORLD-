
<?php if ($_SERVER["REQUEST_METHOD"] == "POST") 
{ 
    $host = 'localhost'; 
    $user = 'root'; 
    $pass = ''; 
    $dbname = 'bookworld';
    $conn = mysqli_connect($host, $user, $pass, $dbname);
    if (!$conn) 
    { 
        die("Connection failed: " . mysqli_connect_error()); 
    }

    $name = $_POST['name']; // $category = $_POST['category'];
     $price = $_POST['price']; // $description = $_POST['description']; // Upload image 
     $image = $_FILES['image']['name']; 
     $image_tmp = $_FILES['image']['tmp_name']; 
     $upload_path = 'uploads/' . basename($image); 
     if (move_uploaded_file($image_tmp, $upload_path))
         { $sql = "INSERT INTO products (name, price, image) VALUES ('$name', '$price', '$image')";

    if ($conn->query($sql) === TRUE) 
    {
             echo "<p>✅ Product added successfully!</p>";
         } 
         else
            { 
                echo "<p>❌ Error: " . $conn->error . "</p>"; 
            } 
        } 
        else 
            { 
                echo "<p>❌ Failed to upload image.</p>"; 
            } 
        $conn->close();
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Product - Book World</title>
    <style>
        /* ====== Reset & Body ====== */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #89f7fe, #66a6ff);
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
        }

        /* ====== Container Card ====== */
        .container {
            width: 420px;
            background: #fff;
            padding: 30px 35px;
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
            animation: fadeIn 0.8s ease-in-out;
        }

        h2 {
            text-align: center;
            color: #1e90ff;
            font-weight: 700;
            margin-bottom: 25px;
        }

        /* ====== Labels & Inputs ====== */
        form label {
            display: block;
            margin-bottom: 6px;
            font-weight: 500;
            color: #333;
        }

        form input[type="text"],
        form input[type="number"],
        form input[type="file"],
        form textarea {
            width: 100%;
            padding: 10px 12px;
            margin-bottom: 18px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
            transition: 0.3s;
            font-size: 15px;
        }

        form input:focus,
        form textarea:focus {
            border-color: #1e90ff;
            box-shadow: 0 0 8px rgba(30, 144, 255, 0.3);
            outline: none;
        }

        /* ====== Button ====== */
        button {
            width: 100%;
            padding: 12px;
            background: linear-gradient(90deg, #1e90ff, #0073e6);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s ease;
        }

        button:hover {
            background: linear-gradient(90deg, #0073e6, #005bb5);
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(0, 115, 230, 0.3);
        }

        /* ====== Animation ====== */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-15px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Add New Product - Book World</h2>
        <form action="add_product.php" method="POST" enctype="multipart/form-data">
            <label for="name">Book Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="price">Price ($):</label>
            <input type="number" id="price" name="price" step="0.01" required>

            <label for="image">Product Image:</label>
            <input type="file" id="image" name="image" accept="image/*" required>

            <button type="submit">➕ Add Product</button>
        </form>
    </div>
</body>
</html>
