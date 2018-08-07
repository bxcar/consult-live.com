function resizeWindow() {
  var window_width = $(window).width();
  var window_height = $(window).height();
}
function scrollWindow() {
  var window_width = $(window).width();
  var window_height = $(window).height();
}
function isValidEmailAddress(emailAddress) {
  var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
  return pattern.test(emailAddress);
}
function equalHeight(selector) {
  var maxHeight = 0;
  $(selector).each(function () {
      if ($(this).height() > maxHeight) {
          maxHeight = $(this).height();
      }
  }).height(maxHeight);
}
$(document).ready(function () {
  $('.cabinet-quick button.btn-auto').on('click', function () {
    yaCounter41197489.reachGoal('avtomatizirovat');
    return true;
  });
  /*$('#form-amocrmSubmit').on('click', function () {
    ga('send', 'event', 'ok', 'main');
    yaCounter41197489.reachGoal('avtomatizirovat_otpavit_soobshenie');
    return true;
  });*/
  /*$('#form-call-footer .agreement button').on('click', function () {
    ga('send', 'event', 'ok', 'footer');
    yaCounter41197489.reachGoal('poluchit_konsultaciu');
    return true;
  });*/
  $('.sliders-main .videobox a, .slider-main2 .video a, .sliders-main-v3 .videobox a').fancybox({
    'transitionIn': 'none',
    'transitionOut': 'none',
    opacity: true,
    padding: 0,
    width: 700,
    height: 394,
    onComplete: function () {
      $('#fancybox-frame').attr('allowfullscreen', 'allowfullscreen')
    }
  });
  $('a.gallerys').fancybox({
    opacity: true,
    padding: 0
  });
  $('#form-call-phone').inputmask('+7(999)999-99-99');
  $('#formamocrmphone').inputmask('+7(999)999-99-99');
  $('#formservicephone').inputmask('+7(999)999-99-99');
  $('.rasdel-title .back a').click(function (e) {
    e.preventDefault();
    parent.history.back();
    return false;
  });
  $('.myModalPopap').on('show.bs.modal', function (e) {
    $('.myModalPopap:visible').modal('hide');
    $('body').css({
      'padding-right': '0px'
    });
    $('body').addClass('modal-open');
    if (e.relatedTarget.dataset.title !== '') {
      $('.myModalPopap .modal-title').html(e.relatedTarget.dataset.title);
      $('.myModalPopap input[name="titlemodal"]').val(e.relatedTarget.dataset.title);
    }
  });
  $('.myModalPopap').on('shown.bs.modal', function (e) {
    $('body').addClass('modal-open');
  });
  $('#formamocrmemail').keyup(function (e) {
    var popoverTimeShow = 3000;
    if (!isValidEmailAddress($('#formamocrmemail').val())) {
      $('#form-amocrm .email').addClass('has-error');
      error = true;
      $('#formamocrmemail').popover({
        content: 'Некорректный E-mail',
        placement: 'top'
      }).popover('show');
      setTimeout(function () {
        $('#formamocrmemail').popover('destroy');
      }, popoverTimeShow);
    }
  });
  $('#formamocrmemail').keypress(function (event) {
    var ew = event.which;
    if (ew == 8) return true;
    if (ew == 32) return true;
    if (ew == 45) return true;
    if (ew == 46) return true;
    if (ew == 64) return true;
    if (ew == 95) return true;
    if (48 <= ew && ew <= 57) return true;
    if (65 <= ew && ew <= 90) return true;
    if (97 <= ew && ew <= 122) return true;
    return false;
  });
  $('#form-call-email').keyup(function (e) {
    var popoverTimeShow = 3000;
    if (!isValidEmailAddress($('#form-call-email').val())) {
      $('#form-call-footer .email').addClass('has-error');
      error = true;
      $('#form-call-email').popover({
        content: 'Некорректный E-mail',
        placement: 'top'
      }).popover('show');
      setTimeout(function () {
        $('#form-call-email').popover('destroy');
      }, popoverTimeShow);
    }
  });
  $('#form-call-email').keypress(function (event) {
    var ew = event.which;
    if (ew == 8) return true;
    if (ew == 32) return true;
    if (ew == 45) return true;
    if (ew == 46) return true;
    if (ew == 64) return true;
    if (ew == 95) return true;
    if (48 <= ew && ew <= 57) return true;
    if (65 <= ew && ew <= 90) return true;
    if (97 <= ew && ew <= 122) return true;
    return false;
  });
  /*$('#form-call-footer').submit(function (e) {
    e.preventDefault();
    var error = false;
    var popoverTimeShow = 3000;
    if ($('#form-call-name').val() == '') {
      $('#form-call-footer .name').addClass('has-error');
      error = true;
      $('#form-call-name').popover({
        content: 'Введите имя',
        placement: 'top'
      }).popover('show');
      setTimeout(function () {
        $('#form-call-name').popover('destroy');
      }, popoverTimeShow);
    }
    if ($('#form-call-phone').val() == '') {
      $('#form-call-footer .phone').addClass('has-error');
      error = true;
      $('#form-call-phone').popover({
        content: 'Введите телефон',
        placement: 'top'
      }).popover('show');
      setTimeout(function () {
        $('#form-call-phone').popover('destroy');
      }, popoverTimeShow);
    }
    if (!Inputmask.isValid($('#form-call-phone').val(), {
      alias: '+7(999)999-99-99'
    })) {
      $('#form-call-footer .phone').addClass('has-error');
      error = true;
      $('#form-call-phone').popover({
        content: 'Неправильный формат телефон',
        placement: 'top'
      }).popover('show');
      setTimeout(function () {
        $('#form-call-phone').popover('destroy');
      }, popoverTimeShow);
    }
     if ($('#form-call-email').val() == '') {
      $('#form-call-footer .email').addClass('has-error');
      error = true;
      $('#form-call-email').popover({
        content: 'Введите E-mail',
        placement: 'top'
      }).popover('show');
      setTimeout(function () {
        $('#form-call-email').popover('destroy');
      }, popoverTimeShow);
    }
    if (!isValidEmailAddress($('#form-call-email').val()) && $('#form-call-email').val() != '') {
      $('#form-call-footer .email').addClass('has-error');
      error = true;
      $('#form-call-email').popover({
        content: 'Некорректный E-mail',
        placement: 'top'
      }).popover('show');
      setTimeout(function () {
        $('#form-call-email').popover('destroy');
      }, popoverTimeShow);
    }
    if (!$('#form-call-agreement').prop('checked')) {
      $('#form-call-footer .agreement').addClass('has-error');
      error = true;
      $('#form-call-agreement').popover({
        content: 'Вы не согласились',
        placement: 'top'
      }).popover('show');
      setTimeout(function () {
        $('#form-call-agreement').popover('destroy');
      }, popoverTimeShow);
    }
    if (error != true) {
      var data = $(this).serialize();
      $('#form-call-email').val('');
      $('#form-call-phone').val('');
      $('#form-call-name').val('');
      $.post('/formfootersend.php?k=2', data, function (dat) {
        var tmpl = [
          '<div class="modal fade myModalPopap" id="myModalFormFooter" tabindex="-1" role="dialog">',
          '<div class="modal-dialog" role="document">',
          '<div class="modal-content">',
          '<div class="modal-header">',
          '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>',
          '<h4 class="modal-title">Обратная связь</h4>',
          '</div>',
          '<div class="modal-body">',
          '<p>&nbsp;</p>',
          '<p class="text-center"><strong>Заявка отправлена</strong></p>',
          '<p>&nbsp;</p>',
          '<p>&nbsp;</p>',
          '</div>',
          '</div>',
          '</div>',
          '</div>'
        ].join('');
        $(tmpl).on('shown.bs.modal', function (e) {
          $(window).trigger('resize');
        }).on('hidden.bs.modal', function (e) {
          $('#myModalFormFooter').remove();
          $('.myModalPopap:visible').remove();
        }).modal();
        yaCounter41197489.reachGoal('poluchit_konsultaciu_uspeshno');
      });
    }
  })*/
  $('#form-amocrm').submit(function (e) {
    e.preventDefault();
    var error = false;
    var popoverTimeShow = 3000;
    if ($('#formamocrmname').val() == '') {
      $('#form-amocrm .name').addClass('has-error');
      error = true;
      $('#formamocrmname').popover({
        content: 'Введите ФИО',
        placement: 'top'
      }).popover('show');
      setTimeout(function () {
        $('#formamocrmname').popover('destroy');
      }, popoverTimeShow);
    }
    /* if ($('#formamocrmemail').val() == '') {
      $('#form-amocrm .email').addClass('has-error');
      error = true;
      $('#formamocrmemail').popover({
        content: 'Введите Email',
        placement: 'top'
      }).popover('show');
      setTimeout(function () {
        $('#formamocrmemail').popover('destroy');
      }, popoverTimeShow);
    } */
    if (!isValidEmailAddress($('#formamocrmemail').val()) && $('#formamocrmemail').val() != '') {
      $('#form-amocrm .email').addClass('has-error');
      error = true;
      $('#formamocrmemail').popover({
        content: 'Некорректный E-mail',
        placement: 'top'
      }).popover('show');
      setTimeout(function () {
        $('#formamocrmemail').popover('destroy');
      }, popoverTimeShow);
    }
    if ($('#formamocrmphone').val() == '') {
      $('#form-amocrm .phone').addClass('has-error');
      error = true;
      $('#formamocrmphone').popover({
        content: 'Введите телефон',
        placement: 'top'
      }).popover('show');
      setTimeout(function () {
        $('#formamocrmphone').popover('destroy');
      }, popoverTimeShow);
    }
    if (!Inputmask.isValid($('#formamocrmphone').val(), {
      alias: '+7(999)999-99-99'
    })) {
      $('#form-amocrm .phone').addClass('has-error');
      error = true;
      $('#formamocrmphone').popover({
        content: 'Неправильный формат телефон',
        placement: 'top'
      }).popover('show');
      setTimeout(function () {
        $('#formamocrmphone').popover('destroy');
      }, popoverTimeShow);
    }
    if (!$('#formamocrmphoneagreement').prop('checked')) {
      $('#form-amocrm .agreement').addClass('has-error');
      error = true;
      $('#formamocrmphoneagreement').popover({
        content: 'Вы не согласились',
        placement: 'top'
      }).popover('show');
      setTimeout(function () {
        $('#formamocrmphoneagreement').popover('destroy');
      }, popoverTimeShow);
    }
    if (error != true) {
      $('#form-amocrmSubmit').html('<i class="fa fa-refresh fa-spin" aria-hidden="true"></i>');
      var data = $(this).serialize();
      $.post($(this).attr('action') + '?k=2', data, function (data) {
        $('#form-amocrmSubmit').html('Отправить');
        var tmpl = [
          '<div class="modal fade myModalPopap" id="myModalFormFooter2" tabindex="-1" role="dialog">',
          '<div class="modal-dialog" role="document">',
          '<div class="modal-content">',
          '<div class="modal-header">',
          '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>',
          '<h4 class="modal-title">Отправка</h4>',
          '</div>',
          '<div class="modal-body">',
          '<p>&nbsp;</p>',
          '<p class="text-center"><strong>Заявка отправлена</strong></p>',
          '<p>&nbsp;</p>',
          '<p>&nbsp;</p>',
          '</div>',
          '</div>',
          '</div>',
          '</div>'
        ].join('');
        $('#myModalAuto').modal('hide');
        $(tmpl).on('shown.bs.modal', function (e) {
          $(window).trigger('resize');
        }).on('hidden.bs.modal', function (e) {
          $('#myModalFormFooter2').remove();
          $('body').css({
            'padding-right': '0px'
          });
        }).modal();
        yaCounter41197489.reachGoal('avtomatizirovat_otpavit_soobshenie_uspeshno');
      }, 'json'
      );
    }
    return false;
  });
  $('#form-services').submit(function (e) {
    e.preventDefault();
    var error = false;
    var popoverTimeShow = 3000;
    if ($('#formservicename').val() == '') {
      $('#form-service .name').addClass('has-error');
      error = true;
      $('#formservicename').popover({
        content: 'Введите ФИО',
        placement: 'top'
      }).popover('show');
      setTimeout(function () {
        $('#formservicename').popover('destroy');
      }, popoverTimeShow);
    }
    /* if ($('#formamocrmemail').val() == '') {
      $('#form-amocrm .email').addClass('has-error');
      error = true;
      $('#formamocrmemail').popover({
        content: 'Введите Email',
        placement: 'top'
      }).popover('show');
      setTimeout(function () {
        $('#formamocrmemail').popover('destroy');
      }, popoverTimeShow);
    } */
    if (!isValidEmailAddress($('#formserviceemail').val()) && $('#formserviceemail').val() != '') {
      $('#form-service .email').addClass('has-error');
      error = true;
      $('#formserviceemail').popover({
        content: 'Некорректный E-mail',
        placement: 'top'
      }).popover('show');
      setTimeout(function () {
        $('#formserviceemail').popover('destroy');
      }, popoverTimeShow);
    }
    if ($('#formservicephone').val() == '') {
      $('#form-service .phone').addClass('has-error');
      error = true;
      $('#formservicephone').popover({
        content: 'Введите телефон',
        placement: 'top'
      }).popover('show');
      setTimeout(function () {
        $('#formservicephone').popover('destroy');
      }, popoverTimeShow);
    }
    if (!Inputmask.isValid($('#formservicephone').val(), {
      alias: '+7(999)999-99-99'
    })) {
      $('#form-service .phone').addClass('has-error');
      error = true;
      $('#formservicephone').popover({
        content: 'Неправильный формат телефон',
        placement: 'top'
      }).popover('show');
      setTimeout(function () {
        $('#formservicephone').popover('destroy');
      }, popoverTimeShow);
    }
    if (!$('#formserviceagreement').prop('checked')) {
      $('#form-service .agreement').addClass('has-error');
      error = true;
      $('#formserviceagreement').popover({
        content: 'Вы не согласились',
        placement: 'top'
      }).popover('show');
      setTimeout(function () {
        $('#formserviceagreement').popover('destroy');
      }, popoverTimeShow);
    }
    if (error != true) {
      $('#form-serviceSubmit').html('<i class="fa fa-refresh fa-spin" aria-hidden="true"></i>');
      var data = $(this).serialize();
      $.post($(this).attr('action') + '?k=2', data, function (data) {
        $('#form-serviceSubmit').html('Отправить');
        var tmpl = [
          '<div class="modal fade myModalPopap" id="myModalFormFooter2" tabindex="-1" role="dialog">',
          '<div class="modal-dialog" role="document">',
          '<div class="modal-content">',
          '<div class="modal-header">',
          '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>',
          '<h4 class="modal-title">Отправка</h4>',
          '</div>',
          '<div class="modal-body">',
          '<p>&nbsp;</p>',
          '<p class="text-center"><strong>Заявка отправлена</strong></p>',
          '<p>&nbsp;</p>',
          '<p>&nbsp;</p>',
          '</div>',
          '</div>',
          '</div>',
          '</div>'
        ].join('');
        $('#myModalAuto').modal('hide');
        $(tmpl).on('shown.bs.modal', function (e) {
          $(window).trigger('resize');
        }).on('hidden.bs.modal', function (e) {
          $('#myModalFormFooter2').remove();
          $('body').css({
            'padding-right': '0px'
          });
        }).modal();
      }, 'json'
      );
    }
    return false;
  });
  $('#tabCall').click(function () {
    $(this).addClass('tab-call-active');
    $('#divCall').show();
    $('#tabMessage').removeClass('tab-message-active');
    $('#divMessage').hide();
    return false;
  });
  $('#tabMessage').click(function () {
    $(this).addClass('tab-message-active');
    $('#divMessage').show();
    $('#tabCall').removeClass('tab-call-active');
    $('#divCall').hide();
    return false;
  });
  $('#scb_phone_input').inputmask('+7-(999)-999-99-99');
  $('#scb_call_now').change(function () {
    $('#scb_udobnoe_block').hide();
  });
  $('#scb_call_time').change(function () {
    $('#scb_udobnoe_block').show();
  });
  var date = new Date();
  var currentTime = ('0' + date.getHours()).slice( - 2) + ':' + ('0' + date.getMinutes()).slice( - 2);
  var weekDay = date.getDay();
  $('#phoneselectday').change(function () {
    var val = $(this).val();
    if (val == 'today') {
      $('#phoneselecttime option').each(function () {
        if ($(this).val() <= currentTime) {
          $(this).hide().addClass('hide').removeClass('show');
        }
      });
      $('#phoneselecttime').val($('#phoneselecttime option.show:first').val()).change();
    } else {
      $('#phoneselecttime option').each(function () {
        $(this).show().removeClass('hide').addClass('show');
      });
      $('#phoneselecttime').val($('#phoneselecttime option.show:first').val()).change();
    }
  });
  if ('17:30' <= currentTime) {
    $('#phoneselectday option[value="today"]').hide();
    if ($('#phoneselectday option[value="tomorrow"]').length > 0) {
      $('#phoneselectday').val('tomorrow');
    }
  }
  $('#phoneselectday').change();
  $('#buttoncallme').click(function (e) {
    e.preventDefault();
    yaCounter41197489.reachGoal('avtomatizirovat_pozvonit_mne');
    var error = false;
    var popoverTimeShow = 3000;
    if (!Inputmask.isValid($('#scb_phone_input').val(), {
      alias: '+7-(999)-999-99-99'
    })) {
      $('#formcall .phone').addClass('has-error');
      error = true;
      $('#scb_phone_input').popover({
        content: 'Укажите номер телефона',
        placement: 'top'
      }).popover('show');
      setTimeout(function () {
        $('#scb_phone_input').popover('destroy');
      }, popoverTimeShow);
    }
    if (!$('#scb_agreement').prop('checked')) {
      $('#formcall .agreement').addClass('has-error');
      error = true;
      $('#scb_agreement').popover({
        content: 'Вы не согласились',
        placement: 'top'
      }).popover('show');
      setTimeout(function () {
        $('#scb_agreement').popover('destroy');
      }, popoverTimeShow);
    }
    if (error != true) {
      $.post('/formcallme.php?k=2', {
        'gender': $('input[name="gender"]:checked').val(),
        'phone': $('#scb_phone_input').val(),
        'phoneselectday': $('#phoneselectday').val(),
        'phoneselecttime': $('#phoneselecttime').val()
      }, function (dat) {
        $('#myModalAuto').modal('hide');
        var tmpl = [
          '<div class="modal fade myModalPopap" id="myModalFormFooter" tabindex="-1" role="dialog">',
          '<div class="modal-dialog" role="document">',
          '<div class="modal-content">',
          '<div class="modal-header">',
          '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>',
          '<h4 class="modal-title">Заказать звонок</h4>',
          '</div>',
          '<div class="modal-body">',
          '<p>&nbsp;</p>',
          '<p class="text-center"><strong>Спасибо, нам важно Ваше мнение!</strong></p>',
          '<p class="text-center"><strong>Наши операторы обязательно перезвонят Вам!</strong></p>',
          '<p>&nbsp;</p>',
          '<p>&nbsp;</p>',
          '</div>',
          '</div>',
          '</div>',
          '</div>'
        ].join('');
        $(tmpl).on('shown.bs.modal', function (e) {
          $(window).trigger('resize');
        }).on('hidden.bs.modal', function (e) {
          $('#myModalFormFooter').remove();
          $('.myModalPopap:visible').remove();
        }).modal();
        yaCounter41197489.reachGoal('avtomatizirovat_pozvonit_mne_uspeshno');
      });
    }
  });
  resizeWindow();
  $(window).resize(function () {
    resizeWindow();
  });
  scrollWindow();
  $(window).scroll(function () {
    scrollWindow();
  });
  
  if($(window).innerWidth() >= 992) {
    equalHeight('.price-content .items .new-item .text');
    equalHeight('.price-content .items .hit-item .text');
  }
  equalHeight('.price-content .items .simple-item .text');
});
