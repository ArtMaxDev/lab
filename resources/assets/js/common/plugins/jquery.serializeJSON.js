/* eslint-disable func-names, no-restricted-syntax */
(($) => {
  /**
   * Serialize JSON
   * @param options {{checkbox: boolean}}
   * @returns {*}
   */
  $.fn.serializeJSON = function (options = {}) {
    return this.map(function () {
      const object = {};
      const formData = new FormData(this);
      for (const [key, value] of formData.entries()) {
        if (typeof object[key] !== 'undefined') {
          if (Array.isArray(object[key])) {
            object[key].push(value);
          } else {
            object[key] = [object[key], value];
          }
        } else {
          object[key] = value;
        }
      }
      if (options.checkbox) {
        $(this).find('[type=checkbox][data-false]').each((i, obj) => {
          const name = $(obj).attr('name');
          if (!name) {
            $.error('Please provide name tag for all inputs');
            return;
          }
          if (typeof object[name] !== 'undefined') {
            if (Array.isArray(object[name])) {
              object[name].push($(obj).val());
            } else {
              object[name] = [object[name], $(obj).val()];
            }
          } else {
            object[name] = $(obj).val();
          }
        });
      }
      return object;
    }).toArray()[0];
  };
}
)(jQuery);
