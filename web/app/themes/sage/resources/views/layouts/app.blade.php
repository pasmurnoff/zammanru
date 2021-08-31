<!doctype html>
<html {!! get_language_attributes() !!}>
@include('components.head.wrap')
<body @php body_class() @endphp>
@php do_action('get_header') @endphp
@include('components.header.wrap')


<div class="wrapper">
  @yield('content')
</div>


@php do_action('get_footer') @endphp
@include('components.footer.wrap')
@php wp_footer() @endphp
</body>
</html>
