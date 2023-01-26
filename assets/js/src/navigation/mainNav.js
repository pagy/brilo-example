document.addEventListener('DOMContentLoaded', () => {

    const openBurgerEl = document.querySelector('.js_openBurger');
    const closeNavEl = document.querySelector('.js_closeNav');
    const mainNavEl = document.querySelector('.js_mainNav');
    const bodyEl = document.querySelector('.js_body');

    const openClass = 'is-open';
    const activeClass = 'is-active';
    const disableScrollClass = 'disableScroll';
    
    openBurgerEl.addEventListener('click', (e) => {
        openBurgerEl.classList.toggle(openClass);
        mainNavEl.classList.toggle(openClass);
        bodyEl.classList.toggle(disableScrollClass);
        closeNavEl.classList.toggle(activeClass);
    });

    closeNavEl.addEventListener('click', (e) => {
        bodyEl.classList.remove(disableScrollClass);
        closeNavEl.classList.remove(activeClass);
        openBurgerEl.classList.remove(openClass);
        mainNavEl.classList.remove(openClass);
    });
    
}); 
  