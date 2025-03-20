<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', '掲示板')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/test.css') }}">
</head>
<body>
<header>
    <h1>テスト掲示板</h1>
</header>
<main class="container">
    @yield('content')
</main>
</body>
</html>
