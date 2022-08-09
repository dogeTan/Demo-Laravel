<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
    
        return view('posts.index', [
            'posts' => Post::latest()->filter(
                request(['search', 'category', 'author']))
            ->paginate(4),
        ]); 

                        
         //* method 1
    // $posts = collect(File::files(resource_path("posts")))
    //     -> map(fn($file) => YamlFrontMatter::parseFile($file))  //*closure function
    //     -> map(fn($document) => new Post(
    //             $document->title,
    //             $document->excerpt,
    //             $document->date,
    //             $document->body(),
    //             $document->slug,
    //     )); 
        
        // -> map(function($file){          //*standard function
        //     return YamlFrontMatter::parseFile($file);
        // })
        // -> map(function($document){
        //     return new Post(
        //         $document->title,
        //         $document->excerpt,
        //         $document->date,
        //         $document->body(),
        //         $document->slug,
        //     );
        // });

    //* method 2
    // $posts = array_map(function($file){
    //     $document = YamlFrontMatter::parseFile($file);

    //     return new Post(
    //         $document->title,
    //         $document->excerpt,
    //         $document->date,
    //         $document->body(),
    //         $document->slug,
    //     );

    // }, $files);

    //* method 3
    // $posts = [];
    // foreach ($files as $file) {
    //     $document = YamlFrontMatter::parseFile($file);
    //     $posts[] = new Post(
    //         $document->title,
    //         $document->excerpt,
    //         $document->date,
    //         $document->body(),
    //         $document->slug,
    //     );
    // }
    }

    public function show(Post $post){
        //* Find a post by its slug and pass it to a view called "post"
        return view('posts.show', [
            'post' => $post
            // 'post' => Post::findOrFail($id)
        ]);
    }
}
