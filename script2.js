document.addEventListener('DOMContentLoaded', () => {
    console.log("DOM fully loaded and parsed");

    let searchBtn = document.querySelector('#search-btn');
    let searchBar = document.querySelector('.search-bar-container');
    let formBtn = document.querySelector('#login-btn');
    let loginForm = document.querySelector('.login-form-container');
    let formclose = document.querySelector('.fas.fa-times'); 
    let menu = document.querySelector('#menu-bar');
    let navbar = document.querySelector('.navbar');
    let navbavideoBtns = document.querySelectorAll('.vid-btn');

    console.log("Elements selected:", {
        searchBtn,
        searchBar,
        formBtn,
        loginForm,
        formclose,
        menu,
        navbar,
        navbavideoBtns
    });

    window.onscroll = () => {
        console.log("Window scrolled");
        if (searchBtn) searchBtn.classList.remove('fa-times');
        if (searchBar) searchBar.classList.remove('active');
        if (menu) menu.classList.remove('fa-times');
        if (navbar) navbar.classList.remove('active');
    };

    if (menu) {
        menu.addEventListener('click', () => {
            console.log("Menu button clicked");
            menu.classList.toggle('fa-times');
            navbar.classList.toggle('active');
        });
    }

    if (searchBtn) {
        searchBtn.addEventListener('click', () => {
            console.log("Search button clicked");
            searchBtn.classList.toggle('fa-times');
            searchBar.classList.toggle('active');
        });
    }

    if (formBtn && loginForm) {
        formBtn.addEventListener('click', () => {
            console.log("Form button clicked");
            loginForm.classList.toggle('active');
        });
    } else {
        console.log("Form button or login form not found");
    }

    if (formclose && loginForm) {
        formclose.addEventListener('click', () => {
            console.log("Form close button clicked");
            loginForm.classList.remove('active');
        });
    } else {
        console.log("Form close button or login form not found");
    }

    if (navbavideoBtns.length > 0) {
        navbavideoBtns.forEach(btn => {
            console.log("Adding event listener to button:", btn); 
            btn.addEventListener('click', () => {
                console.log("Video button clicked:", btn); 
                document.querySelectorAll('.controls .active').forEach(activeControl => {
                    activeControl.classList.remove('active');
                });
                btn.classList.add('active');
                let videoSlider = document.querySelector('#video-slider');
                if (videoSlider) {
                    videoSlider.src = btn.getAttribute('data-src');
                }
            });
        });
    } else {
        console.log("No video buttons found");
    }

    var swiper = new Swiper(".review-slider", {
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        breakpoints: {
            640: {
                slidesPerView: 1, 
            },
            768: {
                slidesPerView: 2,      
            },
            1024: {
                slidesPerView: 3,
            },
        },
    });

    console.log("Swiper initialized:", swiper);
});
