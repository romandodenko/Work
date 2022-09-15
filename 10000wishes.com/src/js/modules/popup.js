const clicker = document.querySelector("") // класс вызывающий попапы
const popup = document.querySelector(".popup");
const popupClose = document.querySelector(".popup__close");
const popupExit = document.querySelector(".popup__exit");


// Попапы формы

// const buttonSign = document.querySelector(".header__sign");
// const buttonLog = document.querySelector(".header__log");
// const reg = document.querySelector(".popup-reg");
// const log = document.querySelector(".popup-log");
// const signClose = document.querySelector(".popup-reg__close");
// const signLog = document.querySelector(".popup-log__close");
// const signExit = document.querySelector(".popup-reg__exit");
// const logExit = document.querySelector(".popup-log__exit");
// const body = document.querySelector("body");
// const menu = document.querySelector(".header__wrapper-menu");

// if (buttonSign && buttonLog) {
//   buttonLog.addEventListener("click", function() {
//     log.classList.add("popup-log-active")
//     body.classList.add("body-block")
//     menu.classList.remove("menu-active")
//   })
//   signLog.addEventListener("click", function() {
//     log.classList.remove("popup-log-active")
//     body.classList.remove("body-block")
//   })
//   logExit.addEventListener("click", function() {
//     log.classList.remove("popup-log-active")
//     body.classList.remove("body-block")
//   })

//   buttonSign.addEventListener("click", function() {
//     reg.classList.add("popup-reg-active")
//     body.classList.add("body-block")
//     menu.classList.remove("menu-active")
//   })
//   signClose.addEventListener("click", function() {
//     reg.classList.remove("popup-reg-active")
//     body.classList.remove("body-block")
//   })
//   signExit.addEventListener("click", function() {
//     reg.classList.remove("popup-reg-active")
//     body.classList.remove("body-block")
//   })
// }