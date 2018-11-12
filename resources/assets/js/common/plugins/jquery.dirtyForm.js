import './jquery.serializeJSON';

/* eslint-disable func-names, no-restricted-syntax, prefer-rest-params */
(($) => {
  const arrayContainsArray = (superset, subset) => {
    if (subset.length === 0) {
      return false;
    }
    return subset.every(value => superset.indexOf(value) >= 0);
  };

  const formDiff = (initial, current) => {
    const result = {};
    Object.keys(initial).forEach((key) => {
      if (typeof current[key] !== 'undefined') {
        if (Array.isArray(initial[key])) {
          result[key] = arrayContainsArray(current[key], initial[key]);
        } else {
          result[key] = initial[key] === current[key];
        }
      } else {
        result[key] = false;
      }
    });
    return result;
  };

  const methods = {
    init(options) {
      const settings = $.extend({
        onlyDirty: true,
        serialize: {},
        required: []
      }, options);
      return this.each(function () {
        const formJSON = $(this).serializeJSON(settings.serialize);
        $(this)
          .off('formDirty.update')
          .on('formDirty.update', () => {
            $(this).data('formJSON', $(this).serializeJSON(settings));
          })
          .data({ formJSON, settings });
      });
    },
    data() {
      const settings = $(this).data('settings');
      const currentData = $(this).serializeJSON(settings);

      if (settings.onlyDirty) {
        const previousData = $(this).data('formJSON');
        const diffKeys = formDiff(previousData, currentData);
        const result = {};

        Object.keys(diffKeys).forEach((key) => {
          if (!diffKeys[key] || settings.required.includes(key)) {
            result[key] = currentData[key];
          }
        });
        return result;
      }
      return currentData;
    }
  };

  $.fn.formDirty = function (methodOrOptions) {
    if (methods[methodOrOptions]) {
      return methods[methodOrOptions].apply(this, Array.prototype.slice.call(arguments, 1));
    } if (typeof methodOrOptions === 'object' || !methodOrOptions) {
      // Default to "init"
      return methods.init.apply(this, arguments);
    }
    $.error(`Method ${methodOrOptions} does not exist on jQuery.formDirty`);
    return this;
  };
})(jQuery);
