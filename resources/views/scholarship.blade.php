@extends('theme')
@section('content')
<style>
    .btn.btn-primary:hover{
        opacity: .7;
        background: #0066ff;
    }
    div.col{
        background-image:url("https://media.istockphoto.com/videos/kids-drawing-on-chalkboard-animated-backgroundperspective-view-back-video-id1166974689?s=640x640");
    }
</style>
<div class="container">
<center><h2>School Scholarship Application form</h2></center>
    <div class="row">
        <div class="col col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2"></div>
        <div class="col col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
        <br>
        <br>
            <form action="/scholarshipadd" method="post">
                <div class="form-group">
                    <label><h5>First name</h5></label>
                    <input type="text" class="form-control" name="studfname" placeholder="Enter student first name" required>
                </div>
                <p></p>
                <div class="form-group">
                    <label><h5>Last name</h5></label>
                    <input type="text" class="form-control" name="studlname" placeholder="Enter Student last name" required>
                </div>
                <p></p>
                <div class="form-group">
                    <label><h5>Student ID</h5></label>
                    <input type="text" class="form-control" name="studid" placeholder="ex: 1234" required>
                </div>
                <p></p>
                <div class="form-group">
                    <label><h5>Address</h5></label>
                    <textarea class="form-control" id="cadd" name="studcaddress" rows="5" placeholder="Enter student communication address" required></textarea>
                </div>
                <p></p>
                Same as communication address &nbsp;&nbsp;<input class="form-check-input" type="checkbox" onclick="copyValue()">
                <p></p>
                <div class="form-group">
                <textarea class="form-control" id="padd" name="studpaddress" rows="5" placeholder="Enter student permanent address" required></textarea>
                </div>
                <p></p>
                <div class="form-group">
                    <label><h5>Caste</h5></label>
                    <input class="form-control" name="studcast" placeholder="Enter student caste" required>
                </div>
                <p></p>
                <div class="form-group">
                    <label><h5>Religion</h5></label>
                    <input class="form-control" name="studreligion" placeholder="Enter student religion" required>
                </div>
                <p></p>
                <div class="form-group">
                    <label><h5>State</h5></label>
                    <input class="form-control" name="studstate" placeholder="Enter student state" required>
                </div>
                <p></p>
                <div class="form-group">
                    <label><h5>City</h5></label>
                    <input class="form-control" name="studcity" placeholder="Enter student city" required>
                </div>
                <p></p>
                <div class="form-group">
                    <label><h5>Pin Code</h5></label>
                    <input class="form-control" name="studpin" placeholder="Enter student PIN code" required>
                </div>
                <p></p>
                <div class="form-group">
                    <label><h5>Country</h5></label>
                    <input class="form-control" name="studcountry" placeholder="Enter student country" required>
                </div>
                <p></p>
                <div class="form-group">
                    <label><h5>Email</h5></label>
                    <input class="form-control" name="studemail" placeholder="Enter student email" required>
                </div>
                <p></p>
                <div class="form-group">
                    <label><h5>Phone no:</h5></label>
                    <input class="form-control" name="studphoneno" placeholder="Enter student Phone no:" required>
                </div>
                <p></p>
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submmit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2"></div>
    </div>
</div>

<script>
    function copyValue()
    {
        var n1=document.getElementById("cadd");
        var n2=document.getElementById("padd");
        n2.value=n1.value;
    }
</script>
@endsection