<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::where('is_published', 1)->first();
        dump($post->title);

        echo 'end';
    }
    public function create()
    {
        $postsArr = [
            [
                'title' => 'title of post from phpstorm',
                'content' => 'some interesting content',
                'image' => 'imagebla.jpg',
                'likes' => 20,
                'is_published' => 1,
            ],
            [
                'title' => 'anothertitle of post from phpstorm',
                'content' => 'another some interesting content',
                'image' => 'anotherimagebla.jpg',
                'likes' => 50,
                'is_published' => 1,
            ],
        ];

        foreach ($postsArr as $item) {
            echo 'ok';
            dump($item);
            Post::create($item);
        }
        dd('created');
    }

    public function update()
    {


        $post = Post::find(5);
        $post->update([
            'title' => 'update title of post from phpstorm',
            'content' => 'update some interesting content',
            'image' => ' update imagebla.jpg',
            'likes' => 20,
            'is_published' => 1,
        ]);
    }

    public function delete()
    {
        $post = Post::find(3);
        $post->delete();
        echo "deleted";


    }

    public function firstOrCreate()
    {
        $anotherPost = [
            'title' => 'anothertitle of post from phpstorm',
            'content' => 'another some interesting content',
            'image' => 'anotherimagebla.jpg',
            'likes' => 50,
            'is_published' => 1,
        ];
        Post::firstOrCreate(['title' => 'anothertitle of post from phpstorm'], $anotherPost);
        dd('ddddd');
    }
}