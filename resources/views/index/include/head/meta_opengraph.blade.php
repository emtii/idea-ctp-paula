@section('frontend_index_head_meta_opengraph')
    <meta property="og:type" content="@yield('frontend_index_head_opengraph_type')" />
    <meta property="og:site_name" content="@yield('frontend_index_head_opengraph_sitename')" />
    <meta property="og:title" content="@yield('frontend_index_head_opengraph_title')" />
    <meta property="og:description" content="@yield('frontend_index_head_opengraph_description')" />
    <meta property="og:image" content="@yield('frontend_index_head_opengraph_image')" />
@show