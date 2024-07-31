@include('layouts.front.head')
@include('layouts.front.header')
@yield('content')
@include('layouts.front.footer')
@yield('js')
@yield('style')

<script src="{{ asset('assets/front_assets/assets/js/jquery-3.1.1.min-1.js') }}"></script>
<script src="{{ asset('assets/front_assets/assets/js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('assets/front_assets/assets/js/plugins.min.js') }}"></script>
<script src="{{ asset('assets/front_assets/assets/js/plugins.min-1.js') }}"></script>
<script src="{{ asset('assets/front_assets/assets/js/custom-1.js') }}"></script>
<script src="{{ asset('assets/front_assets/assets/js/custom.js') }}"></script>

<script src="{{ asset('assets/front_assets/assets/js/home.js') }}"></script>
</body>

</html>
