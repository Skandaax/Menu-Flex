document.addEventListener('DOMContentLoaded', function () {
    const toggleButton = document.createElement('button');
    toggleButton.textContent = 'Menu';
    toggleButton.className = 'menu-toggle';
    const menuWrapper = document.querySelector('.complex-menu-wrapper');
    const mainMenu = document.querySelector('.main-menu');

    toggleButton.addEventListener('click', () => {
        mainMenu.classList.toggle('show');
    });

    menuWrapper.insertBefore(toggleButton, mainMenu);
});

