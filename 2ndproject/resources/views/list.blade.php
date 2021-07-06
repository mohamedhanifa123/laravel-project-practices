<center>
<h1> Members List </h1>

<table border="1">
<tr>
    <td> id </td>

    <td> name </td>

    <td> age </td>

    <td> mobile </td>

    <td> Operation </td>
</tr>
@foreach($members as $member)
<tr>
    <td> {{$member['id']}} </td>
    <td> {{$member['name']}} </td>
    <td> {{$member['age']}} </td>
    <td> {{$member['mobile']}} </td>
    <td><button> <a href={{ "delete/".$member['id'] }}> Delete </a>
    |<a href={{ "edit/".$member['id'] }}> Edit </a>  </button></td>
</tr>   

@endforeach



</table>
</center>

<!--<button> <a href={{ route("comment",$add['id']) }}>  </a> -->