<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        form {
            display: flex;
            flex-direction: column;
            width: clamp(300px, 468px, 100%);
            margin: 0 auto;
        }

        input {
            font-size: 16px;
            margin-bottom: 8px;
            padding: 12px 8px;
        }

        button {
            width: 100%;
            padding: 12px 8px;

            margin-top: 8px;
            text-transform: uppercase;
        }

        html,
        body {
            box-sizing: border-box;

            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            width: 100%;
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Форма
            </div>

            <form action="/test" method="POST">
                @csrf
                <input type="text" placeholder="Имя" name="name" required>
                <input type="text" placeholder="Фамилия" name="last_name" required>
                <button type="submit">Отправить</button>
            </form>
        </div>
    </div>
</body>

</html>
