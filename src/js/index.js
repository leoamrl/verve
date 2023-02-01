import "../sass/style.scss";
import { initAccordion } from "./modules/acoordion";
import { initCookies } from "./modules/cookies";
import { initDefer } from "./modules/defer";
import { initMenu } from "./modules/menu";
import { initHeader } from "./modules/header";
import "../../dist/wp-content/plugins/contact-form-7/includes/js/index.js";

initDefer()
initHeader()
initMenu()
initCookies()
initAccordion()