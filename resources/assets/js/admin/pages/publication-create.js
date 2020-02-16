import 'codemirror';
import 'codemirror/mode/xml/xml';
import 'summernote/dist/summernote-bs4';
import 'summernote/lang/summernote-ru-RU';
import 'bootstrap-datepicker';
import 'jquery-validation';
import 'jquery-validation/dist/additional-methods';
import 'jquery.maskedinput/src/jquery.maskedinput';
import Codebase from '../core';
import PublicationsAPI from '../Api/Publications';
import ImageAPI from '../Api/Image';
import swal, { showErrors, showSuccess, validationDefaults } from './shared/validation';

// Validation
const editors = (() => {
  const initEditors = (validator) => {
    $('.js-summernote').each((i, node) => {
      const el = $(node);
      el.summernote({
        fontNames: ['Roboto', 'Roboto Condensed', 'Roboto Slab', 'Times New Roman', 'Arial'],
        fontNamesIgnoreCheck: ['Roboto', 'Roboto Condensed', 'Roboto Slab'],
        lang: 'ru-RU',
        height: 350,
        minHeight: null,
        maxHeight: null,
        callbacks: {
          onChange(contents) {
            // Note that at this point, the value of the `textarea` is not the same as the one
            // you entered into the summernote editor, so you have to set it yourself to make
            // the validation consistent and in sync with the value.
            el.val(el.summernote('isEmpty') ? '' : contents);

            $('.js-create').prop('disabled', el.summernote('isEmpty'));

            // You should re-validate your element after change, because the plugin will have
            // no way to know that the value of your `textarea` has been changed if the change
            // was done programmatically.
            validator.element(el);
          },
          onInit() {
            $('.note-editable').addClass('news-article');
          }
        }
      });
    });
  };

  return {
    init(validator) {
      initEditors(validator);
    }
  };
})();

// Init Actions
const actions = (() => {
  const remove = () => {
    $('.js-remove').on('click', (e) => {
      const id = $(e.currentTarget).data('id');
      swal({
        type: 'warning',
        title: 'Публикация будет удалена безвозвратно. Вы уверены?',
        showCancelButton: true,
        confirmButtonText: 'Удалить',
        cancelButtonText: 'Отмена',
        showLoaderOnConfirm: true,
        preConfirm: () => PublicationsAPI.remove(id),
        allowOutsideClick: () => !swal.isLoading()
      }).then((result) => {
        if (result.value) {
          swal({
            title: 'Удача!',
            type: 'success',
            html: 'Публикация успешно удалена!',
            timer: 2500
          });
          PublicationsAPI.create();
        }
      });
    });
  };

  // Upload image
  const imageUpdate = () => {
    $('.js-update-image').on('click', () => {
      const file = $('#image').get(0).files[0];
      const alt = $('#image_alt').val();
      const form = $('#formApi');
      ImageAPI.store(file)
        .then(({ link }) => {
          form.find('[name=image]').val(link);
          form.find('[name=image_alt]').val(alt);
          $('#modal-image').modal('hide');
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
      remove();
      imagePreview();
      imageUpdate();
    }
  };
})();

// Init validation
const validation = (() => {
  const validationRules = {
    errorPlacement(error, element) {
      // Add the `help-block` class to the error element
      error.addClass('invalid-feedback');
      if (element.hasClass('js-summernote')) {
        error.insertAfter(element.siblings('.note-editor'));
      } else {
        error.insertAfter(element);
      }
    },
    ...validationDefaults,
    ignore: ':hidden:not(.js-summernote),.note-editable.card-block',
    rules: {
      image: { required: true },
      title_uk: { required: true, minlength: 3, maxlength: 255 },
      title_en: { required: true, minlength: 3, maxlength: 255 },
      text_uk: { required: true },
      text_en: { required: true },
    }
  };

  // Init Add Form Validation, for more examples you can check out https://github.com/jzaefferer/$-validation
  const initValidationAdd = (rulesOverride = {}) => {
    const $validator = $('#formApi').validate({
      submitHandler(form) {
        Codebase.blocks('state_loading');
        const id = $('.js-remove').data('id');
        const isEdit = id > 0;
        const isPublicated = Number($('#publication-status').is(':checked'));
        const promise = isEdit ? PublicationsAPI.update(id, form, isPublicated) : PublicationsAPI.store(form, isPublicated);
        promise
          .then((response) => {
            Codebase.blocks('state_normal');
            showSuccess(isEdit);
            if (!isEdit) {
              PublicationsAPI.edit(response.data.id);
            }
          }).catch((response) => {
            Codebase.blocks('state_normal');
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
      return initValidationAdd();
    }
  };
})();

// Initialize when page loads
$(() => {
  // Init page helpers (Table Tools helper)
  Codebase.helpers(['datepicker']);
  // Init page
  const validator = validation.init();
  editors.init(validator);
  actions.init();
});
