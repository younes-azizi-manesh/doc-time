<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.layouts.head-tag')
    <link rel="icon" type="image/png" href="" />
    @yield('head-tag')

</head>

<body dir="rtl">

    <!-- Main Wrapper -->
    <div class="main-wrapper">
        @include('admin.layouts.header')

        @include('admin.layouts.sidebar')

        @yield('content')
    </div>

    @include('admin.layouts.script')
    @yield('script')

    @include('alerts.sweetalert.error')
    @include('alerts.sweetalert.success')

</body>

</html>
