import fontLoader from 'common/fontLoader';

fontLoader([
  {
    name: 'Roboto Condensed',
    weight: [300, 400, 700]
  },
  {
    name: 'Roboto Slab',
    weight: [400, 700]
  },
]);

// Init smooth scroll behavior
Array.from(document.querySelectorAll('.js-scroll')).forEach((node) => {
  node.addEventListener('click', (e) => {
    e.preventDefault();
    const target = e.target.getAttribute('href') || e.target.getAttribute('data-target');
    const element = document.querySelector(target);
    if (typeof element === 'object') {
      window.scrollTo({
        behavior: 'smooth',
        left: 0,
        top: element.offsetTop
      });
    }
  });
});
