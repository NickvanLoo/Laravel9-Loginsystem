<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel9 Loginsystem</title>
</head>
<body>
    <div id="app">
        <div class="relative d-flex flex-column mw-100 min-vh-100 bg-light">
            {{ View::make('layouts.header') }}
            <main class="py-4">
                @yield('content')
            </main>
            {{ View::make('layouts.footer') }}
        </div>
    </div>
</body>
</html>