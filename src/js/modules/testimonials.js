// @ts-nocheck
import Glide from '@glidejs/glide'

export const initTestimonialsCarousel = () => {
  const carousel = document.querySelector('[data-testimonials-carousel]')

  if(carousel)
    new Glide(carousel, {
      type: 'carousel',
      startAt: 0,
      perView: 1,
      gap: 30
    }).mount()
}