document.addEventListener("DOMContentLoaded", () => {
    const colorPickerTab = document.getElementById('color-picker-tab');
    const styleDiv = document.getElementById('style-div');
    const mainColorPicker = document.getElementById('main-color-picker');
    const secondaryColorPicker = document.getElementById('secondary-color-picker');

    const colors = ['#9B51E0', '#FF5733', '#33FF57', '#3357FF', '#F0E68C', '#FFD700', '#40E0D0', '#EE82EE', '#FA8072', '#7FFFD4'];

    colors.forEach(color => {
        const mainColorDiv = document.createElement('div');
        mainColorDiv.style.backgroundColor = color;
        mainColorDiv.addEventListener('click', () => {
            document.documentElement.style.setProperty('--main-color', color);
        });
        mainColorPicker.appendChild(mainColorDiv);

        const secondaryColorDiv = document.createElement('div');
        secondaryColorDiv.style.backgroundColor = color;
        secondaryColorDiv.addEventListener('click', () => {
            document.documentElement.style.setProperty('--secondary-color', color);
        });
        secondaryColorPicker.appendChild(secondaryColorDiv);
    });

    colorPickerTab.addEventListener('click', () => {
        styleDiv.classList.toggle('show');
    });
});
