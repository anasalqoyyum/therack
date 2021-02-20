<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.blogcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [

            'title' => 'required',

            'description' => 'required',

            'thumbnail' => 'required'

        ]);

        $description = $request->description;
        $dom = new \DomDocument();
        $dom->loadHtml($description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');
        $file = $request->thumbnail;
        $list_gambar = $file->getClientOriginalName();
        $nama_file = time() . "_" . $file->getClientOriginalName();
        foreach ($images as $k => $img) {
            $data = $img->getAttribute('src');
            list($type, $data) = explode(';', $data);
            list($type, $data) = explode(',', $data);
            $data = base64_decode($data);
            $image_name = "/upload/" . $k . $list_gambar;
            $path = public_path() . $image_name;
            file_put_contents($path, $data);
            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
        }
        $tujuan_upload = 'thumbnail';
        $file->move($tujuan_upload, $nama_file);
        $description = $dom->saveHTML();
        $summernote = new Post;
        $summernote->title = $request->title;
        $summernote->description = $description;
        $summernote->thumbnail = $nama_file;
        $summernote->save();
        // return redirect()->back();
        return redirect()->route('admin.show')->with('success','Successfully added the journal!');
    }

    public function show()
    {
        $post = Post::all();
        return view('admin.bloglist', compact('post'));
    }

    public function list()
    {
        $post = Post::all();
        return view('blog.display', compact('post'));
    }

    public function detail($id)
    {
        $post = Post::find($id);
        return view('blog.detail', compact('post'));
    }

    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('admin.blogedit', compact('post'));
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'thumbnail' => 'required'
        ]);

        $description = $request->description;
        $dom = new \DomDocument();
        $dom->loadHtml($description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');
        $file = $request->thumbnail;
        $list_gambar = $file->getClientOriginalName();
        $nama_file = time() . "_" . $file->getClientOriginalName();
        foreach ($images as $k => $img) {
            $data = $img->getAttribute('src');
            list($type, $data) = explode(';', $data);
            list($type, $data) = explode(',', $data);
            $data = base64_decode($data);
            $image_name = "/upload/" . $k . $list_gambar;
            $path = public_path() . $image_name;
            file_put_contents($path, $data);
            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
        }
        $tujuan_upload = 'thumbnail';
        $file->move($tujuan_upload, $nama_file);
        $description = $dom->saveHTML();
        $summernote = Post::find($id);
        $summernote->title = $request->title;
        $summernote->description = $description;
        $summernote->thumbnail = $nama_file;
        $summernote->save();
        // return redirect()->back();
        return redirect()->route('admin.show')->with('success','Successfully edited the journal!');
    }
}
