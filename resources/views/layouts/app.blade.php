<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="assets/css/style.css">

    @include('libraries.styles')
</head>
<body>
@auth
    @include('components.mainnav')
    @include('components.nav')


    @yield('content')

    @include('libraries.scripts')
 @else 
 you are not allowed to access, please login
 @endauth
</body>
</html>