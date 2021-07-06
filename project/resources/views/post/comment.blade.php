<h1> Comments list </h1>
<button> <a href="{{route('post-list')}}"> Back </a> </button>
<table border="1">

<tr>
<td> id </td>

<td> post_id </td>

<td> comments </td>

</tr>

@foreach($comments as $comment)
<tr>

<td> {{ $comment ['id'] }} </td>
<td> {{ $comment ['post_id']}} </td>
<td> {{ $comment ['comments']}} </td>
</tr>
@endforeach






</table>