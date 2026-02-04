// DOM content loaded event listener
document.addEventListener('DOMContentLoaded', function() {
    const hamburger= document.querySelector('.hamburger-menu');
    const body = document.querySelector('body');

hamburger.addEventListener('click', function(){
    body.classList.toggle('menu-open');

})
});
