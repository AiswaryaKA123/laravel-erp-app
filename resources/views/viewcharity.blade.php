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
<tr><th scope="row">fname</th>
    <th scope="row">lname</th>
    <th scope="row">email</th>
    <th scope="row">acode</th>
    <th scope="row">phno</th>
    <th scope="row">amount</th>
    <th scope="row">message</th>
    
   <th></th>
   <th></th>
   
</tr>
@foreach($adds as $add)

<tr class="table-primary">
   
    <td >{{$add->fname}}</td>
  
    <td>{{$add->lname}}</td>
   
    <td>{{$add->email}}</td>

    <td>{{$add->acode}}</td>

    <td>{{$add->phno}}</td>

    <td>{{$add->amount}}</td>

    <td>{{$add->message}}</td>

    <td>{{$add->lemail}}</td>



    <td><a onclick="return confirm('Are you sure want to delete ?')" class="btn btn-danger" href="/userdeleteprocess/{{$add->id}}">DELETE</a></td>

    <td><a class="btn btn-primary" href="/usereditview/{{$add->id}}">EDIT</a></td>
</tr>

@endforeach
</table>







@endsection

</div>
</div>