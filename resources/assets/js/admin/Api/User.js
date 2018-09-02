import '../core';
import Router from 'common/Router';
import makeForm from './shared/jsonFromJqueryForm';

export default class {
  static store(data) {
    return $.post(Router.name('admin.users.store'), makeForm(data));
  }

  static edit(id, data) {
    return $.put(Router.name('admin.users.update', id), makeForm(data));
  }

  static remove(id) {
    return $.delete(Router.name('admin.users.update', id));
  }
}
