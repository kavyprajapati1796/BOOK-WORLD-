<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book World - Home</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <style>
        /* Reset some default styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body styling */
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: #f8f9fa;
    color: #333;
    line-height: 1.6;
}

/* Navbar (from navbar.php) */
nav {
    background: #222;
    padding: 1rem;
}

nav ul {
    display: flex;
    justify-content: center;
    list-style: none;
}

nav ul li {
    margin: 0 15px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
    font-size: 1rem;
    transition: color 0.3s ease;
}

nav ul li a:hover {
    color: #ff9800;
}

/* Hero Section */
.hero {
    text-align: center;
    padding: 50px 20px;
    background: linear-gradient(to right, #007bff, #6610f2);
    color: white;
    border-radius: 0 0 30px 30px;
}

.hero h1 {
    font-size: 2.5rem;
    margin-bottom: 20px;
}

.hero h3 {
    font-weight: 400;
    max-width: 900px;
    margin: auto;
}

/* Info Book Sections */
.ibook {
    padding: 40px 20px;
}

.bggg {
    width: 100%;
    border-spacing: 20px;
}

.bggg img {
    width: 200px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
}

.mmm {
    font-size: 1.1rem;
    color: #444;
    padding: 10px;
    text-align: justify;
}

/* Genres Section */
.features {
    background: #fff;
    padding: 40px 20px;
    text-align: center;
}

.features h2 {
    font-size: 2rem;
    margin-bottom: 30px;
    color: #222;
}

.genre-list {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    margin-bottom: 20px;
}

.genre-item {
    background: #007bff;
    color: white;
    margin: 10px;
    padding: 15px 25px;
    border-radius: 30px;
    font-size: 1rem;
    cursor: pointer;
    transition: transform 0.3s ease, background 0.3s ease;
}

.genre-item:hover {
    background: #ff9800;
    transform: scale(1.1);
}

/* Footer */
footer {
    background: #222;
    color: #ddd;
    text-align: center;
    padding: 15px;
    margin-top: 40px;
    font-size: 0.9rem;
}

    </style>
</head>
<body>
   <?php include 'navbar.php'; ?>
    <main>
        <section class="hero">
            <h1>Welcome to Book World &#x1F4DA;</h1>
            <h3>Education is World Book's commitment and its editorial team is World Book's strength. Each team member is dedicated to producing accurate and unbiased information by utilizing contemporary technological tools and following traditional practices of editorial excellence. For more than 100 years, World Book has promoted learning for the entire family through a range of products in which complex topics are concisely explained and vividly illustrated. An explicit goal is to help increase both reading fluency and comprehension in young readers. Encyclopedic content is updated continually and accessible 24/7 on a variety of devices. Innovative and readable, World Book will remain a trusted and useful resource at home, in the library, and in the classroom for years to come.</h3>
        </section>
        <section class="ibook">
            <table class="bggg">
                <tr>
                    <td style="width: 200px;"><img src="images/1.jpeg" alt=""></td>
                    <td colspan="2">
                        <h3 class="mmm">Get lost in the pages of a good book and discover new worlds, new ideas, and new perspectives. Reading is a journey that can transform your life, broaden your horizons, and spark your imagination. Explore our collection of books and start your journey today.s</h3>
                    </td>
                </tr>
            </table>
        </section>
        <section class="ibook">
            <table class="bggg">
                <tr>
                    <td colspan="2"><h3 class="mmm">Ever wondered what lies beyond the edge of reality ? Or what secrets are hidden in the pages of a ancient tome ? Our books are portals to new ideas, new discoveries, and new adventures. Browse our shelves and uncover the surprises that await you.</h3></td>
                    <td><img src="images/2.jpeg" alt=""></td>
                </tr>
                <tr>
            </table>
        </section>
        <section class="ibook">
            <table class="bggg">
                <tr>
                    <td style="width: 200px;"><img src="images/1.jpeg" alt=""></td>
                    <td colspan="2">
                        <h3 class="mmm">Get lost in the pages of a good book and discover new worlds, new ideas, and new perspectives. Reading is a journey that can transform your life, broaden your horizons, and spark your imagination. Explore our collection of books and start your journey today.s</h3>
                    </td>
                </tr>
            </table>
        </section>
        <section class="ibook">
            <table class="bggg">
                <tr>
                    <td colspan="2">
                        <h3 class="mmm">Join our community of book lovers and discover new authors, new genres, and new favorite books. Our website is a hub for readers, writers, and thinkers to connect, share ideas, and explore the world of literature together.</h3>
                        <h3 class="mmm">Step into the shadows and uncover the secrets that lie within the pages of our books. From mysterious landscapes to hidden truths, our collection will transport you to worlds beyond your wildest imagination.s</h3>
                    </td>
                    <td><img src="images/4.jpeg" alt=""></td>
                </tr>
            </table>
        </section>
                
            </table>
        </section>
        <section class="features">
            <h2>Popular Genres</h2>
            <div class="genre-list">
                <div class="genre-item">Fantacy</div>
                <div class="genre-item">Mystery</div>
                <div class="genre-item">Science Fiction</div>
                <div class="genre-item">Biography</div>
                <div class="genre-item">IT Field</div>
                <div class="genre-item">Horror</div>
                <div class="genre-item">Fiction</div>
            </div>
            <div class="genre-list">
                <div class="genre-item">Thriller</div>
                <div class="genre-item">Literary Fiction</div>
                <div class="genre-item">Adventure Fiction</div>
                <div class="genre-item">Historical Fiction</div>
                <div class="genre-item">Kids</div>
                <div class="genre-item">Graphic Novel</div>
                <div class="genre-item">Classices</div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Book World. All Rights Reserved.</p>
    </footer>
</body>
</html>
