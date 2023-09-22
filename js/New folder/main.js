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

// Collection Animation
function animatelide(){
  let arrOfSlides=Array.from(document.querySelectorAll(".swiper-slide"))
arrOfSlides.map((slide)=>{
  if(slide.classList.contains("swiper-slide-active")){
    slide.children[0].children[0].classList.add("animate-slider")
  }else{
    slide.children[0].children[0].classList.remove("animate-slider")
  }
})
}
let arows=Array.from(document.querySelectorAll(".collection-nav"))
arows.map((arow)=>arow.addEventListener("click",animatelide))

// Start Products Section
var swiper = new Swiper(".products__swiper", {
slidesPerView: 4,
loop: true,
slidesPerGroup: 3,
spaceBetween: 30,
pagination: {
  el: ".swiper-pagination",
  clickable: true,
},
navigation: {
  nextEl: ".swiper-button-next",
  prevEl: ".swiper-button-prev",
},
});

// Start Bestseller Section
var swiper = new Swiper(".bestseller-slider", {
slidesPerView: 5,
spaceBetween: 30,
slidesPerGroup: 1,
loopFillGroupWithBlank: true,
pagination: {
  el: ".swiper-pagination",
  clickable: true,
},
navigation: {
  nextEl: ".bestseller-next",
  prevEl: ".bestseller-prev",
},
});

// Start Testimonials Section
var swiper = new Swiper(".testimonials-slider", {
loop:true,
pagination: {
  el: ".testimonials-pagination",
  dynamicBullets: true,
},
});

// Start BestSeller Section
var swiper = new Swiper(".bestseller", {
slidesPerView: 5,
spaceBetween: 30,
pagination: {
    el: ".swiper-pagination",
    clickable: true,
},
});

// Start Blog Section
var swiper = new Swiper(".blog-slider", {
slidesPerView: 3,
spaceBetween: 30,
slidesPerGroup: 3,
loop: true,
loopFillGroupWithBlank: true,
pagination: {
  el: ".swiper-pagination",
  clickable: true,
},
navigation: {
  nextEl: ".blog-next",
  prevEl: ".blog-prev",
},
});
