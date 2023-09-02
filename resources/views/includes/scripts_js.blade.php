<script>
    /* Скрипт меню админа */
    //получает все include таблицы со второй части меню и срывает их
    var blocks = document.querySelectorAll('.block');
    blocks.forEach(block => {
        block.style.display = 'none';
    })
    //получает все аккордион итемы и проверяет клик.
    //Если клик произошел, то получает все кнопки.
    //И проверяет: если id одной из таблиц совпадает с id кнопки, то он открывает таблицу, если не равно, то закрывает таблицу
    var accordion_items = document.querySelectorAll('.accordion-item');

    accordion_items.forEach(accordion_element => {
        accordion_element.addEventListener('click', function() {
            var second_menu_btns = document.querySelectorAll('.second_menu_btn');

            second_menu_btns.forEach(second_menu_element => {
                second_menu_element.addEventListener('click', function() {

                    blocks.forEach(block => {
                        if (block.id.replace('block_', '') ===
                            second_menu_element.id) {
                            block.style.display = 'block';
                        }
                        if (block.id.replace('block_', '') !=
                            second_menu_element.id) {
                            block.style.display = 'none';
                        }
                    })
                });
            });
        });
    });

    /* Скрипт круда */
    /* круды для таблицы пользователей */
    var block_personal = document.querySelector('#block_personal');

    var allLinks_block_personal = block_personal.querySelectorAll("a");
    var personal_edit_btns = [];

    allLinks_block_personal.forEach(function(link_block_personal) {
        if (link_block_personal.textContent.includes("Редактировать")) {
            personal_edit_btns.push(link_block_personal);
        }
    });

    /* кнопки редактировать пользователя*/
    personal_edit_btns.forEach(personal_edit_btn => {
        personal_edit_btn.addEventListener('click', function() {

            var element_id = personal_edit_btn.id;
            var split_id = element_id.split("_");
            var prefix = split_id[0];
            var id = split_id[1];

            var user_crud_modal = document.querySelector('#user_crud_modal');

            /* получает ajax ом данные с бд и ставит в поля */
            $.ajax({
                url: '{{ route('ajax_get_user') }}',
                method: 'GET',
                data: {
                    item_id: id
                },
                dataType: 'json',
                success: function(result) {
                    if (result.success) {

                        var user_id = user_crud_modal.querySelector('#user_id');
                        var input_id = user_crud_modal.querySelector(
                            'input[name="id"]');
                        var input_name = user_crud_modal.querySelector(
                            'input[name="name"]');
                        var input_surname = user_crud_modal.querySelector(
                            'input[name="surname"]');
                        var input_email = user_crud_modal.querySelector(
                            'input[name="email"]');

                        user_id.textContent = result.user['id'];
                        input_id.value = result.user['id'];
                        input_name.value = result.user['name'];
                        input_surname.value = result.user['surname'];
                        input_email.value = result.user['email'];
                    }
                },
                error: function(result) {
                    alert('AJAX request failed!');
                }
            });
            /* собирает данные с полей и отправляет на сохранение */
            var personal_save_btn = user_crud_modal.querySelector('#save_btn');

            personal_save_btn.addEventListener('click', function() {

                var formData = $('#user_crud_modal').serialize();

                $.ajax({
                    url: '{{ route('ajax_update_user') }}',
                    method: 'POST',
                    data: formData,
                    dataType: 'json',
                    success: function(result) {
                        if (result.success) {

                        }
                    }
                });
            });
        });
    })
    /* Переключатель активные/удаленные пользователи */

    var user_switcher = block_personal.querySelector('#user_switch');

    user_switcher.addEventListener('click', function() {
        /* Переключает на показ удаленных пользователей */
        if (user_switcher.value == 0) {
            block_personal.querySelector('.form-check-label').textContent = 'Активные элементы';
            user_switcher.value = 1;

            $.ajax({
                url: '{{ route('user_show_active') }}',
                method: 'GET',
                data: user_switcher.value,
                dataType: 'json',
                success: function(result) {
                    if (result.success) {
                        $('#table_personal').empty();
                        $('#table_personal').html(result.html);
                    }
                }
            });

        } else {
            /* Переключает на показ активных пользователей */
            if (user_switcher.value == 1) {
                block_personal.querySelector('.form-check-label').textContent = 'Удаленные элементы';
                user_switcher.value = 0;

                $.ajax({
                    url: '{{ route('user_show_deleted') }}',
                    method: 'GET',
                    data: user_switcher.value,
                    dataType: 'json',
                    success: function(result) {
                        if (result.success) {
                            $('#table_personal').empty();
                            $('#table_personal').html(result.html);

                            /* изменяет кнопку Удалить на восстановить */

                            var personal_restore_btns = block_personal.querySelectorAll('form');

                            personal_restore_btns.forEach(personal_restore_btn => {

                                personal_restore_btn.querySelector('span').textContent =
                                    'Восстановить';

                                personal_restore_btn.addEventListener('click',
                                    function() {

                                        var element_id = personal_restore_btn.id;
                                        var split_id = element_id.split("_");
                                        var prefix = split_id[0];
                                        var id = split_id[2];

                                        var input_token_value = personal_restore_btn
                                            .querySelector(
                                                'input[name="_token"]').value;

                                        /* Кнопка восстановить */

                                        $.ajax({
                                            url: '{{ route('user_restore') }}',
                                            method: 'POST',
                                            data: {
                                                _token: input_token_value,
                                                item_id: id
                                            },
                                            dataType: 'json',
                                            success: function(result) {

                                                if (result.success) {
                                                    var current_tr =
                                                        personal_restore_btn
                                                        .parentNode
                                                        .parentNode
                                                        .parentNode
                                                        .parentNode
                                                        .parentNode;
                                                    current_tr.parentNode
                                                        .removeChild(
                                                            current_tr);

                                                }
                                            }
                                        });
                                    });
                            });
                        }
                    }
                });
            }
        }
    })

    /* Кнопки удалить пользователя */

    var personal_delete_btns = block_personal.querySelectorAll('form');

    personal_delete_btns.forEach(personal_delete_btn => {

        personal_delete_btn.addEventListener('click', function() {

            var element_id = personal_delete_btn.id;
            var split_id = element_id.split("_");
            var prefix = split_id[0];
            var id = split_id[2];

            var user_crud_modal = document.querySelector('#user_crud_modal');

            var input_token_value = personal_delete_btn.querySelector(
                'input[name="_token"]').value;

            $.ajax({
                url: '{{ route('user_delete') }}',
                method: 'DELETE',
                data: {
                    _token: input_token_value,
                    item_id: id
                },
                dataType: 'json',
                success: function(result) {
                    if (result.success) {

                        var current_tr = personal_delete_btn.parentNode.parentNode
                            .parentNode
                            .parentNode.parentNode;

                        current_tr.parentNode.removeChild(current_tr);
                    }
                },
                error: function(result) {
                    alert('AJAX request failed!');
                }
            });

        })
    })

    /* круды для таблицы курсов */
    var block_courses = document.querySelector('#block_courses');

    var courses_edit_btns = block_courses.querySelectorAll('a');

    courses_edit_btns.forEach(courses_edit_btn => {

        courses_edit_btn.addEventListener('click', function() {

            var element_id = courses_edit_btn.id;
            var split_id = element_id.split("_");
            var prefix = split_id[0];
            var id = split_id[1];

            var service_crud_modal = document.querySelector('#service_crud_modal');
            /* получает ajax ом данные с бд и ставит в поля */
            $.ajax({
                url: '{{ route('ajax_get_service') }}',
                method: 'GET',
                data: {
                    item_id: id
                },
                dataType: 'json',
                success: function(result) {
                    if (result.success) {

                        var service_id = service_crud_modal.querySelector(
                            '#service_id');
                        var input_id = service_crud_modal.querySelector(
                            'input[name="id"]');
                        var input_title = service_crud_modal.querySelector(
                            'input[name="title"]');
                        var input_cost = service_crud_modal.querySelector(
                            'input[name="cost"]');
                        var input_anounce_text = service_crud_modal
                            .querySelector(
                                'input[name="anounce_text"]');

                        service_id.textContent = result.service['id'];
                        input_id.value = result.service['id'];
                        input_title.value = result.service['title'];
                        input_cost.value = result.service['cost'];
                        input_anounce_text.value = result.service[
                            'anounce_text'];
                    }
                },
                error: function(result) {
                    alert('AJAX request failed!');
                }
            });
            /* собирает данные с полей и отправляет на сохранение */
            var service_save_btn = service_crud_modal.querySelector('#save_btn');

            service_save_btn.addEventListener('click', function() {

                var formData = $('#service_crud_modal').serialize();

                $.ajax({
                    url: '{{ route('ajax_update_service') }}',
                    method: 'POST',
                    data: formData,
                    dataType: 'json',
                    success: function(result) {
                        if (result.success) {

                        }
                    }
                });
            });
        });
    });

    /* Переключатель активные/удаленные курсы */

    var courses_switch = block_courses.querySelector('#courses_switch');

    courses_switch.addEventListener('click', function() {
        /* Переключает на показ удаленных пользователей */
        if (courses_switch.value == 0) {
            block_courses.querySelector('.form-check-label').textContent = 'Активные элементы';
            courses_switch.value = 1;

            $.ajax({
                url: '{{ route('service_show_active') }}',
                method: 'GET',
                data: courses_switch.value,
                dataType: 'json',
                success: function(result) {
                    if (result.success) {
                        $('#table_courses').empty();
                        $('#table_courses').html(result.html);
                    }
                }
            });

        } else {
            /* Переключает на показ активных курсов */
            if (courses_switch.value == 1) {
                block_courses.querySelector('.form-check-label').textContent = 'Удаленные элементы';
                courses_switch.value = 0;

                $.ajax({
                    url: '{{ route('service_show_deleted') }}',
                    method: 'GET',
                    data: courses_switch.value,
                    dataType: 'json',
                    success: function(result) {
                        if (result.success) {
                            $('#table_courses').empty();
                            $('#table_courses').html(result.html);

                            /* изменяет кнопку Удалить на восстановить */

                            var course_delete_btns = block_courses.querySelectorAll('form');

                            course_delete_btns.forEach(course_delete_btn => {

                                course_delete_btn.querySelector('span').textContent =
                                    'Восстановить';

                                course_delete_btn.addEventListener('click',
                                    function() {

                                        var element_id = course_delete_btn.id;
                                        var split_id = element_id.split("_");
                                        var prefix = split_id[0];
                                        var id = split_id[2];

                                        var input_token_value = course_delete_btn
                                            .querySelector(
                                                'input[name="_token"]').value;

                                        /* Кнопка восстановить */

                                        $.ajax({
                                            url: '{{ route('service_restore') }}',
                                            method: 'POST',
                                            data: {
                                                _token: input_token_value,
                                                item_id: id
                                            },
                                            dataType: 'json',
                                            success: function(result) {

                                                if (result.success) {
                                                    var current_tr =
                                                        course_delete_btn
                                                        .parentNode
                                                        .parentNode
                                                        .parentNode
                                                        .parentNode
                                                        .parentNode;
                                                    current_tr.parentNode
                                                        .removeChild(
                                                            current_tr);

                                                }
                                            }
                                        });
                                    });
                            });
                        }
                    }
                });
            }
        }
    })

    /* Кнопки удалить курс */

    var course_delete_btns = block_courses.querySelectorAll('form');

    course_delete_btns.forEach(course_delete_btn => {

        course_delete_btn.addEventListener('click', function() {

            var element_id = course_delete_btn.id;
            var split_id = element_id.split("_");
            var prefix = split_id[0];
            var id = split_id[2];

            /* var user_crud_modal = document.querySelector('#user_crud_modal'); */

            var input_token_value = course_delete_btn.querySelector(
                'input[name="_token"]').value;

            $.ajax({
                url: '{{ route('service_delete') }}',
                method: 'DELETE',
                data: {
                    _token: input_token_value,
                    item_id: id
                },
                dataType: 'json',
                success: function(result) {
                    if (result.success) {

                        var current_tr = course_delete_btn
                            .parentNode.parentNode
                            .parentNode
                            .parentNode.parentNode;

                        current_tr.parentNode.removeChild(
                            current_tr);
                    }
                },
                error: function(result) {
                    alert('AJAX request failed!');
                }
            });

        })
    })

    /* Автоматическая высота textarea в зависимости от количества текста */

    var textarea = document.querySelector('#block_seorobots textarea');

    textarea.addEventListener('input', () => {
        textarea.style.height = 'auto';
        textarea.style.height = textarea.scrollHeight + 'px';
    });

    /* Кнопка сохранить  */

    var update_robots_btn = document.querySelector('#block_seorobots button');
    var textarea = document.querySelector('#block_seorobots textarea');

    update_robots_btn.addEventListener('click', function() {
        event.preventDefault();
        var input_token_value = document.querySelector('#block_seorobots [name="_token"]');
        var textarea_content = textarea.value;

        $.ajax({
            url: '{{ route('update_robots') }}',
            method: 'post',
            data: {
                _token: input_token_value.value,
                robots_content: textarea_content
            },
            dataType: 'json',
            success: function(result) {
                if (result.success) {
                    // Success message
                }
            },
            error: function() {
                alert('AJAX request failed!');
            }
        });
    });

    /* Сгенерировать новый сайтмап */
    var generate_site_map_btn = document.querySelector('#generate_site_map_btn');
    var input_token_value = document.querySelector('#block_sitemap [name="_token"]');

    generate_site_map_btn.addEventListener('click', function() {
        event.preventDefault();
        $.ajax({
            url: '{{ route('generate-sitemap') }}',
            method: 'get',
            data: {
                _token: input_token_value.value
            },
            dataType: 'json',
            success: function(result) {
                if (result.success) {}
            },
            error: function() {
                alert('AJAX request failed!');
            }
        });
    })

    /* Отправить письмо из админки */
    var admin_sentmessage_btn = document.querySelector('#admin_sent_mess');
    var admin_sentmessage_form = document.querySelector('#admin_sentmessage');
    var input_token_value = document.querySelector('#admin_sentmessage [name="_token"]');
    var to = document.querySelector('#admin_sentmessage [name="to"]');
    var message = document.querySelector('#admin_sentmessage [name="message"]');

    admin_sentmessage_btn.addEventListener('click', function(event) {
        event.preventDefault();
        alert(status.value);
        $.ajax({
            url: '{{ route('send_mail') }}',
            method: 'post',
            data: {
                _token: input_token_value.value,
                email: to.value,
                message: message.value,
                status: 'sent'
            },
            dataType: 'json',
            success: function(result) {
                if (result.success) {}
            },
            error: function() {
                alert('AJAX request failed!');
            }
        });
    });

    var get_incoming_mess = document.querySelector('#get_incoming_mess');
    var get_sent_mess = document.querySelector('#get_sent_mess');
    var get_selected_mess = document.querySelector('#get_selected_mess');
    var get_deleted_mess = document.querySelector('#get_deleted_mess');

    /* Получить входящие сообщения */
    get_incoming_mess.addEventListener('click', function(event) {
        event.preventDefault();
        $.ajax({
            url: '{{ route('ajax_filter_get_incoming_letters_mess') }}',
            method: 'get',
            data: {},
            dataType: 'json',
            success: function(result) {
                if (result.success) {
                    $('#table_messages').empty();
                    $('#table_messages').html(result.html);
                }
            },
            error: function() {
                alert('AJAX request failed!');
            }
        });
    })

    /* Получить отправленные письма */
    get_sent_mess.addEventListener('click', function(event) {
        event.preventDefault();
        $.ajax({
            url: '{{ route('ajax_filter_get_sent_letters_mess') }}',
            method: 'get',
            data: {},
            dataType: 'json',
            success: function(result) {
                if (result.success) {
                    $('#table_messages').empty();
                    $('#table_messages').html(result.html);
                }
            },
            error: function() {
                alert('AJAX request failed!');
            }
        });
    })

    /* Получить избранные письма */
    get_selected_mess.addEventListener('click', function(event) {
        event.preventDefault();
        $.ajax({
            url: '{{ route('ajax_filter_get_selected_letters_mess') }}',
            method: 'get',
            data: {},
            dataType: 'json',
            success: function(result) {
                if (result.success) {
                    $('#table_messages').empty();
                    $('#table_messages').html(result.html);
                }
            },
            error: function() {
                alert('AJAX request failed!');
            }
        });
    })

    /* Получить удаленные письма */
    get_deleted_mess.addEventListener('click', function(event) {
        event.preventDefault();
        $.ajax({
            url: '{{ route('ajax_filter_get_deleted_letters_mess') }}',
            method: 'get',
            data: {},
            dataType: 'json',
            success: function(result) {
                if (result.success) {
                    $('#table_messages').empty();
                    $('#table_messages').html(result.html);
                }
            },
            error: function() {
                alert('AJAX request failed!');
            }
        });
    })

    /* Визуальные настройки */

    var block_visual_settings = document.querySelector('#block_visual-settings');

    var color_settings_part = block_visual_settings.querySelector('#color-settings-part');
    var theme_setting_part = block_visual_settings.querySelector('#theme-setting-part');
    var width_setting_part = block_visual_settings.querySelector('#width-setting-part');
    var font_title_setting_part = block_visual_settings.querySelector('#font-title-setting-part');
    var font_text_setting_part = block_visual_settings.querySelector('#font-text-setting-part');
    var input_token_value = document.querySelector('.content_visual-settings [name="_token"]');

    /* Меняет цвет сайта */
    var color_options = color_settings_part.querySelectorAll('.color-btn');

    color_options.forEach(color_option => {
        color_option.addEventListener('click', function() {

            var classes = color_option.classList;
            var bgClass = "";

            classes.forEach(className => {
                if (className.includes("bg-color")) {
                    bgClass = className;
                }
            });

            var bgValue = bgClass.replace("bg-", "");

            var text_color = "text-" + bgValue;

            var input_base_color = document.querySelector('#base_color');
            input_base_color.value = bgValue;

            $.ajax({
                url: '{{ route('upload_settings') }}',
                method: 'post',
                data: {
                    _token: input_token_value.value,
                    syte_color: bgClass,
                    syte_color_text: text_color
                },
                dataType: 'json',
                success: function(result) {
                    if (result.success) {
                        location.reload();
                    }
                },
                error: function() {
                    alert('AJAX request failed!');
                }
            });
        });
    });

    /* Меняет тему сайта */
    var theme_btns = theme_setting_part.querySelectorAll('.theme-setting-btn');

    theme_btns.forEach(theme_btn => {
        theme_btn.addEventListener('click', function() {

            var theme_btn_value = theme_btn.id;
            var input_theme_block = document.querySelector('#theme-setting');
            input_theme_block.value = theme_btn_value;

            $.ajax({
                url: '{{ route('upload_settings') }}',
                method: 'post',
                data: {
                    _token: input_token_value.value,
                    theme: theme_btn_value,
                },
                dataType: 'json',
                success: function(result) {
                    if (result.success) {
                        location.reload();
                    }
                },
                error: function() {
                    alert('AJAX request failed!');
                }
            });
        });
    });

    /* Меняет ширину сайта */
    var width_btns = width_setting_part.querySelectorAll('.theme-setting-btn');

    width_btns.forEach(width_btn => {
        width_btn.addEventListener('click', function() {

            var width_btn_value = width_btn.id;
            var input_width_block = document.querySelector('#width-setting');
            input_width_block.value = width_btn_value;

            $.ajax({
                url: '{{ route('upload_settings') }}',
                method: 'post',
                data: {
                    _token: input_token_value.value,
                    syte_width_option: width_btn_value,
                },
                dataType: 'json',
                success: function(result) {
                    if (result.success) {
                        location.reload();
                    }
                },
                error: function() {
                    alert('AJAX request failed!');
                }
            });
        });
    });

    /* Меняет шрифты и размеры шрифтов заголовков сайта */
    var font_title_btns = font_title_setting_part.querySelectorAll('.theme-setting-btn');

    font_title_btns.forEach(font_title_btn => {
        font_title_btn.addEventListener('click', function() {

            var font_title_btn_value = font_title_btn.id;
            var input_font_title_setting_block = document.querySelector('#font-title-setting');
            input_font_title_setting_block.value = font_title_btn_value;

            $.ajax({
                url: '{{ route('upload_settings') }}',
                method: 'post',
                data: {
                    _token: input_token_value.value,
                    font_option_titles: font_title_btn_value,
                },
                dataType: 'json',
                success: function(result) {
                    if (result.success) {
                        location.reload();
                    }
                },
                error: function() {
                    alert('AJAX request failed!');
                }
            });
        });
    });

    /* Меняет шрифты и размеры шрифтов контента сайта */
    var font_text_btns = font_text_setting_part.querySelectorAll('.theme-setting-btn');

    font_text_btns.forEach(font_text_btn => {
        font_text_btn.addEventListener('click', function() {

            var font_text_btn_value = font_text_btn.id;
            var input_font_text_setting_block = document.querySelector('#font-title-setting');
            input_font_text_setting_block.value = font_text_btn_value;

            $.ajax({
                url: '{{ route('upload_settings') }}',
                method: 'post',
                data: {
                    _token: input_token_value.value,
                    font_option_content: font_text_btn_value,
                },
                dataType: 'json',
                success: function(result) {
                    if (result.success) {
                        location.reload();
                    }
                },
                error: function() {
                    alert('AJAX request failed!');
                }
            });
        });
    });

    /* Переключатель вкладок в модалках преподавателей */

    var elements = document.querySelectorAll(".more");

    elements.forEach(element => {
        element.addEventListener("click", () => {
            var target = element.getAttribute("data-bs-target");
            var cleanedTarget = target.replace("#", "");

            var targetElement = document.getElementById(cleanedTarget);

            var education_btn = targetElement.querySelector("#education_btn");
            var experience_btn = targetElement.querySelector("#experience_btn");
            var awards_btn = targetElement.querySelector("#awards_btn");

            var education_content = targetElement.querySelector("#education_content");
            var experience_content = targetElement.querySelector("#experience_content");
            var awards_content = targetElement.querySelector("#awards_content");

            education_btn.addEventListener('click', function() {

                education_btn.classList.add("active");
                experience_btn.classList.remove("active");
                awards_btn.classList.remove("active");

                education_content.style.display = "block";
                experience_content.style.display = "none";
                awards_content.style.display = "none";
            })

            experience_btn.addEventListener('click', function() {

                education_btn.classList.remove("active");
                experience_btn.classList.add("active");
                awards_btn.classList.remove("active");

                education_content.style.display = "none";
                experience_content.style.display = "block";
                awards_content.style.display = "none";
            })

            awards_btn.addEventListener('click', function() {

                education_btn.classList.remove("active");
                experience_btn.classList.remove("active");
                awards_btn.classList.add("active");

                education_content.style.display = "none";
                experience_content.style.display = "none";
                awards_content.style.display = "block";
            })
        });
    });
</script>
