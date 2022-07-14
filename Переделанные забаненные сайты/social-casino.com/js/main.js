document.getElementById('burger').onclick = function() {
    document.getElementById('mobileMenu').classList.add('menu__box-active');
  }
document.getElementById('closeMob').onclick = function() {
    document.getElementById('mobileMenu').classList.remove('menu__box-active');
  }
document.getElementById('mobileMenu').onclick = function() {
    document.getElementById('mobileMenu').classList.remove('menu__box-active');
  }

