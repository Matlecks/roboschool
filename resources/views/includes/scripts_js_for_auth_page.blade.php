<script>
    /* Кнопка зарегаться "Sign up" */
    var regist_switcher = document.querySelector('#regist_switcher');
    var auth_form = document.querySelector('#auth_form');
    var regist_form = document.querySelector('#regist_form');
    var under_auth_title_text = document.querySelector('#under_auth_title_text');

    var auth_title = document.querySelector('.auth_title');
    var register_title = document.querySelector('.register_title');
    if (regist_switcher) {
        regist_switcher.addEventListener('click', function() {
            auth_form.style.display = "none";
            auth_form.style.setProperty("display", "none", "important");
            auth_title.style.display = "none";
            under_auth_title_text.style.display = "none";

            regist_form.style.display = "flex";
            register_title.style.display = "block";
        });
    }

    /* Авторизоваться */
    /* Зарегистрироваться */
</script>
