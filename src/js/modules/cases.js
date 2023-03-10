// @ts-nocheck
import Glide from '@glidejs/glide'

export const initCasesCarousel = () => {
  const carousel = document.querySelector('[data-cases-carousel]')

  if(carousel)
    new Glide(carousel, {
      type: 'carousel',
      startAt: 0,
      perView: 3,
      gap: 38,
      breakpoints: {
        1200: {
          perView: 2
        },
        1023: {
          perView: 1
        }
      }
    }).mount()
}