const list = document.querySelectorAll('.nav-link')
const mobMenu = document.querySelector('.header__offcanvas')

list.forEach(item =>{ 
  item.addEventListener('click', (e) =>{
    mobMenu.classList.remove('show'); 
    // mobMenu.classList.add('mobileMenu-active');
    $(".webp").css({"overflow":"auto"});
})
})