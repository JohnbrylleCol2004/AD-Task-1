<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me | My Website</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <a href="./index.php" class="logo">JB</a>
            <a href="./index.php" class="back-link"><i class="fas fa-arrow-left"></i>Back to Home</a>
        </div>
    </nav>

    <section class="about-me">
        <div class="container">
            <div class="flip-container" id="flip-container">
                <div class="flipper">
                    <div class="front">
                        <img src="assets/img/Creator-2.JPG" alt="John Brylle Col Front">
                    </div>
                    <div class="back">
                        <img src="assets/img/Brylle.JPG" alt="John Brylle Col Back">
                    </div>
                </div>
            </div>
        <div class="creator-info">
            <h1>About Me</h1>
            <h2>HI! I'm John Brylle A. Col</h2>
            <p class="bio">I'm a BSIT-WMA student in Far Eastern University who wants to improve in programming and also and web development. </p>

            <div class="details">
                <h3>My Skills</h3>
                <ul class="skill-list">
                    <li>
                    <i class="fas-check">HTML5 & CSS</i>
                    <i class="fas-check">Javascript</i>
                    <i class="fas-check">PHP</i>
                     <i class="fas-check">MySQL</i>
                </li>
                </ul>

                <h3>Education
                    <p class="education">Bachelor of Science in Information Technology:Specialization in Web and Mobile Application</p>
                </h3>

                <div class="social-links">
                    <a href="https://github.com/JohnbrylleCol2004"><i class="fab fa-github"></i>Github</a>
                    <a href="https://www.facebook.com/jeybi.col"><i class="fab fa-facebook"></i>Facebook</a>
                    <a href="https://www.instagram.com/jeybantots_/"><i class="fab fa-instagram"></i>Instagram</a>
                </div>
            </div>
        </div>
        </div>
    </section>

     <footer class="footer">
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> Jb.All Right Reserved.</p>
        </div>
    </footer>

    <script src="./assets/js/script.js"></script>
</body>
</html>