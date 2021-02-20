@extends('layouts.admin')

@section ('content')

<div class="col-12 col-md-12 col-sm-12 col-lg-10">
    <h5>EDIT JOURNAL</h5>
    <hr>

    <form method="POST" action="{{ route('posts.edit',['id'=>$post->id]) }}" enctype="multipart/form-data">
        @csrf
        <div class="row ">

            <div class="col-12">
                <label for="title" class="">{{ __('Title') }}</label>
                <div class="form-group">
                    <div>
                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $post->title }}" required autocomplete="title" autofocus>
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-12">
                <label for="thumbnail" class="">{{ __('Thumbnail') }}</label>
                <div class="form-group">
                    <div>
                        <input id="thumbnail" type="file" class="form-control @error('thumbnail') is-invalid @enderror" name="thumbnail" value="{{ old('thumbnail') ?? $post->thumbnail }}" required autofocus>
                        @error('thumbnail')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-12">
                <label for="description" class="">{{ __('Konten') }}</label>
                <div class="form-group">
                    <textarea class="summernote" id="summernote" name="description">{!! $post->description !!}</textarea>
                </div>
            </div>
        <button type="submit" class="btn btn-success w-100">EDIT JOURNAL</button>
    </form>
</div>
    
@endsection