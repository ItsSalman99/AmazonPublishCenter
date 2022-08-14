<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - {{ env('APP_NAME') }}</title>
    <!-- ====== bootstrap icons cdn ====== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
        integrity="sha384-xeJqLiuOvjUBq3iGOjvSQSIlwrpqjSHXpduPd6rQpuiM3f5/ijby8pCsnbu5S81n" crossorigin="anonymous">

    <!-- bootstrap 5 -->
    <link rel="stylesheet" href="assets/frontend/css/lib/bootstrap.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Comfortaa&display=swap');

        body {
            background: linear-gradient(90deg, #4b6cb7 0%, #182848 100%);
        }

        .login {
            width: 360px;
            padding: 8% 0 0;
            margin: auto;
            font-family: 'Comfortaa', cursive;
        }

        .form {
            position: relative;
            z-index: 1;
            background: #FFFFFF;
            border-radius: 10px;
            max-width: 360px;
            margin: 0 auto 100px;
            padding: 45px;
            text-align: center;
        }

        .form input {
            outline: 0;
            background: #f2f2f2;
            width: 100%;
            border: 0;
            border-radius: 5px;
            margin: 0 0 15px;
            padding: 15px;
            box-sizing: border-box;
            font-size: 14px;
            font-family: 'Comfortaa', cursive;
        }

        .form input:focus {
            background: #dbdbdb;
        }

        .form button {
            font-family: 'Comfortaa', cursive;
            text-transform: uppercase;
            outline: 0;
            background: #4b6cb7;
            width: 100%;
            border: 0;
            border-radius: 5px;
            padding: 15px;
            color: #FFFFFF;
            font-size: 14px;
            -webkit-transition: all 0.3 ease;
            transition: all 0.3 ease;
            cursor: pointer;
        }

        .form button:active {
            background: #395591;
        }

        .form span {
            font-size: 75px;
            color: #4b6cb7;
        }
    </style>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body>

    <div class="login">
        <div class="form">
            @if ($errors->any())
                <div>
                    <div class="text-danger">
                        <small>
                            Whoops! Something went wrong.
                        </small>
                    </div>

                    <ul class="text-danger">
                        @foreach ($errors->all() as $error)
                            <li>
                                <small>
                                    {{ $error }}
                                </small>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="login-form" action="{{ route('login') }}" method="POST">
                @csrf
                <span class="material-icons">lock</span>
                <input type="email" placeholder="email" name="email" required />
                <input type="password" placeholder="password" name="password" required />
                <button>login</button>
            </form>
        </div>
    </div>
    <script src="assets/frontend/js/lib/bootstrap.bundle.min.js"></script>
</body>

</html>
