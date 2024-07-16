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
    const content = element.nextElementSibling;
    if (content.style.display === "none" || content.style.display === "") {
        content.style.display = "block";
    } else {
        content.style.display = "none";
    }
}

// this follows the mouse on the header
document.addEventListener('mousemove', function(e) {
    const header = document.querySelector('header');
    const footer = document.querySelector('footer');
    const x = e.clientX / window.innerWidth;
    const y = e.clientY / window.innerHeight;
    
    header.style.background = `radial-gradient(circle at ${x * 100}% ${y * 100}%, #9B51E0, #331b49)`;
    footer.style.background = `radial-gradient(circle at ${x * 100}% ${y * 100}%, #9B51E0, #331b49)`;
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