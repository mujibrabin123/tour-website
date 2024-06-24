document.addEventListener('DOMContentLoaded',() => {
    console.log("DOM fully loaded and parsed");

    let searchBtn = document.querySelector('#search-btn');
    let searchBar = document.querySelector('.search-bar-container');
    let formBtn = document.querySelector('#login-btn');
    let loginForm = document.querySelector('.login-form-container');
    let formclose = document.querySelector('.fas.fa-time'); // Corrected selector
    let menu = document.querySelector('#menu-bar');   
    let navbar = document.querySelector('.navbar');    
    let navbavideoBtn = document.querySelectorAll('.vid-btn');
    window.onscroll = () => {
        searchBtn.classList.remove('fa-times');
        searchBar.classList.remove('active');
        menu.classList.remove('fa-times');
        navbar.classList.remove('active');
    }

    menu.addEventListener('click', () => {
        menu.classList.toggle('fa-times');
        navbar.classList.toggle('active');
    });

    searchBtn.addEventListener('click', () => {
        console.log("Search button clicked"); // Check if this message appears in the browser console
        searchBtn.classList.toggle('fa-times');
        searchBar.classList.toggle('active');
    });

    formBtn.addEventListener('click', () => {
        loginForm.classList.toggle('active');
    });

    formclose.addEventListener('click', () => {
        loginForm.classList.remove('active');
    });

    navbavideoBtn.forEach (btn => {
        console.log("Adding event listener to button:", btn); // Debugging log
        btn.addEventListener('click', () => {
            console.log("Video button clicked:", btn); // Debugging log
            document.querySelector('.controls .active').classList.remove('active');
            btn.classList.add('active');
            document.querySelector('#video-slider').src = btn.getAttribute('data-src');
    });
});



var swiper = new Swiper(".review-slider", {
    spaceBetween: 20,
    loop:true,
    autoplay: {
        delay: 2500,
        disableoninteraction: false,
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
});

