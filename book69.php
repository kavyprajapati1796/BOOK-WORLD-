<?php
// Include the database connection file
include("connection69.php");
?>

<!doctype html>
<html>
<head>
    <title>PHP CRUD Operations</title>
    <link rel="stylesheet" type="text/css" href="style69.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 50%;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
            color: #333;
        }
        .form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        .input_field {
            display: flex;
            flex-direction: column;
        }
        .input_field label {
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }
        .input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }
        .textarea {
            resize: none;
            height: 80px;
        }
        select {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }
        .terms {
            display: flex;
            align-items: center;
        }
        .terms p {
            margin-left: 10px;
            color: #555;
        }
        .button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .button:hover {
            background-color: #0056b3;
        }
        #successMessage {
            display: none;
            margin-top: 20px;
            background-color: #d4edda;
            color: #155724;
            padding: 10px;
            border-radius: 4px;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="title">Book Information Form</div>
        <form action="#" method="POST" class="form">
            <div class="input_field">
                <label for="name">Name</label>
                <input type="text" id="name" class="input" name="name" required>
            </div>
            <div class="input_field">
                <label for="author">Author</label>
                <input type="text" id="author" class="input" name="author" required>
            </div>
            <div class="input_field"> 
                <label for="price">Price</label> 
                <input type="text" id="price" class="input" name="price" required> 
            </div> <div class="input_field"> 
                <input type="submit" value="Submit" class="button"> 
            </div> 
        </form> 
    </div>
</body>
</html>

<?php
// Include the database connection file
if (isset($_POST['name']) && isset($_POST['author']) && isset($_POST['price'])) {
    $name = $_POST['name'];
    $author = $_POST['author'];
    $price = $_POST['price'];

    $query = "INSERT INTO book (name, author, price) VALUES ('$name', '$author', $price)";
    $result = mysqli_query($conn, $query);

    if ($result) 
    {
        echo "<script>alert('Data insrted successfully!!!');</script>"; 
    } 
    else 
    { 
        echo "<script>alert('Failed to insert data into the database: ".mysqi_error($conn)."');</script>"; 
    }
}
?>
