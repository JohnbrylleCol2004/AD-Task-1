<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AD-Task-1
    </title></title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<script src="assets/js/script.js"></script>
<body>
   <nav class="navbar">
    <div class="container">
        <a href="index.php" class="logo">JB</a>
        
        <button class="hamburger" aria-label="Menu">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>

        <ul class="nav-menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="page/about.php">About</a></li>
        </ul>
    </div>
</nav>

    <section class="hero">
        <div class="container">
            <div class="hero-content">
            <h1>HI, I am John Brylle A. Col</h1>
            <p class="subtitles">Discover amazing contents and resources made good just for you</p>  
            
        <div class="buttons">
            <a href="#features" class="btn primary">Explore Features</a>
            <a href="page/about.php" class="btn secondary">About Me</a>
        </div>
        </div>
    </div>
    </section> 
    
    <section id="features">
        <div class="container">
            <h2>Key Features</h2>
            <div class="feature-grid">
                <div class="feature-card">
                    <i class="fas fa-bolt"></i>
                    <h3>Fast Perfomance</h3>
                    <p>Optimized for the speed and smooth experience.</p>
                </div>
                <div class="feature-card">
                    <i class="fas fa-mobile-alt"></i>
                    <h3>Responsive Design</h3>
                    <p>Looks great on all devices from desktop to mobile</p>
                </div>
                <div class="feature-card">
                    <i class="fas fa-lock"></i>
                    <h3>Secure Platform</h3>
                    <p>Built with security and privacy in mind</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?>Jb.All Right Reserved.</p>
        </div>
    </footer>
</body>
</html>