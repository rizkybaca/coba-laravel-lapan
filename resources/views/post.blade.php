@extends('layouts.main')
@section('container')

<article>
  <h2>{{ $post->title }}</h2>


  <h5>By: {{ $post['author'] }} in <a href="/categories/{{ $post->categories->slug }}">{{ $post->categories->name }}</a></h5>

  {!! $post->body !!}
</article>
<a href="/blog">Back to blog</a>
    
@endsection