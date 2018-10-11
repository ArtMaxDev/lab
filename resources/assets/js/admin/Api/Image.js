import '../core';
import Router from 'common/Router';

export default class {
  static store(file) {
    const data = new FormData();
    data.append('image', file);
    return $.ajax(Router.name('admin.image.upload'), {
      method: 'post',
      processData: false,
      contentType: false,
      data,
    });
  }
}
