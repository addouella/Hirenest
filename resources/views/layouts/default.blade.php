<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hirenest</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class='min-h-screen bg-center' >
    {{-- <header class='bg-blue-500 text-black p-3 text-left font-bold '>
        @yield('logo')
    </header> --}}
    {{-- <div>
        @yield('topic')
    </div> --}}

    <main>
        @yield('maincontent')
    </main>

    {{-- <footer>
        @yield('footer')
    </footer> --}}
    
</body>
</html>