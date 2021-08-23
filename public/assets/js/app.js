/* Sticky Header */
let headerContainer = document.querySelector('.portal-header');
let header = document.querySelector('header');
window.addEventListener('scroll', () => {
    if(window.pageYOffset >= 100) {
        header.classList.add('border-bottom');
        header.classList.add('portal-header-shadow');
    } else {
        header.classList.remove('border-bottom');
        header.classList.remove('portal-header-shadow');
    }
});