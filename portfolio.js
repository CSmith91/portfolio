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

document.addEventListener('mousemove', function(e) {
    const header = document.querySelector('header');
    const x = e.clientX / window.innerWidth;
    const y = e.clientY / window.innerHeight;
    
    header.style.background = `radial-gradient(circle at ${x * 100}% ${y * 100}%, #9B51E0, #331b49)`;
});
