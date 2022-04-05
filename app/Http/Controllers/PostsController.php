<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\File;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(User $user)
    {
        return view('posts.create', compact('user'));
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required', 'image'],
        ]);

        $imagePath = $request->file('image')->store('uploads','public');
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
        $image->save();

        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath,
        ]);

        return redirect('/profile/' . auth()->user()->id);
    }

    public function show(Post $post) {
        return view('posts.show', compact('post'));
    }
}
