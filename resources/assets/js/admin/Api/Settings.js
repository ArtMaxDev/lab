import '../core';
// import Router from '../../common/Router';
import makeForm from './shared/jsonFromJqueryForm';

export default class {
  static update(data) {
    return Promise.resolve(makeForm(data));
    // return $.put(Router.name('users.update', id), makeForm(data));
  }
}
