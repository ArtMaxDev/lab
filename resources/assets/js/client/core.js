import fontLoader from 'common/fontLoader';

const token = $('meta[name="csrf-token"]');

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

if (token) {
  // $.ajaxSetup({
  //   headers: {
  //     'X-Requested-With': 'XMLHttpRequest',
  //     'X-CSRF-TOKEN': token.attr('content')
  //   }
  // });
} else {
  console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}
