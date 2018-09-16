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
  autoplayTimeout: 3000,
  autoplayButton: false,
  autoplayHoverPause: true,
  autoplayButtonOutput: false,
  lazyload: true,
  mouseDrag: true,
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

const map = document.querySelector('#map');
Array.from(document.querySelectorAll('.js-open-map')).forEach((node) => {
  node.addEventListener('click', (e) => {
    e.preventDefault();
    map.classList.toggle('open');
  });
});
