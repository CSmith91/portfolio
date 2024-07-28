// document.addEventListener('DOMContentLoaded', () => {
//     const body = document.body;
//     const swapModeButton = document.getElementById('lightbulb');
//     const lightMode = document.getElementById('sun');
//     const darkMode = document.getElementById('moon');

//     swapModeButton.addEventListener('click', () => {
//         lightMode.classList.toggle('hidden');
//         darkMode.classList.toggle('hidden');
//         body.classList.toggle('light-mode')
//     });
// });

document.addEventListener('DOMContentLoaded', () => {
    const body = document.body;
    const swapModeButton = document.getElementById('lightbulb');
    const lightMode = document.getElementById('sun');
    const darkMode = document.getElementById('moon');

    // Function to set the mode based on preference
    function setMode(mode) {
        if (mode === 'dark') {
            body.classList.remove('light-mode');
            lightMode.classList.add('hidden');
            darkMode.classList.remove('hidden');
        } else {
            body.classList.add('light-mode');
            lightMode.classList.remove('hidden');
            darkMode.classList.add('hidden');
        }
    }

    // Check for saved mode in localStorage and apply it
    const savedMode = localStorage.getItem('mode');
    if (savedMode) {
        setMode(savedMode);
    }

    // Event listener for toggling mode
    swapModeButton.addEventListener('click', () => {
        const isLightMode = body.classList.toggle('light-mode');
        if (isLightMode) {
            localStorage.setItem('mode', 'light');
            lightMode.classList.remove('hidden');
            darkMode.classList.add('hidden');
        } else {
            localStorage.setItem('mode', 'dark');
            lightMode.classList.add('hidden');
            darkMode.classList.remove('hidden');
        }
    });
});