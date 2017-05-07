@section('frontend_index_body')
    {{-- body start --}}
    @yield('frontend_index_body_start')

    {{-- body inner --}}
    @yield('frontend_index_body_inner')

        {{-- html5 header --}}
        @include('index.include.body.header')

        {{-- html5 nav--}}
        @include('index.include.body.nav')

        {{-- sections --}}
        @yield('frontend_index_body_inner_sections')

        {{-- footer --}}
        @include('index.include.body.footer')

    {{-- body end --}}
    @yield('frontend_index_body_end')

    {{-- body end js --}}
    @yield('frontend_index_body_end_js')
@show