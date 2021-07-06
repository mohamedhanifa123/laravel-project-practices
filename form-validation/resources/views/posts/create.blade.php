@extends('main')

@section('title', '|Create New Post')

@section('stylesheets')



  @endsection


@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1>Create New Post</h1>
        <hr>

        {!! Form::open(array('route' => 'posts.create', 'data-parsley-validate' =>'')) !!}

          {{ Form::label('title', 'Title:') }}
          {{ Form::text('title',null,array('class' => 'form-control','required' =>'','maxlength' =>'225')) }}

         
          {{ Form::label('slug', 'Slug:') }}
          {{ Form::text('slug',null,array('class' => 'form-control','required' =>'','minlength' =>'5', 'maxlength' =>'225')) }}


          {{ Form::label('body', 'Body:') }}
          {{ Form::text('body',null,array('class' => 'form-control','required' =>'','minlength' =>'5', 'maxlength' =>'225')) }}
       
          {{ Form::submit('Create Post',array('class' =>'btn btn-success btn-block', 'style' =>'margin-top:20px;')) }}
       
          {!!Form::close() !!}

        </div>
      </div>

@endsection
      <!-- <form action="/posts" method="post">
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control"  placeholder="Enter Title",require>
  </div>
 
  <div class="form-group">
  <label for="body">Body</label>
    <textarea class="form-control" id="body" rows="5"></textarea>

</div>

  <button type="submit" class="btn btn-success btn-lg btn-block",style="margin-top: 20px;">Create Post</button>
</form>
                
                
    </div>
</div>
-->

