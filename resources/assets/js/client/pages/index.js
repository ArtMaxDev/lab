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
  autoplay: false,
  autoplayTimeout: 3000,
  autoplayButton: false,
  autoplayHoverPause: true,
  autoplayButtonOutput: false,
  lazyload: true,
  mouseDrag: true,
});
