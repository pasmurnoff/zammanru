@extends('layouts')

@section('content')
  @while(have_posts()) @php the_post() @endphp

{{--  There will be content for each single post (get_posts, WP_Query not needed--}}

  @endwhile
@endsection
