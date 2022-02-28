require('./bootstrap');
let div = document.getElementById('lang-under');
let en = document.getElementById('en')
let ru = document.getElementById('ru')
let arm = document.getElementById('arm')
let under_lang = document.getElementById('lang-under')

en.addEventListener('click', function (){
    // under_lang.setAttribute('style','animation-name: height')

})
ru.addEventListener('click', function (){
    // under_lang.setAttribute('style','animation-name: back;')




})
arm.addEventListener('click', function (){
    // under_lang.setAttribute('style','animation-name: back;')

})

document.querySelector('.burger').addEventListener('click', function(){
    document.querySelector('.burger span').classList.toggle('active');
    document.querySelector('.menu').classList.toggle('active')
})

$(document).ready(function(){
    $('.slider').slick({
        dots: true,
        arrows: false,
        autoplay: true
    })
});
