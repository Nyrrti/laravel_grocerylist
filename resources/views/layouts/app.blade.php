<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Grocery List - @yield('title')</title>
        @vite([
            'resources/css/app.css', 
            'resources/js/app.js'
        ])
    </head>
    <body>
        <div class="grid-container-fluid nav-bar items-center">
            <div class="grid-container max-width">
                @include('partials.nav')
            </div>
        </div>
        <div class="grid-container-fluid page-content">
            <main class="grid-container bg-color max-width full-height shadow p-5">
                @yield('content')
            </main>   
        </div>
        <div class="grid-container-fluid footer">
            <div class="grid-container max-width">
                @include('partials.footer')
            </div>  
        </div>
    </body>
</html>