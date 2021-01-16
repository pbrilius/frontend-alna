<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/css/app.css" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
    <div class="container lg mx-auto px-5 md:container md:mx-auto" id="app">
        <h1>@yield('title')</h1>
        @yield('content')
    </div>
    <script src="/js/app.js"></script>
</body>
</html>