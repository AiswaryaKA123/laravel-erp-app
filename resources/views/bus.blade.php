@extends('theme')
@section('content')

<div class="container">
<center><h2>Transportation Details</h2></center>
    <div class="row">
        <div class="col1 col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2"></div>
        <div class="col2 col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
        <br>
        <br>
            <form action="/bus_save" method="post">
            {{csrf_field()}}
                <div class="form-group">
                    <label><h5>Bus no</h5></label>
                    <input type="text" class="form-control" name="busno" required>
                </div>
                <p></p>
                <div class="form-group">
                    <label><h5>Driver name</h5></label>
                    <input type="text" class="form-control" name="dname" required>
                </div>
                <p></p>
                <div class="form-group">
                    <label><h5>Bus-Route</h5></label>
                    <input type="text" class="form-control" name="route"  required>
                </div>
                <p></p>
                <div class="form-group">
                    <label><h5>Bus fee</h5></label>
                    <input type="text" class="form-control" name="bfee" required>
                </div>
                <p></p>
                <div class="form-group">
                    <label><h5>date to be remitted</h5></label>
                    <input type="date" class="form-control" name="date" required>
                </div>
                <p></p>
                

                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submmit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2"></div>
    </div>
</div>
                
            

@endsection




