import Swiper, { Navigation, Pagination } from 'swiper';

export function swiper() {
  Swiper.use([Navigation, Pagination]);
  const swiper = new Swiper('.gameplay-swiper', {
    slidesPerView: "auto",
    direction: 'horizontal',
    navigation: {
      nextEl: '.lists-gameplay__next',
      prevEl: '.lists-gameplay__prev',
    },
  });
}

// не забудь установить пакет