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
            margin: 0;
            padding: 0;
            /* background:url('images/logo.jpg') no-repeat center/cover; */
            
        }
        .container {
            width: 30%;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            background-color: #DAF7A6;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        font-size: 24px;
        .title {
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
        .cont{
            background: #fff;
            padding-top: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            height: 390px;
            justify-content: center;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            margin-right: 20px;
            margin-left: 20px;
            text-align: center;
        }
        .ccnn{
            height: 310px;
            width: 360px;
            mix-blend-mode: difference;
        }
    </style>
</head>
<body>

    <div class="container">
        <form action="#" method="POST">
            <div class="form">
                <div>
                    <h1>Sign Up</h1>
                </div>
                <div class="input_field">
                    <input type="text" class="input" name="fname" required placeholder="First Name">
                </div>
                <div class="input_field">
                    <input type="text" class="input" name="lname" required placeholder="Last name">
                </div>
                <div class="input_field">
                    <input type="password" class="input" name="password" required placeholder="Password">
                </div>
                <div class="input_field">
                    <input type="password" class="input" name="conpassword" required placeholder="Confirm Password">
                </div>
                <div class="input_field">
                    <select name="gender" required>
                        <option value="not selected" disabled selected>Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div class="input_field">
                    <input type="email" class="input" name="email" required placeholder="Email">
                </div>
                <div class="input_field">
                    <input type="text" class="input" name="phone" required placeholder="Phone No">
                </div>
                <div class="input_field">
                    <textarea class="textarea" name="address" required placeholder="Address"></textarea>
                </div>
                <div class="input_field terms">
                    <label class="check">
                        <input type="checkbox" required> Agree to terms and conditions
                        <span class="checkmark"></span>
                        
                    </label>
                </div>
                <!-- The success message -->
                <div id="successMessage" style="display:none;">
                    Data inserted successfully! Kindly Login!!!
                    <button id="okButton" type="button">OK</button>
                </div>
            </div>
            <div class="input_field">
                    <input type="submit" value="Register" class="button" name="register">
                </div>
        </form>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("okButton").addEventListener("click", function() {
                // Redirect to login1.php after clicking OK
                window.location.href = "login69.php";
            });
        });

        function showSuccessMessage() {
            document.getElementById("successMessage").style.display = "block";
        }
    </script>
</body>
</html>

<?php
if (isset($_POST['register'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pwd = $_POST['password'];
    $cpwd = $_POST['conpassword'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    if ($pwd === $cpwd) {
        $query = "insert into user values('$fname','$lname','$pwd','$cpwd','$gender','$email','$phone','$address')";
        $data = mysqli_query($conn, $query);

        if ($data) {
            echo "<script>alert('Registration Completed!'); window.location.href = 'login69.php';</script>";
        } else {
            echo "<script>alert('Failed to insert data into database.');</script>";
        }
    } else {
        echo "<script>alert('Passwords do not match.');</script>";
    }
}
?>
