<!doctype html>
<html {!! get_language_attributes() !!}>
@include('partials.head')
<body @php body_class() @endphp>
  @php do_action('get_header') @endphp
  @include('coeurs')
  <div class="wrap" role="document">
    <aside class="sidebar">
      @include('partials.sidebar')
    </aside>
    <main class="main">
      @yield('content')
    </main>
  </div>
  @php do_action('get_footer') @endphp
  @include('partials.footer')
  @php wp_footer() @endphp
</body>
</html>
