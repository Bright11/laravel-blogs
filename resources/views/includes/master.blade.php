<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/custom.css">

    <script src="/js/ckedito.js"></script>
    <title>Blog</title>
    <script src="/js/jquery.js"></script>

</head>
<body>
    {{View::make('includes.nav')}}
    @yield('content')
    {{View::make('includes.footer')}}
</body>
</html>
