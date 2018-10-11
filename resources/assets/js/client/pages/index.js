import { tns } from 'tiny-slider/src/tiny-slider';
import '../core';

const arrowImg = 'Next Item<img src="/client/assets/images/static/arr-right.png" alt="Next Item"/>';
// Init sliders
tns({
  container: '#slider',
  items: 1,
  slideBy: 1,
  controls: false,
  navAsThumbnails: true,
  viewportMax: true,
  arrowKeys: true,
  autoplay: true,
  autoplayTimeout: 5000,
  autoplayButton: false,
  autoplayHoverPause: true,
  autoplayButtonOutput: false,
  lazyload: true,
  rewind: true,
  onInit(instance) {
    Array.from(instance.navItems).forEach((node, i) => {
      node.textContent = i + 1;
    });
  }
});

if (window.screen && window.screen.width > 768) {
  tns({
    container: '#slider-team',
    items: 4,
    slideBy: 1,
    controls: true,
    viewportMax: true,
    arrowKeys: true,
    autoplayButtonOutput: false,
    nav: false,
    mouseDrag: true,
    controlsText: ['', arrowImg]
  });
}

if (document.querySelector('#slider-news')) {
  tns({
    container: '#slider-news',
    items: window.screen && window.screen.width > 768 ? 3 : 1,
    slideBy: 1,
    controls: true,
    viewportMax: true,
    arrowKeys: true,
    autoplayButtonOutput: false,
    nav: false,
    mouseDrag: true,
    controlsText: ['', arrowImg]
  });
}
