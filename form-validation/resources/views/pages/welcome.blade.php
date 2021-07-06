@extends('main')

@section('stylesheets')
  <link rel="stylesheet" type="text/css" href="styles.css">
  @endsection

@section('content')
    
        <div class="row">
        <div class="col-md-12">
        <div class="jumbotron">
  <h1>Welcome To My Blog!</h1>
  <p>Thanks for visting my page</p>
  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
  </div>
        
        
        
        </div>
        
        </div>
    
    
    

    <div class="row">
    <div class="col-md-8">
    <div class="post">
    <h3> Post Title </h3>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, quis? Molestiae, ex ipsa. 
    Deleniti odio neque harum dolorem, fugit aliquid quisquam libero, minus, mollitia labore provident deserunt in consequatur.
     Dignissimos! </p>
     <a href="#" class="btn btn-primary">ReadMore</a>
    
    </div>
    <div class="post">
    <h3> Post Title </h3>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, quis? Molestiae, ex ipsa. 
    Deleniti odio neque harum dolorem, fugit aliquid quisquam libero, minus, mollitia labore provident deserunt in consequatur.
     Dignissimos! </p>
     <a href="#" class="btn btn-primary">ReadMore</a>
    
    </div>
    <div class="post">
    <h3> Post Title </h3>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, quis? Molestiae, ex ipsa. 
    Deleniti odio neque harum dolorem, fugit aliquid quisquam libero, minus, mollitia labore provident deserunt in consequatur.
     Dignissimos! </p>
     <a href="#" class="btn btn-primary">ReadMore</a>
    
    </div>
    <div class="post">
    <h3> Post Title </h3>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, quis? Molestiae, ex ipsa. 
    Deleniti odio neque harum dolorem, fugit aliquid quisquam libero, minus, mollitia labore provident deserunt in consequatur.
     Dignissimos! </p>
     <a href="#" class="btn btn-primary">ReadMore</a>
    
    </div>
    
    </div>

    <div class="col-md-3 col-md-offset-1">
      <h2> USA Hocky </h2>
      <img src="https://media.istockphoto.com/photos/children-play-ice-hockey-picture-id666604620?s=612x612" width="400" height="400"/>
    
    </div>
    
    
    </div>
    @endsection
    
    @section('scripts')
    <script> confirm('i loaded some js') </script>

    @endsection