import picoModal from 'picomodal';
import '../core';
import FeedbackAPI from '../Api/Feedback';

// Map toggle
const map = document.querySelector('#map');
Array.from(document.querySelectorAll('.js-open-map')).forEach((node) => {
  node.addEventListener('click', (e) => {
    e.preventDefault();
    map.classList.toggle('ot-open');
  });
});

const feedbackMessages = {
  en: {
    success: 'Successfully sent',
    error: 'Error. Try again later',
  },
  uk: {
    success: 'Форму успішно відправлено',
    error: 'Помилка. Спробуйте ще раз пізніше',
  },
};
// Feedback
document.querySelector('#feedback-form').addEventListener('submit', (e) => {
  e.preventDefault();
  const button = e.target.querySelector('[type=submit]');
  button.setAttribute('disabled', 'disabled');
  let messages = feedbackMessages[document.documentElement.lang];
  if (!messages) {
    messages = feedbackMessages.uk;
  }
  FeedbackAPI.store(e.target).then(() => {
    picoModal(`<p>${messages.success}<p>`).show();
    button.removeAttribute('disabled');
  }).catch(() => {
    picoModal(`<p>${messages.error}<p>`).show();
    button.removeAttribute('disabled');
  });
});
