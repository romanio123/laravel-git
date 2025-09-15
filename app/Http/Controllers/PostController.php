<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function index()
    {
        $post = Post::where('is_published', 1)->first();
        dump($post->title);
        dd('end');
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
            Post::create([
                [
                    'title' => $arr['title'],
                    'content' => $arr['content'],
                    'image' => $arr['image'],
                    'likes' => $arr['likes'],
                    'is_published' => $arr['is_published'],
                ]
            ]);
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
}
