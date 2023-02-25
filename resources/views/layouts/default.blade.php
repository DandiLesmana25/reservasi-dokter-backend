<!DOCTYPE html>
<html lang="en">
    <head>
        {{-- manggil folder includes/frontsite/meta.blade --}}
        @include('includes.frontsite.meta')
{{-- @yield title untuk ngambil title yang di set dari tiap tiap page --}}
{{-- misal kita lagi di page home maka titlenya akan home/MeetDoctor --}}

        <title>@yield('title') | MeetDoctor</title>  

        {{-- stack untuk nge include script/style --}}
        @stack('before-style')
            @include('includes.frontsite.style')
        @stack('after-style')

    </head>
    <body>

        {{-- @include('sweetalert::alert') --}}

        {{-- header --}}
        @include('components.frontsite.header')
            @yield('content')    {{-- untuk nerima blade lain --}}

        @include('components.frontsite.footer')

        @stack('before-script')
            @include('includes.frontsite.script')
        @stack('after-script')

        {{-- modals --}}
        {{-- if you have a modal, create here --}}

    </body>
</html>
