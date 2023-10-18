window.onscroll=()=>
{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};

var swiper= new Swiper(".home-slider",{
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});