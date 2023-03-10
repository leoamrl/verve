import { viewportMatches } from "../vendors/util";

export const initFooter = () => {
  const footer = document.querySelector('[data-footer]');
  const footerSpace = document.querySelector('[data-footer-space]')
  
  const paddingFunction = () => {
    if(!viewportMatches(1024)) {
      const footerHeight = footer?.offsetHeight;
      footer.setAttribute("style","position: fixed; z-index: -1;");
      footerSpace.setAttribute("style","height: " + footerHeight + "px");
      return;
    }
    footer.setAttribute("style","position: initial;");
    footerSpace.setAttribute("style","height: 0");
  }

  
  window.addEventListener("load", paddingFunction);
  window.addEventListener("resize", paddingFunction);
  
}