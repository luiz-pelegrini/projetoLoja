<!DOCTYPE html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <ul class="nav nav-pills nav-fill">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('usuarios-index') }}">Usuários</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('lojas-index') }}">Lojas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('produtos-index') }}">Produtos</a>
        </li>
    </ul>
    @yield('content')
</body>
</html>