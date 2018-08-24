import '../core';
import Router from '../../common/Router';
import makeForm from './shared/jsonFromJqueryForm';

export default class {
  static update(data) {
    return $.put(Router.name('admin.settings.update'), makeForm(data));
  }
}
