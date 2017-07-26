<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    @include('includes.css')
    @yield('css')

</head>

<body class="top-navigation">

<div id="wrapper">
    <div id="page-wrapper" class="gray-bg ">
        <div class="row border-bottom grad-bg">
            @include('includes.navbar')
        </div>
        <div class="wrapper wrapper-content">
            <div class="container " style="width: 100%">
                @yield('content')
            </div>
        </div>
        @include('includes.footer')
    </div>
</div>
@include('includes.js')
@yield('js')
</body>

</html>
