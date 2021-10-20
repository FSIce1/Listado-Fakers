<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller{
    
    public function index(){
        
    }

    public function store(Request $request){
        
    }

    public function show(Post $post){
        return $post;
    }

    public function update(Request $request, Post $post){
        
    }

    public function destroy(Post $post){
        
    }
    
}
