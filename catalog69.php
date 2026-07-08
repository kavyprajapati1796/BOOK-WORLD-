<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book Catalog 2 - Book World</title>
  <link rel="stylesheet" href="css/style.css">
  <style>
   /* =======================
   Global Reset
======================= */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* =======================
   Body & Main
======================= */
body {
  font-family: Arial, sans-serif;
  background-color: #f4f6f9; /* more explicit */
  color: #333;
  line-height: 1.6;
  margin: 0;
  padding: 0;
  width: 100%; /* takes full screen width */
  min-height: 100vh; /* ensures body covers viewport height */
}


main {
  padding: 20px;
  max-width: 1200px;
  margin: auto;
}

h1 {
  text-align: center;
  color: #222;
  margin-bottom: 30px;
}

/* =======================
   Search Bar
======================= */
#search-bar {
  padding: 12px;
  font-size: 16px;
  width: 100%;
  margin: 20px 0;
  border: 1px solid #ddd;
  border-radius: 6px;
  background: #fff;
  box-shadow: 0 2px 6px rgba(0,0,0,0.05);
  transition: border-color 0.3s ease;
}

#search-bar:focus {
  outline: none;
  border-color: #007bff;
}

/* =======================
   Book Grid
======================= */
/* =======================
   Book Grid
======================= */
.book-list {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
  gap: 20px;
}

.book-item {
  background: #fff;
  border: 1px solid #eee;
  border-radius: 8px; /* make it smaller for square look */
  padding: 15px;
  text-align: center;
  box-shadow: 0 2px 8px rgba(0,0,0,0.1);
  transition: transform 0.2s ease, box-shadow 0.2s ease;

  /* --- Square type fix --- */
  aspect-ratio: 1 / 1;   /* makes perfect squares */
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.book-item img {
  width: 100%;
  height: auto; /* fixed height for uniform look */
  object-fit: cover;
  border-radius: 6px;
}


/* =======================
   Buy Button
======================= */
.btnBuys {
  display: inline-block;
  padding: 10px 18px;
  margin-top: 12px;
  background: #007bff;
  color: #fff;
  text-decoration: none;
  border-radius: 6px;
  font-weight: bold;
  transition: background 0.3s ease, transform 0.2s ease;
  cursor: pointer;
}

.btnBuys:hover {
  background: #0056b3;
  transform: scale(1.05);
}

/* =======================
   Modal Styling
======================= */
#orderModal {
  display: none;
  position: fixed;
  z-index: 1000;
  left: 0; top: 0;
  width: 100%; height: 100%;
  background: rgba(0,0,0,0.5);
}

#orderModal > div {
  background: #fff;
  margin: 5% auto;
  padding: 25px 30px;
  border-radius: 10px;
  width: 90%;
  max-width: 450px;
  box-shadow: 0 6px 20px rgba(0,0,0,0.2);
}

#orderModal h2 {
  margin-bottom: 15px;
  color: #333;
}

#orderModal label {
  display: block;
  margin-top: 10px;
  font-weight: bold;
}

#orderModal input,
#orderModal textarea,
#orderModal select {
  width: 100%;
  padding: 10px;
  margin-top: 6px;
  margin-bottom: 12px;
  border-radius: 6px;
  border: 1px solid #ccc;
  background: #fafafa;
  font-size: 14px;
}

#orderModal input:focus,
#orderModal textarea:focus,
#orderModal select:focus {
  border-color: #007bff;
  outline: none;
}

#orderModal button {
  padding: 10px 18px;
  border: none;
  border-radius: 6px;
  cursor: pointer;
  font-weight: bold;
}

#orderModal button[type="submit"] {
  background: #007bff;
  color: #fff;
}

#orderModal button#closeModal {
  background: #dc3545;
  color: #fff;
  margin-left: 10px;
}

/* =======================
   Footer
======================= */
footer {
  background: #222;          /* dark background */
  color: #ddd;               /* light text */
  text-align: center;        /* center content */
  padding: 20px 10px;        /* spacing */
  font-size: 0.95rem;        /* slightly smaller text */
  letter-spacing: 0.5px;     /* spacing between letters */
  border-top: 3px solid #007bff; /* top accent line */
}

footer p {
  margin: 0; /* remove default margin */
}

footer a {
  color: #007bff;          /* link color */
  text-decoration: none;
  font-weight: bold;
}

footer a:hover {
  text-decoration: underline;
  color: #0056b3;
}


  </style>
</head>
<body>
  <?php include 'navbar.php'; ?>

  <main>
    <input type="text" id="search-bar" placeholder="Search for books..." onkeyup="searchBooks()">
    <div class="book-list" id="book-list">
      <!-- Example books -->

              <?php
          // Database connection
          $servername = "localhost";  // your DB server
          $username = "root";         // your DB username
          $password = "";             // your DB password
          $dbname = "bookworld";      // your DB name

          $conn = new mysqli($servername, $username, $password, $dbname);

          // Check connection
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
          }

          // Fetch books from database
          $sql = "SELECT * FROM products";
          $result = $conn->query($sql);

          // Loop through books
          if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                echo '<div class="book-item">';
                echo '<img src="images/'.$row["image"].'" alt="'.$row["name"].'">';
                echo '<h3>'.$row["name"].'</h3>';
                // echo '<p>Author: '.$row["author"].'</p>';
                echo '<p class="price">$'.$row["price"].'</p>';
                echo '<button class="btnBuys">Buy Now</button>';
                echo '</div>';
              }
          } else {
              echo "No books found.";
          }

          $conn->close();
          ?>


         
      <!-- add the rest of your books here -->
    </div>
  </main>

  <!-- Order Modal -->
  <div id="orderModal">
    <div>
      <h2>Order Book</h2>
      <p id="selectedBook"></p>
      <form id="orderForm" method="post" action="catalog69.php">
        <input type="hidden" id="bookName" name="bookName">
        <label>Name:</label>
        <input type="text" id="name" name="name" required>
        <label>Phone Number:</label>
        <input type="tel" id="phone" name="phone" required>
        <label>Address:</label>
        <textarea id="address" name="address" required></textarea>
        <label>City:</label>
        <textarea id="City" name="City" required></textarea>
        <label>District:</label>
        <textarea id="District" name="District" required></textarea>
        <label>State:</label>
        <textarea id="State" name="State" required></textarea>
        <label>Pincode:</label>
        <input type="text" id="pincode" name="pincode" required>
        <label>Payment Method:</label>
        <select id="payment" name="payment" required>
          <option value="">Select Payment Method</option>
          <option value="COD">Cash on Delivery</option>
          <option value="Card">Credit/Debit Card</option>
          <option value="UPI">UPI</option>
        </select>
        <button type="submit" style="background:#007bff; color:#fff;">Place Order</button>
        <button type="button" id="closeModal" style="background:#dc3545; color:#fff; margin-left:10px;">Cancel</button>
      </form>
    </div>
  </div>
  </main>

  <footer>
    <p>&copy; 2025 Book World. All Rights Reserved.</p>
  </footer>
    <script>
     let btns = document.getElementsByClassName("btnBuys");

    for (let btn of btns) {
        btn.addEventListener("click", function () {
            // alert("You clicked Buy Now for VR Developer Gems!");
             const bookItem = btn.closest('.book-item');
        const bookTitle = bookItem.querySelector('h3').textContent;
        // Redirect to form.php with book name as GET parameter
        window.location.href = "form.php?bookName=" + encodeURIComponent(bookTitle);
        });
    }

    
    </script>
  <script>
    Search function
    function searchBooks() {
      let searchQuery = document.getElementById("search-bar").value.toLowerCase();
      let books = document.querySelectorAll(".book-item");
      books.forEach(function(book) {
        let title = book.querySelector("h3").textContent.toLowerCase();
        book.style.display = title.includes(searchQuery) ? "block" : "none";
      });
    }

    // Modal functionality
    const modal = document.getElementById('orderModal');
    const closeModalBtn = document.getElementById('closeModal');
    const orderForm = document.getElementById('orderForm');
    const selectedBook = document.getElementById('selectedBook');
    const bookNameInput = document.getElementById('bookName');

     document.querySelectorAll('.buy-now-btn').forEach(function(btn) {
     btn.addEventListener('click', function(e) {
     e.preventDefault();
        const bookItem = btn.closest('.book-item');
        const bookTitle = bookItem.querySelector('h3').textContent;
        selectedBook.textContent = "Book: " + bookTitle;
        bookNameInput.value = bookTitle;
        modal.style.display = 'block';
      });
    });

    closeModalBtn.onclick = function() { modal.style.display = 'none'; };
    window.onclick = function(event) {
      if (event.target == modal) { modal.style.display = 'none'; }
    };

    orderForm.onsubmit = function(e) {
      e.preventDefault();
      alert('Order placed successfully!');
      modal.style.display = 'none';
      orderForm.reset();
    };
  </script>
</body>
</html>



