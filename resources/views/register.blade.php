<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | ERP Fee Collection</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            min-height: 100hv;
            background: url("https://www.99images.com/download-image/206242/1280x2272");
            display: flex;
            font-family: sans-serif;
        }
        .container{
            margin: auto;
            width: 700px;
            max-width: 90%;
        }
        .h1{
            text-align: center;
            margin-bottom: 24px;
        }
        .container form{
            width: 100%;
            height: 100%;
            padding: 20px;
            background: white;
            border-radius: 4px;
            box-shadow: 0 8px 16px rgba(0,0,0,.3);
        }
        .container form h2{
            text-align: center;
            margin-bottom: 24px;
            color: #222;
        }
        .container form .form-control{
            width: 100%;
            height: 40px;
            background: white;
            border-radius: 4px;
            border: 1px solid silver;
            margin: 10px 0 10px 0;
            padding: 0 10px;
        }
        .container form .btn{
            margin-left: 50%;
            transform: translateX(-50%);
            width: 45%;
            height: 40px;
            border: 0;
            background: #009933;
            cursor: pointer;
            font-size: 18px;
            color: white;
            border-radius: 4px;
            transition: .3s;
        }
        .container form .btn:hover{
            opacity: .7;
            background: #009933;
        }
    </style>
</head>
<body>
            <div class="container">
            <br>
            <br>
            <center><font color="white"><h1>ERP Fee Collection</h1></font></center>
            <br>
                <form action="/registersave" method="post">
                <h2>Sign Up</h2>
                @csrf
                <div class="alert alert-warning" role="alert">
                        Already have an account&nbsp;&nbsp;<a href="/login">Sign In</a>
                    </div>
                    <br>
                    @if(Session::get('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                    @endif
                    @if(Session::get('fail'))
                    <div class="alert alert-danger">
                        {{Session::get('fail')}}
                    </div>
                    @endif
                    <div class="form-group">
                        <label><h5>First name</h5></label>
                        <input type="text" class="form-control" value="{{old('fname')}}" name="fname" placeholder="Enter first name" required>
                    </div>
                    <p></p>
                    <div class="form-group">
                        <label><h5>Last name</h5></label>
                        <input type="text" class="form-control" value="{{old('lname')}}" name="lname" placeholder="Enter last name" required>
                    </div>
                    <p></p>
                    <div class="form-group">
                        <label><h5>Gender</h5></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio"  name="flexRadioDefault" value="male" class="form-check-input" required> <label><h6>Male</h6></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio"  name="flexRadioDefault" value="female" class="form-check-input" required> <label><h6>Female</h6></label>
                    </div>
                    <p></p>
                    <div class="form-group">
                        <label><h5>Date of birth</h5></label>
                        <input type="date" value="{{old('dob')}}" name="dob" class="form-control" required>
                    </div>
                    <p></p>
                    <div class="form-group">
                        <label><h5>Address</h5></label>
                        <textarea name="address" cols="30" rows="8" class="form-control" placeholder="Communication address" value="{{old('address')}}" required></textarea>
                        
                    </div>
                    <p></p>
                    <div class="form-group">
                        <label><h5>Father's name</h5></label>
                        <input type="text" class="form-control" name="faname" placeholder="Enter Father's name" value="{{old('faname')}}" required>
                    </div>
                    <p></p>
                    <div class="form-group">
                        <label><h5>Mother's name</h5></label>
                        <input type="text" class="form-control" name="mname" placeholder="Enter mother's name" value="{{old('mname')}}" required>
                    </div>
                    <p></p>
                    <div class="form-group">
                        <label><h5>Guardian name</h5></label>
                        <input type="text" class="form-control" name="gname" placeholder="Enter guardian name" value="{{old('gname')}}" required>
                    </div>
                    <p></p>
                    <div class="form-group">
                        <label><h5>Father's occupation</h5></label>
                        <input type="text" class="form-control" name="focc" placeholder="Enter Father's occupation" value="{{old('focc')}}" required>
                    </div>
                    <p></p>
                    <div class="form-group">
                        <label><h5>Mother's occupation</h5></label>
                        <input type="text" class="form-control" name="mocc" placeholder="Enter mother's occupation" value="{{old('mocc')}}" required>
                    </div>
                    <p></p>
                    <div class="form-group">
                        <label><h5>Class</h5></label>
                        <input type="text" class="form-control" name="class" placeholder="Enter class" value="{{old('class')}}" required>
                    </div>
                    <p></p>
                    <div class="form-group">
                        <label><h5>Division / Section</h5></label>
                        <input type="text" class="form-control" name="section" placeholder="Enter division / section" value="{{old('section')}}" required>
                    </div>
                    <p></p>
                    <div class="form-group">
                        <label><h5>Email</h5></label>
                        <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{old('email')}}" >
                        <span class="text-danger">@error('email'){{$message}} @enderror</span>
                    </div>
                    <p></p>
                    <div class="form-group">
                        <label><h5>Phone no:</h5></label>
                        <input type="text" class="form-control" name="phoneno" placeholder="Enter phone no:" value="{{old('phno')}}" required>
                    </div>
                    <p></p>
                    <div class="form-group">
                        <label><h5>Username</h5></label>
                        <input type="text" class="form-control" name="username" placeholder="Enter username" value="{{old('username')}}" >
                        <span class="text-danger">@error('username'){{$message}} @enderror</span>
                    </div>
                    <p></p>
                    <div class="form-group">
                        <label><h5>Password</h5></label>
                        <input type="password" class="form-control" name="password" placeholder="Enter password" >
                        <span class="text-danger">@error('password'){{$message}} @enderror</span>
                    </div>
                    <p></p>
                    <div class="form-group">
                        <label><h5>Confirm password</h5></label>
                        <input type="password" class="form-control" name="cpassword" placeholder="Re-enter password" >
                        <span class="text-danger">@error('password'){{$message}} @enderror</span>
                    </div>
                    <p></p>
                    <br>
                        <button class="btn btn-outline-success" type="submit">Register</button>
                    <br>
                    <br>
                </form>
                <br>
                <br>
            </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html>