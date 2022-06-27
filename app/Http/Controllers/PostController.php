<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Prophecy\Doubler\Generator\Node\ReturnTypeNode;

class PostController extends Controller
{
    public function create() {
        return view('post.create');
    }

    public function store(Request $request){
        // dd($request->all());
        $request->validate([
            'title' => 'required|unique:posts',
            'body' => 'required',
        ]);
        $query = DB::table('posts')->insert([
                "title" => $request["title"],
                "body" => $request["body"]
            ]);
            return redirect('post')->with('success', 'Post Berhasil Ditambahkan');
        }

        public function index()
        {
            $posts = DB::table('posts')->get();
            // dd($post->all());
            return view('post.index', compact('posts'));
        }

        public function show($id)
        {
            $posts = DB::table('posts')->where('id', $id)->first();
            // dd($posts->all());
            return view('post.show', compact('posts'));
        }

        public function edit($id)
        {
            $posts = DB::table('posts')->where('id', $id)->first();
            return view('post.edit', compact('posts'));
        }

        public function update($id, Request $request) 
        {
            DB::table('posts')
              ->where('id', $id)
              ->update([
                'title' => $request['title'],
                'body' => $request['body']
            ]);
            return redirect('post')->with('info', 'Post Berhasil Diubah');
        }

        public function destroy($id)
        {
            DB::table('posts')->where('id', $id)->delete();

            return redirect('post')->with('success', 'Post Berhasil Dihapus');
        }
}
