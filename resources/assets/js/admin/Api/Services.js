import '../core';
import Router from 'common/Router';

export default class {
  static create() {
    window.location.assign(Router.name('admin.services.create'));
  }

  static edit(id) {
    window.location.assign(Router.name('admin.services.edit', id));
  }

  static remove(id) {
    return $.delete(Router.name('admin.services.destroy', id));
  }

  static store(form, status) {
    return $.post(Router.name('admin.services.store'), {
      ...$(form).serializeJSON(),
      status
    });
  }

  static update(id, form, status) {
    return $.put(Router.name('admin.services.update', id), {
      ...$(form).serializeJSON(),
      status
    });
  }
}
