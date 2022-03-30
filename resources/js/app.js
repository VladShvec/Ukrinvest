require('./bootstrap');
let div = document.getElementById('lang-under');
let en = document.getElementById('en')
let ru = document.getElementById('ru')
let arm = document.getElementById('arm')
let under_lang = document.getElementById('lang-under')





$(document).ready(function () {
    $('.slider').slick({
        dots: true,
        arrows: false,
        autoplay: true
    })
});
$(document).ready(function () {
    $('.project-slider').slick({
        arrows: true,
        infinite: true,
        slidesToShow: 4,
        VariableWidth: true,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 750,
                settings: {
                    arrow: false,
                    centralModer: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },

        ],
    })
});
$(document).ready(function () {
    $('.news-page-slider').slick({
        dots: true,
        arrows: true
    })
});
let arrow = document.getElementById('arr-button');
let serv = document.getElementById('serv')
let homeLink = document.getElementById('Home');
let missionLink = document.getElementById('Mission');
let servicesLink = document.getElementById('Servises');
let projectstLink = document.getElementById('Projects');
let contactsLink = document.getElementById('Contacts');
let newsLink = document.getElementById('News')


let our_mission = document.getElementById('our-mission');
let projects = document.getElementById('projects');
let form = document.getElementById('form');
let newspress = document.getElementById('newspress')
let sliderMainContainer = document.getElementById('slider-main-container')
function scrollTo(element) {
    window.scroll({
        left: 0,
        top: element.offsetTop,
        behavior: 'smooth'
    })
}
homeLink.addEventListener('click',function (event){
    event.preventDefault()
    scrollTo(sliderMainContainer)
})
missionLink.addEventListener('click', function(event){
    event.preventDefault();
    scrollTo(our_mission)
})
newsLink.addEventListener('click', function(event){
    event.preventDefault();
    scrollTo(newspress)
})
contactsLink.addEventListener('click', function(event){
    event.preventDefault();
    scrollTo(form)
})
servicesLink.addEventListener('click', function(event){

        event.preventDefault();
        scrollTo(serv)
})
projectstLink.addEventListener('click', function(event){
        event.preventDefault();
        scrollTo(projects)
})
    // .addEventListener('click', function(event){
    //     console.log('dsadsa')
    //     event.preventDefault();
    //     scrollTo(our_mission)
    // })
    // .addEventListener('click', function(event){
    //     console.log('dsadsa')
    //     event.preventDefault();
    //     scrollTo(our_mission)
    // })
arrow.addEventListener('click', function (event) {

    event.preventDefault();
    scrollTo(serv)
})


document.querySelector('.burger').addEventListener('click', function () {
    document.querySelector('.burger span').classList.toggle('active');
    document.querySelector('.menu').classList.toggle('active')
})


let last_known_scroll_position = 0;
let ticking = false;
let header_block = document.getElementById('header');
function doSomething(scroll_pos) {
    if(last_known_scroll_position ==  0){
        header_block.setAttribute('style','background-color:grey')

    }else if(last_known_scroll_position > 100){
        header_block.setAttribute('style','background-color: rgba(255, 255, 255, 0.5);')
    }


}

window.addEventListener('scroll', function(e) {
    last_known_scroll_position = window.scrollY;

    if (!ticking) {
        window.requestAnimationFrame(function() {
            doSomething(last_known_scroll_position);
            ticking = false;
        });

        ticking = true;
    }
});

// document.querySelectorAll('a[href^="#"]').forEach(link => {
//     link.addEventListener('click', function(e) {
//         e.preventDefault();
//         let href = this.getAttribute('href').substring(1);
//         const scrollTarget = document.getElementById(href);
//         const topOffset = document.querySelector('.scrollto').offsetHeight;
//         const elementPosition = scrollTarget.getBoundingClientRect().top;
//         const offsetPosition = elementPosition - topOffset;
//
//         window.scrollBy({
//             top: offsetPosition,
//             behavior: 'smooth'
//         });
//     });
// });
