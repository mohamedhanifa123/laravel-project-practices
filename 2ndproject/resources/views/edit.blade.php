<center>
<h1> Update Details </h1>

<form action="/edit" method="POST">
@csrf
    <input type="hidden" name="id" value="{{$data['id']}}">

    <input type="text" name="name" value="{{$data['name']}}"> <br> <br>

    <input type="text" name="age" value="{{$data['age']}}"> <br> <br>

    <input type="text" name="mobile" value="{{$data['mobile']}}"> <br> <br>
    <button type="submit"> update </button>

</form>
</center>