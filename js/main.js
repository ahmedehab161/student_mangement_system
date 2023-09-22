AOS.init();
// Intro Slider 
// Start collection Section
var swiper = new Swiper(".collection__slider", {
    slidesPerView: 1,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
        el: ".collection-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".collection-next",
        prevEl: ".collection-prev",
    },
    });

function animateSlide(){
    let arrOfSlides=Array.from(document.querySelectorAll(".swiper-slide"))
    arrOfSlides.map((slide)=>{
    if(slide.classList.contains("swiper-slide-active")){
        slide.children[0].children[0].classList.add("animate-slider")
        slide.children[0].children[1].classList.add("animate-slider")
    }else{
        slide.children[0].children[0].classList.remove("animate-slider")
        slide.children[0].children[1].classList.remove("animate-slider")
    }
    })
    }
    let arows=Array.from(document.querySelectorAll(".collection-nav"))
    arows.map((arow)=>arow.addEventListener("click",animateSlide))

    // Badge Slider
    var swiper = new Swiper(".badge__slider", {
    slidesPerView: 6,
    spaceBetween: 5,
    loop:true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    });
    // testimonial
    var swiper = new Swiper(".testimonial__slider", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    });
