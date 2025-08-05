(function () {
    const menuToggle = document.querySelector('#menu-toggle');
    const menuIcon = document.querySelector('#menu-icon');
    const navigationMenu = document.querySelector('.header__navigation');

    if (menuToggle && menuIcon && navigationMenu) {
        menuToggle.addEventListener('click', function (e) {
            e.stopPropagation(); 
            const isOpen = navigationMenu.classList.toggle('header__navigation--active');

            // Toggle icon class
            if (isOpen) {
                menuIcon.classList.remove('bx-dots-horizontal-rounded');
                menuIcon.classList.add('bx-x');
            } else {
                menuIcon.classList.remove('bx-x');
                menuIcon.classList.add('bx-dots-horizontal-rounded');
            }
        });

        document.addEventListener('click', function (e) {
            const isClickInsideNav = navigationMenu.contains(e.target);
            const isClickOnToggle = menuToggle.contains(e.target);
            const isNavOpen = navigationMenu.classList.contains('header__navigation--active');

            if (isNavOpen && !isClickInsideNav && !isClickOnToggle) {
                navigationMenu.classList.remove('header__navigation--active');
                menuIcon.classList.remove('bx-x');
                menuIcon.classList.add('bx-dots-horizontal-rounded');
            }
        });
    }
})();