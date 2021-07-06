<!DOCTYPE HTML>
<html>
<head>
<title> testpage </title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>
<body>
<center>
<p style=font-size:"20px"> <b> Customer Details </b> </p>
<table border="1" cellspacing="7" align="center">
    <tr>
    <th>Name</th>
    <th>gender</th>
    <th>age</th>
    <th>operation </th>
    </tr>
    <tr>
    <td> <input type="text" name="name"></td>
    <td> <input type="text" name="gender"></td>
    <td> <input type="text" name="age"></td>
    <td> <input type="submit" name="submit"></td>
    </tr>
    <tr>
    <td> <input type="text" name="name"></td>
    <td> <input type="text" name="gender"></td>
    <td> <input type="text" name="age"></td>
    <td> <input type="submit" name="submit"></td>
    </tr>
    <tr>
    <td> <input type="text" name="name"></td>
    <td> <input type="text" name="gender"></td>
    <td> <input type="text" name="age"></td>
    <td> <input type="submit" name="submit"></td>
    </tr>
    <tr>
    <td> <input type="text" name="name"></td>
    <td> <input type="text" name="gender"></td>
    <td> <input type="text" name="age"></td>
    <td> <input type="submit" name="submit"></td>
    </tr>

</table>
</center>
<div class="container">
<div class="row">
<div class="col-md-6 offset-md-3">
<div class="card">
<div class="card-header">
login
</div>
<div class="card-body">
<form method="POST" action="{{route('login.submit)}}">
@csrf
<div class="form-group">
<label for "email">email address</label>

<input type="text" class="form-control" id="email" name="email">
@error('email')
<span class="text-danger"> {{$message}}</span>
@enderror

<div class="form-group">
<label for "password">password</label>

<input type="password" class="form-control" id="password" name="password">
@error('password')
<span class="text-danger"> {{$message}}</span>
@enderror
</div>
<button type="submit" class="btn-btn-primary">submit </button>
</form>
</div>
</div>
</div>
</div>
</html>
