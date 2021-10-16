<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PagesController extends Controller
{
    public function index(){
        

        return view('index')
            ->with('post',Post::orderBy('updated_at','DESC')->first())
            ->with('post1',Post::orderBy('updated_at','ASC')->first());
    }
}
