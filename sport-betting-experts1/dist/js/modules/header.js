

document.addEventListener("click", function (e) {
  if (e.target.closest(".header-language__button")) {
    document.querySelector(".header-language").classList.add("header-language-active")
  }
  if (!e.target.closest(".header-language-active")) {
    document.querySelector(".header-language").classList.remove("header-language-active")
  }
})