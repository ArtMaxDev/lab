import 'select2';
import 'jquery.dirty';
import 'jquery-validation';
import 'jquery-validation/dist/additional-methods';
import 'jquery.maskedinput/src/jquery.maskedinput';
import Codebase from '../core';
import SettingsAPI from '../Api/Settings';
import { showErrors, showSuccess, validationDefaults } from './shared/validation';

const validation = (() => {
  const $form = $('#formSettings');

  const initFormTouch = () => {
    const buttons = $('#btnSave, #btnReset');
    $form.dirty({
      onDirty() {
        buttons.prop('disabled', false);
      },
      onClean() {
        buttons.prop('disabled', true);
      }
    });
  };

  const validationRules = {
    ...validationDefaults,
    rules: {
      user_name: { required: true, minlength: 3 },
      user_phone_first: { required: true, phonesRUS_UA: true },
      user_phone_second: { required: false, phonesRUS_UA: true },
      email: { required: true, email: true, minlength: 6 },
      password: { required: true, minlength: 8 },
      repassword: { required: true, minlength: 8, equalTo: '#user_password_confirm' }
    }
  };

  // Init Add Form Validation, for more examples you can check out https://github.com/jzaefferer/$-validation
  const initValidationAdd = () => {
    const $validator = $form.validate({
      submitHandler(form) {
        Codebase.layout('header_loader_on');
        SettingsAPI.update(form)
          .then((response) => {
            Codebase.layout('header_loader_off');
            if (isEdit) {
              //
            } else {
              //
            }
            showSuccess(true);
          }).catch((response) => {
            $(form).removeClass('is-loading');
            showErrors(response, $validator);
          });
      },
      ...validationRules
    });
  };

  return {
    init() {
      // Init Add Form Validation
      initFormTouch();
      initValidationAdd();
    }
  };
})();

// Initialize when page loads
$(() => {
  // Init page helpers (Table Tools helper)
  Codebase.helpers(['table-tools', 'select2', 'masked-inputs', 'core-appear']);
  // Init page
  validation.init();
});
