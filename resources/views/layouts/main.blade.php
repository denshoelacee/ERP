<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env('APP_TITLE','Lorem Epsum')}}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">

</head>
    <body>
        <header> 
            @include('layouts.header') 
        </header>
                <main class="flex-1">
                    @yield('content')
                </main>
        <footer> 
                @include('layouts.footer')
        </footer>
    </body>
</html>


