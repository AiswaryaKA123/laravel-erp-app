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
<tr><th scope="row">studfname</th>
    <th scope="row">studlname</th>
    <th scope="row">studid</th>
    <th scope="row">studcaddress</th>
    <th scope="row">studpaddress</th>
    <th scope="row">studcast</th>
    <th scope="row">studreligion</th>
    <th scope="row">studstate</th>
    <th scope="row">studcity</th>
    <th scope="row">studpin</th>
    <th scope="row">studcountry</th>
    <th scope="row">studemail</th>
    <th scope="row">studphoneno</th>

    
   <th></th>
   <th></th>
   
</tr>
@foreach($adds as $add)

<tr class="table-primary">
   
    <td >{{$add->studfname}}</td>
  
    <td>{{$add->studlname}}</td>
   
    <td>{{$add->studid}}</td>

    <td>{{$add->studcaddress}}</td>

    <td>{{$add->studpaddress}}</td>

    <td>{{$add->studcast}}</td>

    <td>{{$add->studreligion}}</td>

    <td>{{$add->studstate}}</td>
    <td >{{$add->studcity}}</td>
  
    <td>{{$add->studpin}}</td>
   
    <td>{{$add->studcountry}}</td>

    <td>{{$add->studemail}}</td>

    <td>{{$add->studphoneno}}</td>

     



    <td><a onclick="return confirm('Are you sure want to delete ?')" class="btn btn-danger" href="/userdeleteprocess/{{$add->id}}">DELETE</a></td>

    <td><a class="btn btn-primary" href="/usereditview/{{$add->id}}">EDIT</a></td>
</tr>

@endforeach
</table>







@endsection

</div>
</div>