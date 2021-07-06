@extends('main')

@section('title','|edit blog post')

@section('content')

<div class="row">
{!! Form::model($post, ['route' => ['posts.update',$post->id]]) !!}
  
<div class="col-md-8">
    {{ Form::text('title',null,["class" =>'form-control'])}}
    <h1> {{ $post->title }} </h1>

    <p class="lead">{{ $post->body }} </p>
</div>

<div class="col-md-4">
    <div class="well">

    <dl class="dl-horizontal">
        <dt> Url: </dt>
        <dd> <a href="{{ url($post->slug) }}"> {{ url($post->slug) }}</a> </dd>
    </dl>
    <dl class="dl-horizontal">
        <dt> Create At: </dt>
        <dd>{{ date('M j, Y H:i',strtotime($post->created_at)) }}</dd>
    </dl>
    <hr>

    <dl class="dl-horizontal">
        <dt>Last Updated:</dt>
        <dd>{{ date('M j, Y H:i',strtotime($post->updated_at)) }}</dd>
    </dl>
    <hr>

    <div class="row">
        <div class="col-sm-6">
        {!!Html::linkRoute('posts.show','cancel',array($post->id),array('class =>btn btn-danger btn-block'))!!}
        
        </div>

        <div class="col-sm-6">
        {!!Html::linkRoute('posts.update','save changes',array($post->id),array('class =>btn btn-success btn-block'))!!}
        </div>



        </div>   

        

    </div>
    </div>  
    {!! Form::close() !!}
    </div>




    <!-- {
        $this->validate($request,array(
            'title' => 'required|max:225',
            'slug'  =>'required|max:255',
            'body'  => 'required'
        ));

            $post = new Post;

            $post->title=$request->title;
            $post->body=$request->body;

            $post->save();

            session::flash('success', 'this post was successfully saved');

            return redirect()->route('posts.show',$post->id);

    }-->