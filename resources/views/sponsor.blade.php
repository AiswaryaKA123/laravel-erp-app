@extends('theme')
@section('content')



<style>
div.col2{
    background-color:DodgerBlue;
}
    </style>
</head>
<body>
<div class="container">
<center><h2>Sponsors details</h2></center>
    <div class="row">
    <div class="col1 col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2"></div>
        <div class="col2 col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
        <br>
        <br>
        <form action="/sponsor_save" method="post">
        {{csrf_field()}}
        <div class="form-group">
                    <label><h5>Sponsor_id</h5></label>
                    <input type="text" class="form-control" name="sponsor_id" required>
                </div>
                <p></p>

                <div class="form-group">
                    <label><h5>Sponsor Name</h5></label>
                    <input type="text" class="form-control" name="spname" placeholder="" required>
                </div>
                <p></p>

                <div class="form-group">
                    <label><h5>Email</h5></label>
                    <input type="text" class="form-control" name="email" placeholder="" required>
                </div>
                <p></p>
                <p></p>
                <div class="form-group">
                    <label><h5>Place</h5></label>
                    <input type="text" class="form-control" name="place" placeholder="" required>
                </div>
                <p></p>
                <div class="form-group">
                    <label><h5>Occupation</h5></label>
                    <input type="text" class="form-control" name="occu" placeholder="" required>
                </div>
                <p></p>
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-danger">Submit</button>
                </form>
        </div>
        <div class="col col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2"></div>
    </div>
</div>

@endsection