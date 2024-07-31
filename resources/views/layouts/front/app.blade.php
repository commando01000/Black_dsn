<!doctype html>
<html class="no-js" lang="">

@include('layouts.front.head')

<body class="v-dark dsn-ajax">

    @include('layouts.front.pre-loader')

    <main id="main_root" class="main-root">

        <!-- ========== Menu ========== -->
        @include('layouts.front.header')
        <!-- ========== End Menu ========== -->
        @yield('content')
        @yield('css')
        @yield('js')

        @include('layouts.front.footer')
    </main>

    <!-- ========== Cursor ========== -->
    @include('layouts.front.cursor')
    <!-- ========== End Cursor ========== -->


    <!-- ==========  Social ========== -->
    @include('layouts.front.social')
    <!-- ========== End Social ========== -->

    <!-- ========== Style Option Page ========== -->
    @include('layouts.front.style-option-page')
    <!-- ========== End Style Option Page ========== -->

    <!-- ========== Line BG ========== -->
    @include('layouts.front.line-bg')
    <!-- ========== End Line BG ========== -->


    <script src="{{ asset('front_asset/assets/js/jquery-3.1.1.min.js') }}"></script>

    <script src="{{ asset('front_asset/assets/js/plugins.min.js') }}"></script>

    <script src="{{ asset('front_asset/assets/js/custom.js') }}"></script>

    <script src="{{ asset('front_asset/assets/js/plugins/dsn-grid.min.js') }}"></script>

</body>

</html>
