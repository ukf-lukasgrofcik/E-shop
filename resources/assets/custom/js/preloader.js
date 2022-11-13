document.addEventListener('DOMContentLoaded', () => {
    let preloader = document.getElementById('preloader');

    preloader.classList.add("loaded");

    setTimeout( () => document.querySelector('body').removeChild(preloader), 300 );
});
