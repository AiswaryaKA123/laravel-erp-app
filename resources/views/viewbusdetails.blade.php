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
<tr><th scope="row">busno</th>
    <th scope="row">dname</th>
    <th scope="row">route</th>
    <th scope="row">bfee</th>
    <th scope="row">date</th>
    
    
   <th></th>
   <th></th>
   
</tr>
@foreach($adds as $add)

<tr class="table-primary">
   
    <td >{{$add->busno}}</td>
  
    <td>{{$add->dname}}</td>
   
    <td>{{$add->route}}</td>

    <td>{{$add->bfee}}</td>

    <td>{{$add->date}}</td>

    



    <td><a onclick="return confirm('Are you sure want to delete ?')" class="btn btn-danger" href="/userdeleteprocess/{{$add->id}}">DELETE</a></td>

    <td><a class="btn btn-primary" href="/usereditview/{{$add->id}}">EDIT</a></td>
</tr>

@endforeach
</table>







@endsection

</div>
</div>