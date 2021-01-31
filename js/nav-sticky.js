//Navbar fixed top
document.addEventListener('DOMContentLoaded', (event) => {

    var nav = document.querySelector('nav');

    var sticky = nav.offsetTop;

    document.addEventListener("scroll", function () {

        if (window.scrollY >= sticky) {

            nav.classList.add('fixed-top');
            nav.classList.add('change-nav');

        } else {

            nav.classList.remove('fixed-top');
            nav.classList.remove('change-nav');

        }

    })

});