import '../core';
import Router from 'common/Router';

export default class {
  static create() {
    window.location.assign(Router.name('admin.publications.create'));
  }

  static edit(id) {
    window.location.assign(Router.name('admin.publications.edit', id));
  }

  static remove(id) {
    return $.delete(Router.name('admin.publications.destroy', id));
  }

  static store(form, status) {
    return $.post(Router.name('admin.publications.store'), {
      ...$(form).serializeJSON(),
      status
    });
  }

  static update(id, form, status) {
    return $.put(Router.name('admin.publications.update', id), {
      ...$(form).serializeJSON(),
      status
    });
  }
}
