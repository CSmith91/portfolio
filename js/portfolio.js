// Show the back to top button when the user scrolls down
window.onscroll = function() {
    var backToTopButton = document.getElementById('backToTop');
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        backToTopButton.style.display = 'block';
    } else {
        backToTopButton.style.display = 'none';
    }
};

// collapsable sections
function toggleCollapse(element) {
    const skillCategory = element.closest('.skill-category');
    const content = element.nextElementSibling;
    const container = element;
    const child = element.lastElementChild;
    if (content.style.display === "none") {
        content.style.display = "block";
        skillCategory.classList.toggle('collapsed');
        container.classList.toggle('collapsed');
        child.classList.toggle('collapsed');
        if(content.nextElementSibling){
            const extra = content.nextElementSibling
            extra.style.display = "block";
            if(extra.nextElementSibling){
                const final = extra.nextElementSibling
                final.style.display = "block";
            }
        }
    } else {
        content.style.display = "none";
        skillCategory.classList.toggle('collapsed');
        container.classList.toggle('collapsed');
        child.classList.toggle('collapsed');
        if(content.nextElementSibling){
            const extra = content.nextElementSibling
            extra.style.display = "none";
            if(extra.nextElementSibling){
                const final = extra.nextElementSibling
                final.style.display = "none";
            }
        }
    }
}

// this follows the mouse on the header
document.addEventListener('mousemove', function(e) {
    const header = document.querySelector('header');
    const footer = document.querySelector('footer');
    //const nav = document.querySelector('nav ul');
    const x = e.clientX / window.innerWidth;
    const y = e.clientY / window.innerHeight;
    
    const gradient = `radial-gradient(circle at ${x * 100}% ${y * 100}%, #9B51E0, #331b49)`;
    header.style.background = gradient;
    footer.style.background = gradient;
    // nav.style.background = gradient;
});

// this is for the image carousel
document.addEventListener("DOMContentLoaded", function () {
    const prevButton = document.querySelector('.prev');
    const nextButton = document.querySelector('.next');
    const carousel = document.querySelector('.carousel');
    const images = document.querySelectorAll('.carousel img');
    const totalImages = images.length;
    let index = 0;

    function showImage(index) {
        const offset = -index * 100;
        carousel.style.transform = `translateX(${offset}%)`;
    }

    function showNextImage() {
        index = (index + 1) % totalImages;
        showImage(index);
    }

    function showPrevImage() {
        index = (index - 1 + totalImages) % totalImages;
        showImage(index);
    }

    nextButton.addEventListener('click', showNextImage);
    prevButton.addEventListener('click', showPrevImage);

    // auto-play carousel every 5 seconds
    setInterval(showNextImage, 5000);
});

// mouse-over popups
document.querySelectorAll('.code-grid-item').forEach(item => {
    // item.addEventListener('mouseenter', () => {
    //     pElement.classList.remove('linger'); // Remove linger class to show immediately
    // });

    item.addEventListener('mouseleave', () => {
        const pElement = item.querySelector('p');
        pElement.classList.add('linger');
        setTimeout(() => {
            pElement.classList.remove('linger');
        }, 1000); // Match delay of hide transition + animation duration
    });
});

// for the menu
document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.menu-toggle');
    const navMenu = document.querySelector('nav ul');
    const navClose = document.getElementById('menu-close');

    menuToggle.addEventListener('click', function() {
        navMenu.classList.toggle('show');
        navClose.classList.toggle('show');
    });

    navClose.addEventListener('click', function() {
        navMenu.classList.toggle('show');
        navClose.classList.toggle('show');
    });
});