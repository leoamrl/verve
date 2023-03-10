// @ts-nocheck
import Glide from '@glidejs/glide'

export const initClientsCarousel = () => {
  const carousel = document.querySelector('[data-clients-carousel]')

  if(carousel)
    new Glide(carousel, {
      type: 'carousel',
      startAt: 0,
      perView: 4,
      breakpoints: {
        1024: {
          perView: 3
        },
        768: {
          perView: 2
        }
      }
    }).mount()
}