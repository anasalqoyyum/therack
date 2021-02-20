@extends('layouts.app')

@section ('content')

<h1 class="card-title text-center" style="font-weight: bold">Our Journal</h1>
@foreach ($post as $post)
<div class="container">
    <div class="row content">
        <div class="col-md-6 thumbnail">
            <a href="{{ route('posts.detail',['id'=>$post->id]) }}"><img
                    src="{{ asset('/thumbnail/'.$post->thumbnail) }}"
                    alt="" class="rounded img-thumbnail mx-auto d-block" style="width: 75%; height:auto"/></a>
        </div>
        <div class="col-md-6">
            <a href="{{ route('posts.detail',['id'=>$post->id]) }}">
                <span>
                    <h2 class="title">{{$post->title}}</h2>
                    <p>{{substr($post->created_at, 0, 10)}}</p>
                </span>
                <p class="teaser-text">{!! substr($post->description, 0, 500) !!}</p>
            </a>
        </div>
    </div>
</div>
<div class="spacer-50"></div>
@endforeach

@endsection