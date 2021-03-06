/**
 * Fills form from jQuery.serializeArray() like data
 * @param form {jQuery}
 * @param data {Array|Object}
 */
export default function (form, data) {
  Object.keys(data).forEach((key) => {
    let field = form.find(`[name=${key}]`);
    if (!field.length) {
      field = form.find(`[name="${key}[]"]`);
    }
    if (field.is(':file')) return;
    if (data[key] && data[key].toString().includes(';')) {
      field.val(data[key].toString().split(';').filter(text => text.length));
    } else {
      field.val(data[key]);
    }
    field.trigger('change');
  });
}
