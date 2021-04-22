<!DOCTYPE html>
@extends('layouts/main')

@section('content')

    @foreach ( $recipes as $recipe )
        @if ($loop->iteration > 3)
           @break
        @endif
        <!--------------------------------------------------------------------------------------------------------->
        <div class="grid-x align-center">
          <div class="cell medium-8">
              <div class="blog-post">
                  <h3><a href="{{ route('recipe', $recipe->url) }}">{{ $recipe->title }}</a></h3>
                  <h3><small>{{ substr($recipe->date, 0, 10) }}</small></h3>
                  <img class="thumbnail" src="/images/image-default.jpg" width="100%">
                  <p><strong>{{ $recipe->content }}</strong></p>
                  <div class="callout">
                      <ul class="menu simple">
                          <li><a href="#">Author: {{ $recipe->author->name }}</a></li>
                          <li><a href="#">Comments: 3</a></li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>


    
    @endforeach
    
    
    
@endsection
