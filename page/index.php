<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title></title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <a href="index.php" class="logo">JB</a>
        </div>
    </nav>

    <section class="hero">
        <div class="container">
            <div class="hero-content">
            <h1>Welcome to My Website</h1>
            <p class="subtitles">Discover amazing contents and resources made good just for you</p>  
            
        <div class="buttons">
            <a href="index.php" class="btn primary">Explore Features</a>
            <a href="about.php" class="btn secondary">About Me</a>
        </div>
        </div>
        <div class="hero-image">
            <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="Website Illustration">
        </div>
    </div>
    </section> 
    
    <section class="id">
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