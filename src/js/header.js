(function () {
    const header = document.querySelector('.header');
    if (header) {
        const setHeaderOpacity = () => {
            const isMobile = window.innerWidth <= 768;
            const scrolled = window.scrollY > 10;

            if (scrolled) {
                header.classList.add('header--opaque');
            } else {
                header.classList.remove('header--opaque');
            }
        };

        window.addEventListener('scroll', setHeaderOpacity);
        setHeaderOpacity();
    }
})();