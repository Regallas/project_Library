<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title-block')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    {{-- <script type="text/javascript" src="https://vk.com/js/api/openapi.js?168" charset="windows-1251"></script>
    <script type="text/javascript">
        VK.init({
            apiId: 51821603
        });
    </script> --}}
</head>

<body>
    @include('inc.header')

    @if (Request::is('/'))
        @include('inc.hero')
    @endif

    <div class="container mt-5">
        @include('inc.messages')

        <div class="row">
            <div class="col-8">
                @yield('content')
            </div>
            <div class="col-4">
                @include('inc.aside')
            </div>
        </div>
    </div>

    @include('inc.footer')
</body>

</html>
