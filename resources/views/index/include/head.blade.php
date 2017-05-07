@section('frontend_index_head_meta')
    {{-- meta http tags --}}
    @include('index.include.head.meta_http')

    {{-- meta general tags --}}
    @include('index.include.head.meta_general')

    {{-- meta open graph tags --}}
    @include('index.include.head.meta_opengraph')

    {{-- meta twitter tags --}}
    @include('index.include.head.meta_twitter')

    {{-- meta schema tags --}}
    @include('index.include.head.meta_schema')

    {{-- fav icons --}}
    @include('index.include.head.fav')

    {{-- site title --}}
    @include('index.include.head.title')

    {{-- css --}}
    @include('index.include.head.css')

    {{-- js --}}
    @include('index.include.head.js')

    {{-- fonts --}}
    @include('index.include.head.fonts')

    {{-- trackings --}}
    @include('index.include.head.trackings')
@show