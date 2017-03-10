<!DOCTYPE html>
<html>
<head>
    @include('ad::admin.layout.head')
    <title> @yield('title') </title>

</head>

<body>

    @include('ad::admin.layout.menu')

    <div class="col-md-3 block-left">
        @include('ad::admin.layout.left_menu')
    </div>

    <div class="col-md-6">
        @yield('main-content')
    </div>

    <div class="col-md-3 block-right">
        @include('ad::admin.layout.right_menu')
    </div>

</body>
</html>