import 'jquery-validation';
import 'jquery-validation/dist/additional-methods';
import 'jquery.maskedinput/src/jquery.maskedinput';
import Codebase from '../core';
import SliderAPI from '../Api/Slider';
import swal, { showErrors, showSuccess, validationDefaults } from './shared/validation';
import setFormData from './shared/setFormData';

const actions = (() => {
  /**
   * Changes modal state within [data-edit=true/false] button is pressed
   * @param dataObject All data
   */
  const initModalSwitcher = (dataObject) => {
    const config = {
      edit: {
        className: 'bg-gd-leaf',
        text: 'Редактировать',
        buttonText: 'Сохранить'
      },
      create: {
        className: 'bg-gd-emerald',
        text: 'Создать',
        buttonText: 'Добавить'
      },
      modalTarget: '#modalApi',
      formTarget: '#formApi',
    };

    $(config.modalTarget).on('show.bs.modal', (e) => {
      if ($(e.target).is(config.modalTarget)) {
        const isEditMode = $(e.relatedTarget).data('edit') === true;
        if (isEditMode) {
          const id = $(e.relatedTarget).data('id');
          const data = dataObject.find(o => +o.id === +id) || {};
          $('#preview').attr('src', data.image);
          setFormData(jQuery(config.formTarget), data);
        } else {
          $(config.formTarget).get(0).reset();
          $(config.formTarget).find('select').trigger('change');
          $('#preview').attr('src', '');
          setFormData($(config.formTarget), {
            id: null,
          });
        }
        $(e.target).find('.block-header:first')
          .addClass(isEditMode ? config.edit.className : config.create.className)
          .removeClass(isEditMode ? config.create.className : config.edit.className)
          .find('.block-title')
          .text(isEditMode ? config.edit.text : config.create.text);
        $(e.target).find('button[type=submit] span')
          .text(isEditMode ? config.edit.buttonText : config.create.buttonText);
        $(e.target).find('.is-invalid')
          .removeClass('is-invalid');
      }
    });
  };


  const remove = () => {
    $('.js-remove').on('click', (e) => {
      const id = parseInt($(e.currentTarget).attr('data-id'), 10);
      swal({
        type: 'warning',
        title: 'Слайд будет удален безвозвратно. Вы уверены?',
        showCancelButton: true,
        confirmButtonText: 'Удалить',
        cancelButtonText: 'Отмена',
        showLoaderOnConfirm: true,
        preConfirm: () => SliderAPI.remove(id),
        allowOutsideClick: () => !swal.isLoading()
      }).then((result) => {
        if (result.value) {
          swal({
            title: 'Удача!',
            type: 'success',
            html: 'Слайд успешно удален!',
            timer: 2500
          });
        }
      });
    });
  };

  const imagePreview = () => {
    $('.js-preview').on('change', (e) => {
      const input = e.target;
      if (input.files && input.files[0]) {
        const reader = new FileReader();

        reader.onload = (ev) => {
          $('#preview').attr('src', ev.target.result);
        };

        reader.readAsDataURL(input.files[0]);
      }
    });
  };

  return {
    init() {
      initModalSwitcher(window.app_data.sliders);
      imagePreview();
      remove();
    }
  };
})();

// Init validation
const validation = (() => {
  const validationRules = {
    ...validationDefaults,
    rules: {
      title_uk: { required: true },
      title_en: { required: true },
      description_uk: { required: true },
      description_en: { required: true },
      link: { required: true },
      sorting: { required: true, digits: true },
      image: {
        required: () => !+$('#formApi [name="id"]').val().trim() > 0
      },
    }
  };

  // Init Add Form Validation, for more examples you can check out https://github.com/jzaefferer/$-validation
  const initValidationAdd = (rulesOverride = {}) => {
    const $validator = $('#formApi').validate({
      submitHandler(form) {
        Codebase.blocks('#mainBlock', 'state_loading');
        const id = $(form).find('[name=id]').val().trim();
        // if form filled with an id then it's edit mode
        const isEdit = id.length > 0;
        const file = $(form).find('[name=image]').get(0).files[0];
        const promise = isEdit ? SliderAPI.edit(id, form, file) : SliderAPI.store(form, file);
        promise
          .then(() => {
            $('#modalApi').modal('hide');
            SliderAPI.load($('#content'), '#content')
              .then(() => {
                Codebase.blocks('#mainBlock', 'state_normal');
              }).catch(() => {
                window.location.reload();
              });
            showSuccess(isEdit);
          }).catch((response) => {
            Codebase.blocks('#mainBlock', 'state_normal');
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
    init() {
      initValidationAdd();
    }
  };
})();

// Initialize when page loads
$(() => {
  // Init page helpers (Table Tools helper)
  Codebase.helpers(['core-appear']);
  // Init page
  actions.init();
  validation.init();
});
