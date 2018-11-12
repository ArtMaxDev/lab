import '../core';
import Router from 'common/Router';

export default class {
  static edit(id, form) {
    return $.put(Router.name('admin.feedback.update', id), $(form).serializeJSON());
  }

  static remove(id) {
    return $.delete(Router.name('admin.feedback.update', id));
  }
}
