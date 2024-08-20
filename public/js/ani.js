import './bootstrap';
document.addEventListener('DOMContentLoaded', function() {
    // Smooth Scroll
    const scrollLinks = document.querySelectorAll('a[href^="#"]');
    scrollLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            targetElement.scrollIntoView({ behavior: 'smooth' });
        });
    });

    // Scroll to Top Button
    const scrollTopButton = document.querySelector('.scroll-to-top');
    window.addEventListener('scroll', function() {
        if (window.scrollY > 200) {
            scrollTopButton.style.display = 'block';
        } else {
            scrollTopButton.style.display = 'none';
        }
    });

    scrollTopButton.addEventListener('click', function() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    // Mobile Menu Toggle
    const menuButton = document.querySelector('.btn-menu');
    const offCanvas = document.querySelector('.off-canvas-wrapper');
    const closeButton = document.querySelector('.btn-menu-close');

    menuButton.addEventListener('click', function() {
        offCanvas.classList.add('active');
    });

    closeButton.addEventListener('click', function() {
        offCanvas.classList.remove('active');
    });
});
