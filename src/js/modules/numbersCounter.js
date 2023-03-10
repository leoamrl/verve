import gsap from "gsap";
import ScrollTrigger from "gsap/ScrollTrigger";

export const initNumbersAnimation = () => {
  const count = document.querySelectorAll('.count');

  const counterAnim = (qSelector, start = 0, end, duration = 1000) => {

    let startTimestamp = null;
    const step = (timestamp) => {
     if (!startTimestamp) startTimestamp = timestamp;
     const progress = Math.min((timestamp - startTimestamp) / duration, 1);
     qSelector.innerText = Math.floor(progress * (end - start) + start);
     if (progress < 1) {
      window.requestAnimationFrame(step);
     }
    };

    window.requestAnimationFrame(step);

  };

  const initAnimation = () => {
    count.forEach(item => {
      counterAnim(item, 10, item.getAttribute('data-time'), 3000);
    })
  };
  
  if(count)
    ScrollTrigger.create({
      trigger: '.home-numbers',
      onEnter: initAnimation,
    });
}