import '../core';
import Router from '../../common/Router';
import ImageAPI from './Image';
import makeForm from './shared/jsonFromJqueryForm';

export default class {
  static store(form, file) {
    const data = makeForm(form);
    return ImageAPI.store(file)
      .then(({ link }) => {
        data.image = link;
        return $.post(Router.name('admin.sliders.store'), data);
      });
  }

  static edit(id, form, file) {
    const data = makeForm(form);
    if (!file) {
      return $.put(Router.name('admin.sliders.update', id), data);
    }
    return ImageAPI.store(file)
      .then(({ link }) => {
        data.image = link;
        return $.put(Router.name('admin.sliders.update'), data);
      });
  }

  static remove(id) {
    return $.delete(Router.name('admin.sliders.destroy', id));
  }

  static load($element, container) {
    return $.get(Router.name('admin.sliders.index'))
      .then((response) => {
        $element.html($(response).find(container).html());
      });
  }
}
