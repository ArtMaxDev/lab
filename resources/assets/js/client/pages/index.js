import { tns } from 'tiny-slider/src/tiny-slider';
import '../core';

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
  controlsText: ['', '<img src="/client/assets/images/static/arr-right.png" />']
});

tns({
  container: '#slider-news',
  items: 3,
  slideBy: 1,
  controls: true,
  viewportMax: true,
  arrowKeys: true,
  autoplayButtonOutput: false,
  nav: false,
  mouseDrag: true,
  controlsText: ['', '<img src="/client/assets/images/static/arr-right.png" />']
});
