<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use App\Http\Resources\PostResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

// Latihan CRUD with POST
class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(6);
        return new PostResource(true, 'Data Post Succes', $posts);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:png,jpg,jpeg,svg,gif|max:2048',
            'title' => 'required',
            'price' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $image = $request->file('image');
        $image->storeAs('public/posts/', $image->hashName());

        $post = Post::create([
            'image' => $image->hashName(),
            'title' => $request->title,
            'price' => $request->price,
        ]);
        return new PostResource(true, 'Data Post Success Added!', $post);
    }

    public function show($id)
    {
        $post = Post::find($id);
        return new PostResource(true, 'Data Post Show', $post);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'price' => 'required',
        ]);

        if ($validator->fails())
        {
            return response()->json($validator->errors(), 422);
        }

        $post = Post::find($id);

        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());

            Storage::delete('public/posts'.basename($post->$image));

            $post->update([
                'image' => $image->hashName(),
                'title' => $request->title,
                'price' => $request->price,
            ]);
        }else {
            $post->update([
                'title' => $request->title,
                'price' => $request->price,
            ]);
        }

        return new PostResource(true, 'Data Post Update!', $post);
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        Storage::delete('public/posts'.basename($post->image));

        $post->delete();
        return new PostResource(true, 'Data Post Delete!', $post);
    }
}
