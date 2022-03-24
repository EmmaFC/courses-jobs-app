<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head component/>

    <body>
        <div id="app">
            
            <Header component />

            <main class="py-4">
                @yield('content')
            </main>

            <footer component />

        </div>
    </body>

</html>
