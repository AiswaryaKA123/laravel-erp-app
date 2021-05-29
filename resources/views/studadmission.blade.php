@extends('theme')
@section('content')
<html>
<head>
<style>

div.col2{
    background-color:lightblue;
}
div.col1{
    background-image:url("https://www.vignanschools.org/images/ad-process-1.jpg");
}
</style>


</head>
<body>

<div class="container">
<center><h2>Student Application form</h2></center>
    <div class="row">
        <div class="col1 col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2"></div>
        <div class="col2 col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
        <br>
        <br>
        <form action="/addstud" method="post">
        @csrf
        <div class="form-group">
                    <label><h5>Name of student</h5></label>
                    <input type="text" class="form-control" name="sname" placeholder="student name" required>
                </div>
                <p></p>
                <div class="form-group">
                    <label><h5>Admission sought for class</h5>
                    <input type="text" class="form-control" name="class" placeholder="class" required></label>
                    <label><h5>Academic year</h5><input type="date" class="form-control" name="admyear"required></label>
                
                </div>
                <p></p>
                <div class="form-group">
                    <label><h5>Date of Birth</h5><input type="date" class="form-control" name="dob" required></label>
                    <label><h5>Aadhar no</h5><input type="text" class="form-control" name="Aadhaar" placeholder="Aadhaar no" required></label>
                </div>
                <p></p>
                <div class="form-group">
                <label><h5>place of birth</h5><input type="text" class="form-control" name="pob" placeholder="Aadhaar no" required></label>
                <label><h5>District</h5><input type="text" class="form-control" name="district" placeholder="Select state" required></label>
                    
                </div>
                <div class="form-group">
                        <label><h5>Residential Address</h5></label>
                        <textarea name="address" cols="30" rows="8" class="form-control"required></textarea>
                        
                    </div>
                    <p></p>
                
                <div class="form-group">
                    <label><h5>Pin Code</h5>
                    <input class="form-control" name="pin" placeholder="Enter student PIN code" required></label>
                </div>
                <p></p>
                <div class="form-group">
                    <label><h5>Blood Group</h5><input class="form-control" name="blgrp"  required></label>
                </div>
                <p></p>
                <div class="form-group">
                    <label><h5>Identification marks</h5>
                    1<input class="form-control" name="idmark1" required>
                    2<input class="form-control" name="idmark2" required></label>
                </div>
                <p></p>
                
                <p></p>
                
                <div class="form-group">
                    <label><h5>Name of the previous school & location</h5></label>
                    <input class="form-control" name="prevschool" required>
                    </div>
                <p></p>
                <div class="form-group">
                    <label><h5>Class</h5></label>
                    <input class="form-control" name="prevclass" required>
                    </div>
                <p></p>
                <div class="form-group">
                    <label><h5>Year of study</h5></label>
                    <input class="form-control" name="prevyear" >
                    </div>
                <p></p>
                    
                <div class="form-group">
                    <label><h5>Percentage/Grade</h5></label>
                    <input class="form-control" name="grade" >
                    </div>
                <p></p>
                    
                
                <div class="form-group">
                    <label><h5>Achievements</h5></label><br>
                    please mention the achievements ,if any,of your child in academics/extra co-circular activities
                    <input class="form-control" name="achieve">
                </div>
                <p></p>
                <div class="form-group">
                    <label><h5>General Behaviour</h5></label>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="checkbox" class="form-check-input" name="gbehaviour" value="mild">
                    <label>Mild</label>&nbsp;&nbsp;&nbsp;&nbsp;
            
                    <input type="checkbox" class="form-check-input" name="gbehaviour" value="norm">
                    <label>Normal</label>&nbsp;&nbsp;&nbsp;&nbsp;

                    <input type="checkbox" class="form-check-input" name="gbehaviour" value="hyper">
                    <label>Hyperactive</label>&nbsp;&nbsp;&nbsp;&nbsp;
                
                </div>
                <p></p>
                <div class="form-group">
                
                    please mention in brief,if there is any history of  illness,alergy,physical/psycolgical illness
                    <input class="form-control" name="illness">
                </div>
                <p></p>
                <div class="form-group">
                    <label><h6>Second language in previous class</h6><input class="form-control" name="secondlang" ></label>
                    <label><h6>Third language in previous class</h5><input class="form-control" name="thirdlang" ></label>
                </div>
                <p></p>
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submmit" class="btn btn-danger">Submit</button>
        </form>
        </div>
        <div class="col col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2"></div>
    </div>
</div>
@endsection
</body>
</html>
