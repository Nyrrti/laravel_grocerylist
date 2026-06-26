<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Name - @yield('title')</title>
    @vite([
        'resources/css/app.css', 
        'resources/js/app.js'
    ])
</head>
<body>
    <div class="grid-container-fluid">
        <div class="grid-container">
            <main>
                <div class="col-12">
                    @include('partials.nav')
                    @yield('content')
                </div>
            </main>
        </div>
    </div>
</body>
</html>