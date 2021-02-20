@extends('layouts.admin')

@section ('content')

<div class="col-12 col-md-12 col-sm-12 col-lg-10">
    @if(Session::has('success'))
    <div class="row">
        <div class="col-12">
            <div id="charge-message" class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        </div>
    </div>
    @endif
    <div class="card">
        <div class="card-header">
            <h5>DAFTAR JOURNAL</h5>
        </div>
        <div class="card-body">
            <a href="{{ route('admin.add') }}" class="btn btn-success mb-4" style="color:white; width:150px;">ADD
                JOURNAL</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Thumbnail</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Konten</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($post as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td><img style="height:100px;" src="{{ asset('/thumbnail/'.$post->thumbnail) }}" alt=""></td>
                        <td>{{ $post->title }}</td>
                        <td>{!! substr($post->description, 0, 20) !!}</td>
                        <td>
                            <a href="/admin-journal/edit/{{ $post->id }}" class="btn btn-primary w-100 m-1"
                                style="color:white;">EDIT</a>
                            {{-- <a href="/admin-journal/delete/{{ $post->id }}" class="btn btn-danger w-100 m-1"
                            style="color:white;">HAPUS</a> --}}
                            <a onclick="deleteConfirm('{{ route('posts.delete',['id'=>$post->id]) }}')" href="#!"
                                class="btn btn-danger w-100 m-1" style="color:white;">HAPUS</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
            </div>
        </div>
    </div>
</div>

@endsection