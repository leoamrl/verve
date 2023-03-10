import "../sass/style.scss";
import { initAccordion } from "./modules/acoordion";
import { initCookies } from "./modules/cookies";
import { initDefer } from "./modules/defer";
import { initMenu } from "./modules/menu";
import { initHeader } from "./modules/header";
import { initClientsCarousel } from "./modules/clients";
import { initTestimonialsCarousel } from "./modules/testimonials";
import { initCasesCarousel } from "./modules/cases";
import { initNumbersAnimation } from "./modules/numbersCounter";
import gsap from "gsap";
import ScrollTrigger from "gsap/ScrollTrigger";
import { initFooter } from "./modules/footer";
gsap.registerPlugin(ScrollTrigger);


initNumbersAnimation();

initDefer()
initHeader()
initMenu()
initCookies()
initAccordion()
initClientsCarousel()
initCasesCarousel()
initTestimonialsCarousel()
initFooter()