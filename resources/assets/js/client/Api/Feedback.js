import fetchival from 'fetchival';
import Router from 'common/Router';
import '../core';
import serialize from './shared/form-serialize';

export default class {
  static store(form) {
    return fetchival(Router.name('client.feedback.store')).post(serialize(form));
  }
}
