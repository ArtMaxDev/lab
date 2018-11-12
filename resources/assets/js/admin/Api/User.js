import '../core';
import Router from 'common/Router';

export default class {
  static store(form) {
    return $.post(Router.name('admin.users.store'), $(form).serializeJSON());
  }

  static edit(id, form) {
    return $.put(Router.name('admin.users.update', id), $(form).serializeJSON());
  }

  static remove(id) {
    return $.delete(Router.name('admin.users.update', id));
  }
}
