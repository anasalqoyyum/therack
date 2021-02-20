@extends('layouts.app')

@section ('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-2 mt-3">
            <a href="{{route('posts.list')}}" class="kembali"><i class="fas fa-arrow-left kembali"></i>
                Kembali</a>
            <div class="card">
                <img class="card-img-top" src="{{ asset('/thumbnail/'.$post->thumbnail) }}" alt="Card image cap">
                <div class="card-body">
                    <h2 class="card-title">{{$post->title}}</h2>
                    <p>{{$post->created_at}}</p>
                    <p class="card-text">{!! $post->description !!}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection