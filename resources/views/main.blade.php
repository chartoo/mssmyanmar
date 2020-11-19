<!DOCTYPE html>
<html lang="en">
    <head>
@include('layouts.partial.header')
</head>
<body>
    @include('layouts.partial.nav')
    @yield('content')
    @include('layouts.partial.footer')
</body>

</html>