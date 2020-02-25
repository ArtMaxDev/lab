import '../core';
import NewsAPI from '../Api/News';

const d = document;

function parseDOM(html) {
  const parser = new DOMParser();
  return parser.parseFromString(html, 'text/html');
}

function applyHtml(html, opts) {
  const defaults = {
    replace: false,
    target: '#news-container',
    ...opts
  };

  const container = d.querySelector(defaults.target);
  const newDOM = parseDOM(html).querySelector(defaults.target);
  if (defaults.replace) {
    container.replaceWith(newDOM);
  } else {
    Array.from(newDOM.querySelectorAll('.ot-news-item')).forEach((childNode) => {
      container.appendChild(childNode);
    });
  }
}

function activeLink(linkNode, next) {
  const nodes = d.querySelectorAll('.js-news-page');
  const elementIndex = Array.prototype.indexOf.call(nodes, linkNode);

  Array.from(d.querySelectorAll('.js-news-page')).forEach((node, index) => {
    if (next && index <= elementIndex) {
      node.classList.add('ot-active');
    } else {
      node.classList.remove('ot-active');
    }
  });
  linkNode.classList.add('ot-active');
}

function handleNext(e) {
  e.preventDefault();
  const totalElements = d.querySelectorAll('.js-news-page');
  const activeElements = d.querySelectorAll('.js-news-page.ot-active');
  const nextActivePageElement = activeElements[activeElements.length - 1]
    .parentElement
    .nextElementSibling
    .querySelector('.js-news-page');

  if (totalElements.length === activeElements.length + 1) {
    e.target.remove();
  }
  const page = parseInt(nextActivePageElement.textContent, 10) || 1;

  NewsAPI.load(page)
    .then((html) => {
      applyHtml(html);
      activeLink(nextActivePageElement, true);
    }).catch(() => {
      NewsAPI.goTo(page);
    });
}

function handlePage(e) {
  e.preventDefault();
  const page = parseInt(e.target.textContent, 10) || 1;
  NewsAPI.load(page)
    .then((html) => {
      applyHtml(html, {
        replace: true
      });
      activeLink(e.target);
    }).catch(() => {
      NewsAPI.goTo(page);
    });
}

Array.from(d.querySelectorAll('.js-news-page')).forEach((node) => {
  node.addEventListener('click', handlePage);
});

Array.from(d.querySelectorAll('.js-news-next')).forEach((node) => {
  node.addEventListener('click', handleNext);
});
