import Router from 'common/Router';
import fetchival from './Api';

export default class {
  static load(page = 1) {
    return fetchival(`${Router.name('client.news.index')}?page=${page}`, { responseAs: 'text' }).get();
  }

  static goTo(page = 1) {
    return window.location.assign(`${Router.name('client.news.index')}?page=${page}`);
  }
}
