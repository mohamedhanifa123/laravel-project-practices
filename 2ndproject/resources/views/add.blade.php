<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addpost</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<section>
  <div class="container">
      <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                  <div class="card-header">
                    Add New Post
                  </div>
                  <div class="card-body">

                    @if(session::has('post_created'))
                    <div class="alert alert-success" role="alert">
                      {{session::get('post_created')}}
                      </div>
                  <form method="POST" action="{{route('post.addsubmit')}}">
                      @csrf

                      <div class="form-group">
                        <label for="title"> Post tittle </label>
                        <input type="text" name="tittle" class="form-control" placeholder="enter post tittle"/>
                      </div>

                      <div class="form-group">
                        <label for="body"> Post Description </label>
                        <textarea  class="form-control" name="body" rows="3"> </textarea>
                      </div>
                      <input type="submit" value="submit"/>

                  </form>
                  
                  
                  </div>
                  
            </div>
                    
                    
        </div>

      </div>

  </div>

</section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  </body>
  </html>