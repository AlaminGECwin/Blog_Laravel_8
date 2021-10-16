@extends('layouts.app')
@section('content')
    <div  
    style="background-image:  url('https://cdn.pixabay.com/photo/2015/01/08/18/27/startup-593336_960_720.jpg');
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    height: 600px;"  
    class=" grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-whate text-5xl uppercase font-bold text-shadow-md pb-14">
                    Do you want to become a Developer?

                </h1>
                <a href="/blog"
                    class="text-center bg-gray-50 sm:space-y-11 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Read More
                </a>

            </div>
        </div>
    </div>
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="{{asset('images/' . $post1->image_path)}}" width="700" alt="">
        </div>
        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h1 class="text-3xl font-extrabold  text-gray-600">
                {{ $post1->title }}

            </h1>
            <p class="py-8 text-gray-500 text-s">
                By<span class="font-bold italic  text-gray-800">
                    {{$post1->user->name}}
                </span>, Created on {{date('jS M Y',strtotime($post1->updated_at))}}
                 
            </p>
            <p class="font-extrabold text-gray-600 text-s pb-9">
                {{$post1->description}}

            </p>
            <a href="/blog"
                class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rouneded-3xl">
                Find Out More
            </a>

        </div>

    </div>

    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l">
            I am an exper in .....

        </h2>
        <span class="font-extrabold block text-4xl py-1">
            Ux Design
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Project Management
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Digital Strategy
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Backend Development
        </span>

    </div>

    <div class="text-center py-15 ">
        <span class="uppercase text-s text-gray-400 ">
            Blog
        </span>
        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>
        <p class="m-auto w-4/5 text-gray-500">
            It is a long established fact that a reader will be distracted
             by the readable content of a page when looking at its layout. 
             The point of using Lorem Ipsum is that it has a more-or-less 
             normal distribution of letters
        </p>

    </div>
    <div class="sm:grid grid-cols-2  w-4/5 m-auto ">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    <h1 class="text-6xl ">
                        {{ $post->title }}
                    </h1>
                    By<span class="font-bold italic  text-gray-800">
                        {{$post->user->name}}
                    </span>, Created on {{date('jS M Y',strtotime($post1->updated_at))}}
                </span>
                <h3 class="text-xl font-bold py-10"> 
                    {{$post->description}}
                </h3>
                <a 
                href="/blog"
                class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                Find Out More
                </a>

            </div>
            
        </div>
        <div>
            <img src="{{asset('images/' . $post->image_path)}}" width="700" alt="">
        </div>
    </div>
@endsection