import 'datatables.net-bs4';
import 'datatables.net-select';
import 'jquery-validation';
import 'jquery-validation/dist/additional-methods';
import 'jquery.maskedinput/src/jquery.maskedinput';
import Codebase from '../core';
import UserAPI from '../Api/User';
import dtSettings from './shared/dataTables.settings';
import modalSwitcher from './shared/modalSwitcher';
import dataTablesSelectable from './shared/dataTables.select';
import swal, { showErrors, showSuccess, validationDefaults } from './shared/validation';

const dataTables = (() => {
  // Init full DataTable, for more examples you can check out https://www.datatables.net/
  const initDataTable = () => {
    const table = $('.js-dataTable-full').DataTable(dtSettings({
      columns: [
        { data: 'id', className: 'text-center' },
        { data: 'name', className: 'font-w600' },
        {
          data: 'email',
          render(email) {
            return `<a href="mailto:${email}">${email}</a>`;
          },
        },
      ]
    }));

    modalSwitcher(table, {
      resetOnEdit: {
        user_password: null,
        user_password_confirm: null
      }
    });
    dataTablesSelectable(table);

    return table;
  };

  return {
    init() {
      return initDataTable();
    }
  };
})();

// Init validation
const validation = (() => {
  const validationRules = {
    ...validationDefaults,
    rules: {
      name: { required: true, minlength: 3 },
      email: { required: true, email: true, minlength: 6 },
      user_password: {
        minlength: 8
      },
      user_password_confirm: {
        equalTo: '#user_password'
      },
    }
  };

  // Init Add Form Validation, for more examples you can check out https://github.com/jzaefferer/$-validation
  const initValidationAdd = (table, rulesOverride = {}) => {
    const $validator = $('#formApi').validate({
      submitHandler(form) {
        $(form).addClass('is-loading');
        const id = $(form).find('[name=id]').val().trim();
        // if form filled with an id then it's edit mode
        const isEdit = id.length > 0;
        const promise = isEdit ? UserAPI.edit(id, form) : UserAPI.store(form);
        promise
          .then((response) => {
            console.log(response);
            $('#modalApi').modal('hide');
            $(form).removeClass('is-loading');
            if (isEdit) {
              // change row data
              table.row({ selected: true }).data(response.data).draw(true);
            } else {
              // add row data
              table.rows.add([response.data]).draw(true);
            }
            showSuccess(isEdit);
          }).catch((response) => {
            $(form).removeClass('is-loading');
            showErrors(response.responseJSON || response, $validator);
          });
      },
      ...validationRules,
      rules: {
        ...validationRules.rules,
        ...rulesOverride
      }
    });
    return $validator;
  };

  return {
    init(table) {
      // Init Add Form Validation
      let validator;
      const $requiredFields = $('.js-pass-required');
      $('#modalApi').on('show.bs.modal', (e) => {
        if (validator) {
          validator.destroy();
        }
        if ($(e.relatedTarget).data('edit')) {
          $requiredFields.hide();
          validator = initValidationAdd(table);
        } else {
          $requiredFields.show();
          validator = initValidationAdd(table, {
            user_password: {
              required: true,
              minlength: 8
            },
            user_password_confirm: {
              required: true,
              equalTo: '#user_password'
            },
          });
        }
      });
    }
  };
})();

// Init Remove

const actions = (() => {
  // Init full DataTable, for more examples you can check out https://www.datatables.net/
  const remove = (table) => {
    $('.js-remove').on('click', () => {
      const { name, id } = table.row({ selected: true }).data();
      swal({
        type: 'warning',
        title: `Вы уверены что хотите удалить "${name}"?`,
        showCancelButton: true,
        confirmButtonText: 'Удалить',
        cancelButtonText: 'Отмена',
        showLoaderOnConfirm: true,
        preConfirm: () => UserAPI.remove(id),
        allowOutsideClick: () => !swal.isLoading()
      }).then((result) => {
        if (result.value) {
          swal({
            title: 'Удача!',
            type: 'success',
            html: 'Пользователь успешно удален!',
            timer: 2500
          });
          table.row({ selected: true }).remove().draw();
        }
      });
    });
  };

  return {
    init(table) {
      return remove(table);
    }
  };
})();

// Initialize when page loads
$(() => {
  // Init page helpers (Table Tools helper)
  Codebase.helpers(['table-tools', 'masked-inputs', 'core-appear']);
  // Init page
  const table = dataTables.init();
  validation.init(table);
  actions.init(table);
});
