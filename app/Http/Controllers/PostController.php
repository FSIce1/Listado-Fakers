<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

use App\Http\Resources\V1\PostResource;

class PostController extends Controller{
    
    public function index(){
        /*
        return view('index', [
            'posts' => Post::latest()->paginate()
        ]);
        */
        return view('index',[
            'posts' => Post::latest()->paginate()
        ]);
        //return PostResource::collection(Post::latest()->paginate());
    }

    public function show(Post $post){
        return new PostResource($post);
    }

    public function destroy(Post $post){
        
        $post->delete();

        return response()->json([
            'message' => 'Success'
        ], 204);
        
    }


}
