<script>
    // this is the id of the form
    jQuery("#formcall-form").submit(function (e) {

        jQuery("#buttoncallme-1").attr("value", "Идет отправка...");
        jQuery("#buttoncallme-1").css(
            {
                "background-image": "url(<?= get_template_directory_uri()?>/img/loader-form.gif)",
                "background-size": "15%",
                "background-repeat": "no-repeat",
                "background-position-y": "50%",
                "background-position-x": "50%"
            }
        );
        var url = "<?= get_template_directory_uri()?>/sendemail.php"; // the script where you handle the form input.

        jQuery.ajax({
            type: "POST",
            url: url,
            data: jQuery("#formcall-form").serialize(), // serializes the form's elements.
            success: function (data) {
                if (data == 1) {
                    jQuery("#buttoncallme-1").attr("value", "Успешно отправлено");
                    jQuery("#buttoncallme-1").css({"background-image": "none"});

                    jQuery('#static-form')[0].reset();

                    setTimeout(func, 10000);

                    function func() {
                        jQuery("#buttoncallme-1").attr("value", "Отправить");
                        jQuery("#buttoncallme-1").css({"background-image": "none"});
                    }
                }

                else {
                    jQuery("#buttoncallme-1").attr("value", "Произошла ошибка");
                    jQuery("#buttoncallme-1").css({"background-image": "none"});

                    setTimeout(func, 3000);

                    function func() {
                        jQuery("#buttoncallme-1").attr("value", "Отправить");
                        jQuery("#buttoncallme-1").css({"background-image": "none"});
                    }
                }
//                                            alert(data);
            },

            error: function (data) {
                jQuery("#buttoncallme-1").attr("value", "Произошла ошибка");
                jQuery("#buttoncallme-1").css({"background-image": "none"});

                setTimeout(func, 3000);

                function func() {
                    jQuery("#buttoncallme-1").attr("value", "Отправить");
                    jQuery("#buttoncallme-1").css({"background-image": "none"});
                }
            }
        });

        e.preventDefault(); // avoid to execute the actual submit of the form.
    });

    // this is the id of the form
    jQuery("#form-amocrm").submit(function (e) {

        jQuery("#form-amocrmSubmit-1").attr("value", "Идет отправка...");
        jQuery("#form-amocrmSubmit-1").css(
            {
                "background-image": "url(<?= get_template_directory_uri()?>/img/loader-form.gif)",
                "background-size": "15%",
                "background-repeat": "no-repeat",
                "background-position-y": "50%",
                "background-position-x": "50%"
            }
        );
        var url = "<?= get_template_directory_uri()?>/sendemail.php"; // the script where you handle the form input.

        jQuery.ajax({
            type: "POST",
            url: url,
            data: jQuery("#form-amocrm").serialize(), // serializes the form's elements.
            success: function (data) {
                if (data == 1) {
                    jQuery("#form-amocrmSubmit-1").attr("value", "Успешно отправлено");
                    jQuery("#form-amocrmSubmit-1").css({"background-image": "none"});

                    jQuery('#static-form')[0].reset();

                    setTimeout(func, 10000);

                    function func() {
                        jQuery("#form-amocrmSubmit-1").attr("value", "Отправить");
                        jQuery("#form-amocrmSubmit-1").css({"background-image": "none"});
                    }
                }

                else {
                    jQuery("#form-amocrmSubmit-1").attr("value", "Произошла ошибка");
                    jQuery("#form-amocrmSubmit-1").css({"background-image": "none"});

                    setTimeout(func, 3000);

                    function func() {
                        jQuery("#form-amocrmSubmit-1").attr("value", "Отправить");
                        jQuery("#form-amocrmSubmit-1").css({"background-image": "none"});
                    }
                }
//                                            alert(data);
            },

            error: function (data) {
                jQuery("#form-amocrmSubmit-1").attr("value", "Произошла ошибка");
                jQuery("#form-amocrmSubmit-1").css({"background-image": "none"});

                setTimeout(func, 3000);

                function func() {
                    jQuery("#form-amocrmSubmit-1").attr("value", "Отправить");
                    jQuery("#form-amocrmSubmit-1").css({"background-image": "none"});
                }
            }
        });

        e.preventDefault(); // avoid to execute the actual submit of the form.
    });

    // this is the id of the form
    jQuery("#form-call-footer").submit(function (e) {

        jQuery("#footer-form-submit").attr("value", "Идет отправка...");
        jQuery("#footer-form-submit").css(
            {
                "background-image": "url(<?= get_template_directory_uri()?>/img/loader-form.gif)",
                "background-size": "15%",
                "background-repeat": "no-repeat",
                "background-position-y": "50%",
                "background-position-x": "50%"
            }
        );
        var url = "<?= get_template_directory_uri()?>/sendemail.php"; // the script where you handle the form input.

        jQuery.ajax({
            type: "POST",
            url: url,
            data: jQuery("#form-call-footer").serialize(), // serializes the form's elements.
            success: function (data) {
                if (data == 1) {
                    jQuery("#footer-form-submit").attr("value", "Успешно отправлено");
                    jQuery("#footer-form-submit").css({"background-image": "none"});

                    jQuery('#static-form')[0].reset();

                    setTimeout(func, 10000);

                    function func() {
                        jQuery("#footer-form-submit").attr("value", "Отправить");
                        jQuery("#footer-form-submit").css({"background-image": "none"});
                    }
                }

                else {
                    jQuery("#footer-form-submit").attr("value", "Произошла ошибка");
                    jQuery("#footer-form-submit").css({"background-image": "none"});

                    setTimeout(func, 3000);

                    function func() {
                        jQuery("#footer-form-submit").attr("value", "Отправить");
                        jQuery("#footer-form-submit").css({"background-image": "none"});
                    }
                }
//                                            alert(data);
            },

            error: function (data) {
                jQuery("#footer-form-submit").attr("value", "Произошла ошибка");
                jQuery("#footer-form-submit").css({"background-image": "none"});

                setTimeout(func, 3000);

                function func() {
                    jQuery("#footer-form-submit").attr("value", "Отправить");
                    jQuery("#footer-form-submit").css({"background-image": "none"});
                }
            }
        });

        e.preventDefault(); // avoid to execute the actual submit of the form.
    });
</script>