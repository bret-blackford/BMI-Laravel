<!doctype html>
<html lang='en'>
    <head>
        <title>@yield('title')</title>
        <meta charset='utf-8'>

        <link href='/css/bmi.css' type='text/css' rel='stylesheet'>

        @yield('head')
    </head>
    <body>

        <section>
            @yield('content')
        </section>

        <div id="alerts">
            @if( count($errors) > 0 ) 
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            @endif
        </div>

        <footer>
            &copy; {{ date('Y') }} 
        </footer>

    </body>
</html>


