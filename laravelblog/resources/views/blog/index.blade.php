@extends('layouts.app')
@section('content')
<div>
<h1> Blog Posts </h1>
</div>
@foreach($posts as $post)

<div>
    <img src="https://www.google.com/imgres?imgurl=https%3A%2F%2Fimage.shutterstock.com%2Fimage-photo%2Flaptop-blank-screen-isolated-on-260nw-1024250860.jpg&imgrefurl=https%3A%2F%2Fwww.shutterstock.com%2Fsearch%2Flaptop%2Bblack%2Bbackground&tbnid=ik_Ub-qEBNaxcM&vet=12ahUKEwjW1uzx_ebvAhWdnEsFHR4CCOEQMyglegUIARCeAg..i&docid=6MhDR5fH6L3V9M&w=433&h=280&q=black%20laptop%20wallpaper&hl=en-IN&authuser=0&ved=2ahUKEwjW1uzx_ebvAhWdnEsFHR4CCOEQMyglegUIARCeAg" alt="">
</div>
<div>
<h2> {{$post->title}} </h2>
<span class="text-gray-500">
By <span class="font-bold"> {{$post->user->name}} created on{{date('JSMY',strtotime($post->updated_at))}} </span>

<p {{$post->description}}> lorem ipsum........ </p>
<a href="/blog/{{$post->slug}}"> Keep Reading </a>