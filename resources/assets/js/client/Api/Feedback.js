import Router from 'common/Router';
import fetchival from './Api';
import serialize from './shared/form-serialize';

export default class {
  static store(form) {
    return fetchival(Router.name('client.feedback.store')).post(serialize(form));
  }
}
