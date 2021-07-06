


<h1> postList </h1>

<table border="1">
<tr>
    <td> id </td>

    <td> name </td>

    <td> description </td>
</tr>
@foreach($posts as $add)
<tr>
    <td> <a href="{{route('comments',$add['id'])}}">{{ $add['id'] }} </a> </td>
    <td>  {{ $add['name'] }} </td>
    <td>  {{ $add['description'] }} </td>
    
</tr>   

@endforeach



</table>


