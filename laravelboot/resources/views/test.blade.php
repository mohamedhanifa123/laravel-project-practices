<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
</head>
<body>
<div class="container well">

    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Integrass</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>
<div class="jumbotron text-center">
  <h1>INTEGRASS</h1>
  <p>Welcome to Integrass!</p> 
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Column 1</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 3</h3>        
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div>
</div>

    
    <div class="row">
        <div class="col-md-6 col-sm-12 well" >
        <i class="fa fa-file"> </i>
        <i class="fas fa-tachometer-alt"></i>
            Hello!
            <p class="text-primary bg-info"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa voluptates fugiat natus error! 
            Sequi quas vero officia enim repellendus minima tenetur id error, animi nostrum placeat quod,
             distinctio nesciunt quia.
             </p>
        </div>

        <div class="col-md-6 col-sm-12">
            Welcome!
            <p class="text-success"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa voluptates fugiat natus error! 
            Sequi quas vero officia enim repellendus minima tenetur id error, animi nostrum placeat quod,
             distinctio nesciunt quia.
             </p>
        </div>
        

        <div>
        <h2> Images </h2>

        <img src="images/usahocky.jpg" alt="usa hocky">

        </div>

        <form action="{{route('test')}}" >
        <div class="form-group">
        <label for="email" classs="control-label"> Email: </label>
        <input type="text" id="email" name="email" class="form-control" placeholder="enter your email id">
        </div>

        <div class="form-group">
        <label for="password" classs="control-label"> Password: </label>
        <input type="password" id="password" name="password" class="form-control" placeholder="enter your password">
        </div>

        </br>
        <button type="submit" class="btn btn-success">Submit </button>

        </form>
     
     </div>
     </div>

     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>