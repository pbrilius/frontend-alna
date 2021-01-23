<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/css/app.css" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
    @include('layouts/navbar')
    <div class="container container-fluid" id="app">
        <h1>@yield('title') <i class="fab fa-github-square"></h1>
        @yield('content')
    </div>
    <script src="/js/app.js"></script>
</body>
</html>