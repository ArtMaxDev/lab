import '../core';
import Router from 'common/Router';
import makeForm from './shared/jsonFromJqueryForm';

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

  static store(data, status) {
    return $.post(Router.name('admin.publications.store'), {
      ...makeForm(data),
      status
    });
  }

  static update(id, data, status) {
    return $.put(Router.name('admin.publications.update', id), {
      ...makeForm(data),
      status
    });
  }
}
