document.addEventListener('DOMContentLoaded', function() {
    const hamburger = document.querySelector('.hamburger');
    const navMenu = document.querySelector('.nav-menu');
    
    hamburger.addEventListener('click', function() {
        // Toggle active state
        this.classList.toggle('active');
        navMenu.classList.toggle('active');
        
        // Update aria-expanded attribute
        const isExpanded = this.getAttribute('aria-expanded') === 'true';
        this.setAttribute('aria-expanded', !isExpanded);
        
        // Toggle body scroll
        document.body.style.overflow = navMenu.classList.contains('active') ? 'hidden' : '';
    });
    
    // Close menu when clicking on links
    document.querySelectorAll('.nav-menu a').forEach(link => {
        link.addEventListener('click', function() {
            hamburger.classList.remove('active');
            navMenu.classList.remove('active');
            document.body.style.overflow = '';
            hamburger.setAttribute('aria-expanded', 'false');
        });
    });
    
    // Close menu when clicking outside
    document.addEventListener('click', function(event) {
        if (!event.target.closest('.navbar') && navMenu.classList.contains('active')) {
            hamburger.classList.remove('active');
            navMenu.classList.remove('active');
            document.body.style.overflow = '';
            hamburger.setAttribute('aria-expanded', 'false');
        }
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const flipContainer = document.getElementById('flip-container');
    
    flipContainer.addEventListener('click', function() {
        this.classList.toggle('flipped');
        
        // Reset the flip after animation completes (optional)
        setTimeout(() => {
            if(this.classList.contains('flipped')) {
                setTimeout(() => {
                    this.classList.remove('flipped');
                }, 3000); // Auto-flip back after 3 seconds
            }
        }, 800);
    });
});

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        
        const targetId = this.getAttribute('href');
        const targetElement = document.querySelector(targetId);
        
        if (targetElement) {
            targetElement.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});