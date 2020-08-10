<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{
    public function create() {
        return view('posts.create');
    }
    public function store(Request $request){
        // dd($request->all());
        $query = DB::table('posts')->insert([
            "title" => $request["title"],
            "body"  => $request["body"]
            ]);

            return redirect('/posts')->with('success', 'Pertanyaan Berhasil Disimpan!');
    }
    public function index(){
        $posts = DB::table('posts')->get();
        //dd($posts);
        return view('posts.index', compact('posts'));
    }

    public function show($id){
        $post = DB::table('posts')->where('id', $id)->first();
        //dd ($post);
        return view('posts.show', compact('post'));
    }

    public function edit($edit) {
        $post = DB::table('posts')->where('id', $edit)->first();
        return view('posts.edit', compact('post'));
    }

    public function delete($id) {
        $post = DB::table('posts')->where('id', $id);
        $post->delete();
        return back();
    }

}
