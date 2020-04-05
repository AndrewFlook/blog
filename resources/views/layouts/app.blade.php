<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.includes.head')
    <body>
        <div class="container mx-auto my-8">
            @yield('content')
        </div>
    </body>
</html>