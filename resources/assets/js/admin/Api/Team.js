import '../core';
import Router from 'common/Router';
import ImageAPI from './Image';

export default class {
  static store(form, file) {
    const data = $(form).serializeJSON();
    return ImageAPI.store(file)
      .then(({ link }) => {
        data.image = link;
        return $.post(Router.name('admin.team.store'), data);
      });
  }

  static edit(id, form, file) {
    const data = $(form).serializeJSON();
    if (!file) {
      return $.put(Router.name('admin.team.update', id), data);
    }
    return ImageAPI.store(file)
      .then(({ link }) => {
        data.image = link;
        return $.put(Router.name('admin.team.update'), data);
      });
  }

  static remove(id) {
    return $.delete(Router.name('admin.team.destroy', id));
  }

  static load($element, container) {
    return $.get(Router.name('admin.team.index'))
      .then((response) => {
        $element.html($(response).find(container).html());
      });
  }
}
