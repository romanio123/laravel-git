<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        $post = Post::where('is_published', 1)->first();
        dump($post->title);
        dd('end');
=======
        $posts = Post::all();
        return view('post', compact('posts'));

>>>>>>> master
    }

    public function create()
    {
        $postsArr = [
            [
              'title' => 'title of post',
              'content' => 'some content',
              'image' => 'dansda.png',
              'likes' => 42,
              'is_published' => 1,
            ],
            [
                'title' => 'another title of post',
                'content' => 'another some content',
                'image' => 'kakapuka.png',
                'likes' => 98,
                'is_published' => 1,
            ]
        ];

        foreach ($postsArr as $arr){
            Post::create($arr);
        }

        dd('created');
    }

    public function update()
    {
        $post = Post::find(5);

        $post->update([
            'title' => 'updated',
            'content' => 'updated',
            'image' => 'updated',
            'likes' => 213,
            'is_published' => 0
        ]);

        dd('updated');
    }

    public function delete()
    {
        $post = Post::withTrashed()->find(2);
        $post->restore();
        dd('deleted');
    }

    public function firstOrCreate()
    {
        $anotherPost = [
                'title' => 'new title of post',
                'content' => 'new some content',
                'image' => 'qweqkakapuka.png',
                'likes' => 1232,
                'is_published' => 1,
        ];

        $post = Post::firstOrCreate([
            'title' => 'new title of post'
        ],
        [
            'title' => 'title of post',
            'content' => 'new some content',
            'image' => 'qwekakapuka.png',
            'likes' => 1232,
            'is_published' => 1,
        ]); 
        dump($post->content);
        dd('finished');
    }

    public function updateOrCreate()
    {
        $anotherPost = [
            'title' => 'update title of post',
            'content' => 'update some content',
            'image' => 'updatEqwekakapuka.png',
            'likes' => 300,
            'is_published' => 1,
        ];

        $post = Post::updateOrCreate([
            'title' => 'another not title of post'
        ],
        [
            'title' => 'another not title of post',
            'content' => 'update some content',
            'image' => 'updatEqwekakapuka.png',
            'likes' => 300,
            'is_published' => 1,
        ]);

        dump($post->content);
    }

}
