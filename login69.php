<?php
// Include the database connection file
include("connection69.php");

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    // Query to check if the user exists in the database
    $query = "SELECT * FROM user WHERE email = '$email' AND password = '$pwd'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        // Successful login
        echo "<script>alert('Login successful!');</script>";
        echo "<script>window.location.href = 'index69.php';</script>";
    } else {
        echo "<script>alert('Invalid email or password.');</script>";
    }
}
?>

<!doctype html>
<html>
<head>
    <title>Login - PHP CRUD Operations</title>
    <script>
        function redirectToPlayer1() {
            window.location.href = "book69.php";
        }
        function showPopup(event) { 
            event.preventDefault(); 
            alert("Login Success");
            window.location.href ="index69.php";
        }
    </script>
    <link rel="stylesheet" type="text/css" href="style69.css">
    <style>
        
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

body {
      background: linear-gradient(135deg, #667eea, #764ba2);
    display: flex
;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    gap: 100px;
}

/* Logo container */
.cont {
  text-align: center;
  margin-bottom: 30px;
}

.cont img {
  height: 150px;
  width: auto;
  border-radius: 50%;
  border: 4px solid #fff;
  box-shadow: 0px 6px 20px rgba(0,0,0,0.2);
  margin-bottom: 10px;
}

.cont h1 {
  color: #fff;
  font-size: 28px;
  font-weight: bold;
  text-transform: uppercase;
  letter-spacing: 2px;
}

/* Login box with glass effect */
.container {
  background: rgba(255, 255, 255, 0.15);
  backdrop-filter: blur(12px);
  -webkit-backdrop-filter: blur(12px);
  border-radius: 20px;
  padding: 40px;
  width: 100%;
  max-width: 380px;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.25);
  color: #fff;
}

/* Title */
.title {
  font-size: 26px;
  font-weight: 600;
  text-align: center;
  margin-bottom: 25px;
  color: #fff;
}

/* Form styling */
.form {
  display: flex;
  flex-direction: column;
}

.input_field {
  margin-bottom: 20px;
  text-align: left;
}

.input_field label {
  font-size: 14px;
  font-weight: 500;
  margin-bottom: 8px;
  display: block;
  color: #f1f1f1;
}

.input_field input {
  width: 100%;
  padding: 12px 15px;
  font-size: 16px;
  border: none;
  border-radius: 10px;
  outline: none;
  background: rgba(255, 255, 255, 0.25);
  color: #fff;
  transition: all 0.3s ease;
}

.input_field input:focus {
  background: rgba(255, 255, 255, 0.35);
  box-shadow: 0 0 0 2px #6c63ff;
}

/* Button */
.button {
  background: linear-gradient(135deg, #6c63ff, #5a53cc);
  color: #fff;
  padding: 12px;
  border: none;
  border-radius: 12px;
  cursor: pointer;
  font-size: 16px;
  font-weight: bold;
  transition: transform 0.2s ease, background 0.3s ease;
}

.button:hover {
  background: linear-gradient(135deg, #5a53cc, #6c63ff);
  transform: scale(1.05);
}

/* Extra links */
h4 {
  font-size: 14px;
  text-align: center;
  color: #eee;
  margin-bottom: 20px;
}

h4 a {
  color: #ffd369;
  text-decoration: none;
  font-weight: bold;
  transition: color 0.3s;
}

h4 a:hover {
  color: #fff;
}

/* Responsive */
@media (max-width: 480px) {
  .container {
    padding: 30px;
    max-width: 90%;
  }
  .title {
    font-size: 22px;
  }
}


    </style>
</head>
<body>
    <div class="cont">
        <img class="ccnn" src="images\logo (2).jpg" alt="">
        <h1>Book World</h1>  
    </div>
    <div class="container">
        <form action="login69.php" method="POST" onsubmit="event.preventDefault(); redirectToBook69();">
            <div class="title">Login Form</div>
            <div class="form">
                <div class="input_field">
                    <label>Email Address</label>
                    <input type="email" class="input" name="email" required>
                </div>
                <div class="input_field">
                    <label>Password</label>
                    <input type="password" class="input" name="pwd" required>
                </div>
                <div style="margin-bottom: 20px;">
    <h4>create new account <a href="registration69.php">click here!</a></h4>
</div>
<div class="input_field">
    <input type="submit" value="Log in" class="button" name="login" onclick="showPopup(event)" style="font-weight: bold;">
</div>

            </div>
        </form>
    </div>
</body>
</html>