<!doctype html>
<html lang='en'>
<head>
    <title>@yield('title')</title>
    <meta charset='utf-8'>

    <link href='/css/bmi.css' type='text/css' rel='stylesheet'>

    @yield('head')
</head>
<body>

<header>
</header>

    @if( count($errors) > 0 ) 
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
    
<section>
    @yield('content')
</section>

<footer>
    &copy; {{ date('Y') }} <h2>mBret was here<h2>
</footer>

</body>
</html>


