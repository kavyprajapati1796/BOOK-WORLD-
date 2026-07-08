<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Sections</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <style>
      /* Reset */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Body */
body {
  font-family: Arial, sans-serif;
  background: #f4f4f4;
  color: #333;
  line-height: 1.6;
}

/* Main Section */
main {
  padding: 40px 20px;
  display: flex;
  justify-content: center;
  align-items: flex-start;
  gap: 40px;
  flex-wrap: wrap; /* Makes it responsive */
}

/* About Us Card */
.container {
  flex: 1 1 300px;
  background: #ffffff;
  padding: 25px;
  border-radius: 10px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

.container h2 {
  margin-bottom: 15px;
  color: #007bff;
}

/* Contact Us Form Card */
.const {
  flex: 1 1 350px;
  background: #daf7a6;
  padding: 25px;
  border-radius: 10px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

.const h2 {
  margin-bottom: 15px;
  color: #222;
}

/* Form Styling */
.form1 {
  display: flex;
  flex-direction: column;
}

.input_field {
  margin-bottom: 15px;
}

label {
  font-weight: bold;
  margin-bottom: 5px;
  display: block;
}

input, textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 6px;
  background: #fff;
  font-size: 14px;
}

input:focus, textarea:focus {
  border-color: #007bff;
  outline: none;
}

/* Buttons */
button {
  background: #28a745;
  color: #fff;
  border: none;
  padding: 12px;
  border-radius: 6px;
  font-size: 16px;
  cursor: pointer;
  font-weight: bold;
  transition: background 0.3s ease;
}

button:hover {
  background: #218838;
}

/* Footer */
footer {
  background: #222;
  color: #ddd;
  text-align: center;
  padding: 15px;
  margin-top: 30px;
}

/* Wrapper for both sections */
.about-contact {
  display: flex;
  justify-content: center;
  align-items: flex-start;
  gap: 40px;
  flex-wrap: wrap; /* responsive */
  padding: 40px 20px;
}

/* About Us box */
.container {
  flex: 1 1 300px;
  background: #ffffff;
  padding: 25px;
  border-radius: 10px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

.container h2 {
  margin-bottom: 15px;
  color: #007bff;
}

/* Contact box */
.const {
  flex: 1 1 350px;
  background: #daf7a6;
  padding: 25px;
  border-radius: 10px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

.const h2 {
  margin-bottom: 15px;
  color: #222;
}

/* Form */
.form1 {
  display: flex;
  flex-direction: column;
}

.input_field {
  margin-bottom: 15px;
}

label {
  font-weight: bold;
  margin-bottom: 5px;
  display: block;
}

input, textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 6px;
  background: #fff;
  font-size: 14px;
}

input:focus, textarea:focus {
  border-color: #007bff;
  outline: none;
}

/* Button */
button {
  background: #28a745;
  color: #fff;
  border: none;
  padding: 12px;
  border-radius: 6px;
  font-size: 16px;
  cursor: pointer;
  font-weight: bold;
  transition: background 0.3s ease;
}

button:hover {
  background: #218838;
}


    </style>
</head>
<body>
        <?php include ('navbar.php')?>
    <main>
  <div class="about-contact">
    <!-- About Us -->
    <div class="container">
      <h2>About Us</h2>
      <p>
        Welcome to Book World, your one-stop destination for all your reading needs. 
        Explore our vast catalog and enjoy exceptional service.
      </p>
    </div>

    <!-- Contact Us -->
    <div class="const">
      <form method="post" action="">
        <div class="form1">
          <div class="title"><h2>Contact Us</h2></div>

          <div class="input_field">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
          </div>

          <div class="input_field">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
          </div>

          <div class="input_field">
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea>
          </div>

          <div class="title">
            <button type="submit" name="submit">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</main>

    <footer>
        <p>&copy; 2025 Book World. All Rights Reserved.</p>
    </footer>
</body>
</html>


<?php
    if (isset($_POST['submit'])) {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "mca";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $name = $conn->real_escape_string($_POST['name']);
        $email = $conn->real_escape_string($_POST['email']);
        $message = $conn->real_escape_string($_POST['message']);

        $sql = "INSERT INTO qna (name, email, message) VALUES ('$name', '$email', '$message')";

        if ($conn->query($sql) === TRUE) {
            echo "<p style='color:green; text-align:center;'>Message submitted successfully!</p>";
        } else {
            echo "<p style='color:red; text-align:center;'>Error: " . $conn->error . "</p>";
        }

        $conn->close();
    }
    ?>