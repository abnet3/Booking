<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\post;
class PostsController extends Controller
{
    //

    public function show($slug){

        $post = post::where('slug',$slug)->firstOrFail();
//$post = DB::table('posts')->where('slug',$slug)->first();

//dd($post);

        return view('post', ['post' => $post]);
    }
}
