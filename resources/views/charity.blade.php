@extends('theme')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
<style>
h1{
    
}
div.col1{
    background-image:url("https://d2r2ijn7njrktv.cloudfront.net/IL/uploads/2021/03/03155125/63462723-RighttoEducation.jpg");
}
div.col2{
    background-color:blue;
}
</style>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Charity</title>
</head>

<body>
<div class="container">
<center><h2>Charity Donation Form</h2></center>
    <div class="row">
        <div class="col1 col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2"></div>
        <div class="col2 col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
        <br>
        <br>
        <div class="form-group">
                    <label><h5>Charity id</h5></label>
                    <input type="text" class="form-control" name="id" placeholder="ex 1234" required>
                </div>
                <p></p>
                <div class="form-group">
                    <label><h5>Full name</h5></label>
                    <label><input type="text" class="form-control" name="fname" placeholder="First name" required></label>
                    <label><input type="text" class="form-control" name="lname" placeholder="Last name" required></label>
                </div>
                <p></p>
                <div class="form-group">
                    <label><h5>Email</h5></label>
                    <input type="text" class="form-control" name="email" placeholder="abc123@gmail.com" required>
                </div>
                <p></p>
                <div class="form-group">
                    <label><h5>Contact Number</h5></label>
                    <label><input type="text" class="form-control" name="acode" placeholder="Area code" required></label>
                    <label><input type="text" class="form-control" name="phno" placeholder="Phone Number" required></label>
                </div>
                <p></p>
                <div class="form-group">
                    <label><h5>Amount</h5></label>
                    <input type="text" class="form-control" name="amount" placeholder="donation amount" required>
                </div>
                <p></p>
                <div class="form-group">
                        <label><h5>Message</h5></label>
                        <textarea name="msg" cols="30" rows="8" class="form-control"required></textarea>
                        
                    </div>
                    <p></p>
                    <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submmit" class="btn btn-primary">Submit</button>











                </form>
        </div>
        <div class="col col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2"></div>
    </div>
</div>
</body>
</html>
@endsection