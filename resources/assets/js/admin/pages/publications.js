import 'datatables.net-bs4';
import 'datatables.net-select';
import 'jquery-validation';
import 'jquery-validation/dist/additional-methods';
import Codebase from '../core';
import PublicationsAPI from '../Api/Publications';
import dtSettings from './shared/dataTables.settings';
import dataTablesSelectable from './shared/dataTables.select';
import swal from './shared/validation';

const dataTables = (() => {
  // Init full DataTable, for more examples you can check out https://www.datatables.net/
  const initDataTable = () => {
    const badgeList = {
      0: 'success',
      1: 'secondary',
    };
    const table = $('.js-dataTable-full').DataTable(dtSettings({
      columns: [
        { data: 'id', visible: false },
        {
          data: 'image',
          className: 'font-w600 js-info',
          render(src) {
            return `<img src="${src}" class="img-fluid"/>`;
          }
        },
        { data: 'date', className: 'nowrap' },
        { data: 'title_uk' },
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

// Init Remove

const actions = (() => {
  const remove = (table) => {
    $('.js-remove').on('click', () => {
      const data = table.row({ selected: true }).data();
      swal({
        type: 'warning',
        title: `Публикация "${data.title_uk}" будет удалена безвозвратно. Вы уверены?`,
        showCancelButton: true,
        confirmButtonText: 'Удалить',
        cancelButtonText: 'Отмена',
        showLoaderOnConfirm: true,
        preConfirm: () => PublicationsAPI.remove(data.id),
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


  const createAndEdit = (table) => {
    $('.js-edit').on('click', () => {
      const data = table.row({ selected: true }).data();
      PublicationsAPI.edit(data.id);
    });
    $('.js-create').on('click', () => {
      PublicationsAPI.create();
    });
  };

  return {
    init(table) {
      remove(table);
      createAndEdit(table);
    }
  };
})();

// Initialize when page loads
$(() => {
  // Init page helpers (Table Tools helper)
  Codebase.helpers(['table-tools', 'core-appear']);
  // Init page
  const table = dataTables.init();
  actions.init(table);
});
