<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookloop</title>      
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    @vite(['resources/js/app.js'])
</head>
<body>
    @component('navbar')
    @endcomponent
    <main role='main'>
        <div class='container'>
            @hasSection('content')
                @yield('content')
            @endif
        </div>
    </main>

    <footer class='footer'>
        <div>
            <p>Todos os direitor reservados a &copy;Copyright</p>
        </div>
    </footer>
    @hasSection('javascript')
        @yield('javascript')
    @endif
</body>
</html>