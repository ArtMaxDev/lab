import '../core';
import Router from 'common/Router';

export default class {
  static store() {
    return $.post(Router.name('admin.image.store'));
  }
}
