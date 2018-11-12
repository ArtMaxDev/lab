import '../core';
import Router from 'common/Router';

export default class {
  static update(form) {
    return $.put(Router.name('admin.settings.update'), $(form).formDirty('data'));
  }
}
