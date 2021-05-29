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
    <th scope="row">flexRadioDefault</th>
    <th scope="row">dob</th>
    <th scope="row">address</th>
    <th scope="row">faname</th>
    <th scope="row">mname</th>
    <th scope="row">gname</th>
    <th scope="row">focc</th>
    <th scope="row">mocc</th>
    <th scope="row">class</th>
    <th scope="row">section</th>
    <th scope="row">email</th>
    <th scope="row">phoneno</th>
    <th scope="row">username</th>
    <th scope="row">password</th>
    <th scope="row">cpassword</th>
    
   <th></th>
   <th></th>
   
</tr>
@foreach($adds as $add)

<tr class="table-primary">
   
    <td >{{$add->fname}}</td>
  
    <td>{{$add->gname}}</td>
   
    <td>{{$add->bday}}</td>

    <td>{{$add->course}}</td>

    <td>{{$add->gender}}</td>

    <td>{{$add->pno}}</td>

    <td>{{$add->cadd}}</td>

    <td>{{$add->lemail}}</td>



    <td><a onclick="return confirm('Are you sure want to delete ?')" class="btn btn-danger" href="/userdeleteprocess/{{$add->id}}">DELETE</a></td>

    <td><a class="btn btn-primary" href="/usereditview/{{$add->id}}">EDIT</a></td>
</tr>

@endforeach
</table>







@endsection

</div>
</div>