@extends("admintheme")
@section("content")
<h2></h2>


<div class="container">
<br>
<br>
<br>
<br>
<div class="row">

<div class="col col-12 col-sm-4 col-md-4 col-lg-4" >
<br>
<br>

</div>




<table class="table table table-dark">
<tr><th scope="row">sponsor_id</th>
    <th scope="row">spname</th>
    <th scope="row">email</th>
    <th scope="row">place</th>
    <th scope="row">occu</th>
    

    
   <th></th>
   <th></th>
   
</tr>
@foreach($adds as $add)

<tr class="table-primary">
   
    <td >{{$add->sponsor_id}}</td>
  
    <td>{{$add->spname}}</td>
   
    <td>{{$add->email}}</td>

    <td>{{$add->place}}</td>

    <td>{{$add->occu}}</td>

   
     



    <td><a onclick="return confirm('Are you sure want to delete ?')" class="btn btn-danger" href="/userdeleteprocess/{{$add->id}}">DELETE</a></td>

    <td><a class="btn btn-primary" href="/usereditview/{{$add->id}}">EDIT</a></td>
</tr>

@endforeach
</table>







@endsection

</div>
</div>