import 'datatables.net-bs4';
import 'datatables.net-select';
import 'jquery-validation';
import 'jquery-validation/dist/additional-methods';
import Codebase from '../core';
import FeedbackAPI from '../Api/Feedback';
import dtSettings from './shared/dataTables.settings';
import dataTablesSelectable from './shared/dataTables.select';
import swal, { showErrors, showSuccess, validationDefaults } from './shared/validation';

const dataTables = (() => {
  // Init full DataTable, for more examples you can check out https://www.datatables.net/
  const initDataTable = () => {
    const textLength = 100;
    const badgeList = {
      0: 'success',
      1: 'warning',
      2: 'danger',
      3: 'secondary',
    };
    const table = $('.js-dataTable-full').DataTable(dtSettings({
      columns: [
        { data: 'id' },
        { data: 'date', className: 'nowrap' },
        {
          data: 'fullname',
          className: 'font-w600 js-info',
          render(name) {
            return `<a class="link-effect" href="javascript:void(0)">${name}</a>`;
          }
        },
        { data: 'phone' },
        {
          data: 'email',
          render(email) {
            return `<a href="mailto:${email}">${email}</a>`;
          },
        },
        {
          data: 'message',
          render: text => text && text.length > 100 ? `${text.substr(0, textLength)}...` : text, // eslint-disable-line
        },
        {
          data: 'admin_message',
          render: text => text && text.length > 100 ? `${text.substr(0, textLength)}...` : text, // eslint-disable-line
        },
        {
          data: 'status',
          render(status) {
            return `<span class="badge badge-${badgeList[status]}">${window.app_data.statusList[status]}</span>`;
          },
        },
      ],
    }));

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
  };

  // Init Add Form Validation, for more examples you can check out https://github.com/jzaefferer/$-validation
  const initValidationAdd = (table, rulesOverride = {}) => {
    const $validator = $('#formApi').validate({
      submitHandler(form) {
        $(form).addClass('is-loading');
        const id = $('#feedbackId').val().trim();
        FeedbackAPI.edit(id, form)
          .then((response) => {
            const row = table.row({ selected: true });
            $('#modalApi').modal('hide');
            $(form).removeClass('is-loading');
            // change row data
            row.data({
              ...row.data(),
              ...response.data,
            }).draw(true);
            showSuccess(true);
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
      initValidationAdd(table);
    }
  };
})();

// Init Remove

const actions = (() => {
  // Init full DataTable, for more examples you can check out https://www.datatables.net/
  const remove = (table) => {
    $('.js-remove').on('click', () => {
      const { id } = table.row({ selected: true }).data();
      swal({
        type: 'warning',
        title: `Заявка №${id} будет удалена безвозвратно. Вы уверены?`,
        showCancelButton: true,
        confirmButtonText: 'Удалить',
        cancelButtonText: 'Отмена',
        showLoaderOnConfirm: true,
        preConfirm: () => FeedbackAPI.remove(id),
        allowOutsideClick: () => !swal.isLoading()
      }).then((result) => {
        if (result.value) {
          swal({
            title: 'Удача!',
            type: 'success',
            html: 'Заявка успешно удалена!',
            timer: 2500
          });
          table.row({ selected: true }).remove().draw();
        }
      });
    });
  };

  const openInfo = (table) => {
    table.on('user-select', (e, dt, type, cell) => {
      if (!$(cell.node()).hasClass('js-info')) return;
      e.stopPropagation();
      e.preventDefault();

      const rowIndex = cell[0][0].row;

      const data = cell.row(rowIndex).data();
      cell.row(rowIndex).select();
      $('#feedbackId, #feedbackNumber').text(data.id).val(data.id);
      $('#userName').text(data.fullname);
      $('#userDate').text(data.date);
      $('#userEmail').text(data.email);
      $('#userPhone').text(data.phone);
      $('#userMessage').text(data.message);
      $('#userAdminMessage').val(data.admin_message);
      $('#userStatus').val(data.status);

      $('#modalApi').modal();
    });
  };

  return {
    init(table) {
      remove(table);
      openInfo(table);
    }
  };
})();

// Initialize when page loads
$(() => {
  // Init page helpers (Table Tools helper)
  Codebase.helpers(['table-tools', 'core-appear']);
  // Init page
  const table = dataTables.init();
  validation.init(table);
  actions.init(table);
});
