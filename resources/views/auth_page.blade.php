<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500&display=swap"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800&display=swap"
        rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="/css/style.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>


    <title></title>
</head>

<body class="d-flex justify-content-center align-items-center" style="height: 900px; background: #C7B99FFF;">
    <div class="d-flex align-items-center border rounded-5 col-3 py-5 px-4"
        style="height: 800px; background: #202630FF; border:none !important; box-shadow:  0 0 20px rgba(0,0,0,0.5);">
        <div class="col-12">
            <div class="d-flex" style="color: #F5AB00FF; font-size: 40px; ">
                <span class="auth_title fw-bold" style="">
                    Welcome<br> Back
                </span>
                <span class="register_title fw-bold" style="display: none">
                    Create an<br> Account
                </span>
            </div>
            <div class="d-flex col-6 {{-- justify-content-between --}} mt-2">
                <span id="under_auth_title_text" style="font-size: 20px; color: #fff; opacity: 0.8">Sign to
                    continue</span>
                {{-- <span class="auth_title fw-bold" style="font-size: 20px;">Авторизация</span>
                <span class="register_title fw-bold" style="font-size: 20px;">Регистрация</span> --}}
            </div>
            <form action="{{ route('auth') }}" method="post" class="d-flex flex-wrap mt-5 rounded-4 p-4" id="auth_form"
                style="background: #19202AFF;">
                @csrf
                <input type="text" class="form-control-auth-reg-pages col-12" id="login" name="email    "
                    placeholder="name@example.com">
                <input type="password" class="form-control-auth-reg-pages col-12 mt-4" id="password" name="password"
                    placeholder="Password">

                <button type="submit" class="fw-bold rounded-3 col-12 mt-4 py-2"
                    style="color: #202630FF; font-size: 18px; background: #F5AB00FF; border: none; ">SIGN IN</button>
                <div class="col-12 d-flex justify-content-center mt-4" style="color: #fff; opacity: 0.8"><span>Doesn`t
                        have an account?<button type="button" class="fw-bold" id="regist_switcher"
                            style="background: none;
                        color: #fff;
                        border: none;">
                            Sign up</button></span></div>
            </form>
            <form action="{{ route('registrate') }}" method="post" class="d-flex flex-wrap mt-5 rounded-4 p-4"
                id="regist_form" style="background: #19202AFF; display:none !important;">
                @csrf
                <input type="text" class="form-control-auth-reg-pages col-12" id="login" name="login"
                    placeholder="name@example.com">
                <input type="password" class="form-control-auth-reg-pages col-12 mt-4" id="password" name="password"
                    placeholder="Password">

                <button type="submit" class="fw-bold rounded-3 col-12 mt-4 py-2"
                    style="color: #202630FF; font-size: 18px; background: #F5AB00FF; border: none; ">CREATE</button>
                <div class="col-12 d-flex justify-content-center mt-4" style="color: #fff; opacity: 0.8"><span>Doesn`t
                        have an account?<button type="button" class="fw-bold" id="auth_switcher"
                            style="background: none;
                        color: #fff;
                        border: none;">
                            Sign up</button></span></div>
            </form>
        </div>
    </div>
    @include('includes.scripts_js_for_auth_page')
</body>

</html>
