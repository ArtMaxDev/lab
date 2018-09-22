import '../core';
import FeedbackAPI from '../Api/Feedback'

// Map toggle
const map = document.querySelector('#map');
Array.from(document.querySelectorAll('.js-open-map')).forEach((node) => {
  node.addEventListener('click', (e) => {
    e.preventDefault();
    map.classList.toggle('open');
  });
});

// Feedback
document.querySelector('#feedback-form').addEventListener('submit', (e) => {
  e.preventDefault();
  const button = e.target.querySelector('[type=submit]');
  button.setAttribute('disabled', 'disabled');
  FeedbackAPI.store(e.target).then(() => {
    alert('Форма успешно отправленна');
    button.removeAttribute('disabled');
  }).catch(() => {
    alert('Ошибка. Попробуйте снова');
    button.removeAttribute('disabled');
  });
});
