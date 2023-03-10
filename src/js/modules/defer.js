import { preloaderClose } from "./preloaderClose";

export const initDefer = () => {
  function deferAction() {
    const imgDefer = document.querySelectorAll('.defer'),
      styleDefer = document.querySelectorAll('.defer-style');

    if (imgDefer) {
      imgDefer.forEach(img => {
        if (img.getAttribute('data-src')) {
          img.setAttribute('src', img.getAttribute('data-src'));
        }
      })
    }

    if (styleDefer) {
      styleDefer.forEach(element => {
        if (element.getAttribute('data-style')) {
          element.style.backgroundImage = "url(" + element.getAttribute('data-style') + ")";
        }
      })
    }
  }

  function defer() {
    setTimeout(function () {
      deferAction();
      preloaderClose()
    }, 200);
  }

  if (document.readyState == 'complete') {
    defer();
  } else {
    document.onreadystatechange = function () {
      if (document.readyState === "complete") {
        defer();
      }
    }
  }
}
