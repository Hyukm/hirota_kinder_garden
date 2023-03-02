/*--------------------------------
  Datepicker 
--------------------------------*/
jQuery(function () {
    jQuery("[name=text-first],[name=text-second],[name=text-third]").datepicker({
      minDate: 1,
      dateFormat: 'yy年mm月dd日',
      beforeShow: function (input, inst) {
        var calendar = inst.dpDiv;
        setTimeout(function () {
          calendar.position({
            my: 'left top',
            at: 'left bottom',
            of: input
          });
        }, 1);
      }
    });
  });