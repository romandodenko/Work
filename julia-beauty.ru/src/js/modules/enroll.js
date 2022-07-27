"use strict"

export function enroll() {
  $(function () {
    $('#datetimepicker1').datetimepicker({
      format: 'L'
    });
    $('#datetimepicker2').datetimepicker({
      format: 'LT'
  });
  });
}