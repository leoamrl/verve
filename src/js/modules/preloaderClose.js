import { gsap, Power3 } from "gsap";
import { viewportMatches } from "../vendors/util";


export const preloaderClose = () => {
  let tl = gsap.timeline();

  tl.to(".preloader h1", {
    opacity: 1,
    translateY: 0,
    top: (!viewportMatches(1300)) ? 110 : 70,
    ease: Power3.easeOut,
  }, 0)
  tl.to(".preloader h2", {
    opacity: 1,
    translateY: 0,
    ease: Power3.easeOut,
  }, 2)
  tl.to(".preloader img", {
    opacity: 1,
    translateY: -40,
    ease: Power3.easeOut,
  }, 3)

  tl.to(".preloader", {
    duration: 0,
    scaleX: 0,
    transformOrigin: "right"
  }, 4)

}