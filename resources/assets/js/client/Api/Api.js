import fetchival from 'fetchival';

const token = document.querySelector('meta[name="csrf-token"]');

if (!token) {
  console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

/**
 * Fetchival wrapper with headers
 * @param {string} url
 * @param {*} [options]
 * @returns {function}
 */
export default (url, options = {}) => fetchival(url, {
  headers: {
    'X-Requested-With': 'XMLHttpRequest',
    'Content-Type': 'application/json',
    'X-CSRF-TOKEN': token.getAttribute('content')
  },
  ...options,
});
