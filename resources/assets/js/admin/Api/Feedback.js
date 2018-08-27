import '../core';
import Router from '../../common/Router';
import makeForm from './shared/jsonFromJqueryForm';

export default class {
  static edit(id, data) {
    return $.put(Router.name('admin.feedback.update', id), makeForm(data));
  }

  static remove(id) {
    return $.delete(Router.name('admin.feedback.update', id));
  }
}
