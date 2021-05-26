
    
   @extends('theme') 
   @section('content')     
    
    
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
<style>
div.col2{
    background-image:url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2AmzFVI3ATWejXNPJr9Ae9QLkK5TQJZVg8cgOs3KoFqFRY3Gl-M_Uxp3Xz28p_aw56YM&usqp=CAU");
}



</style>
</head>
<body>
<div class="container">
<center><h2>Contact US</h2></center>
<center><h4>Email us with any questions or enquriries or call 518-387-9327.We would be happy to answer your questions and a setup a meeting with you.Gaudium fee management is always with you</h4></center>
    <div class="row">
        <div class="col1 col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2"></div>
        <div class="col2 col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
        <br>
        <br>
        <form action="/addstud" method="post">
        @csrf
        <div class="form-group">
                    <label><h5>Name of Student</h5></label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <p></p>

                <div class="form-group">
                    <label><h5>Email</h5></label>
                    <input type="text" class="form-control" name="email" required>
                </div>
                <p></p>

                <div class="form-group">
                    <label><h5>Subject</h5></label>
                    <input type="text" class="form-control" name="subject" required>
                </div>
                <p></p>
                <div class="form-group">
                    <label><h5>Message</h5></label>
                    <textarea name="address" cols="30" rows="8" class="form-control"required></textarea>

                </div>
                <p></p>
                <br>
                        <button class="btn btn-outline-success" type="submit">Send email</button>
                    <br>
                    <br>
                </form>
        </div>
        <div class="col col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2"></div>
    </div>
</div>
@endsection
</body>
</html>
    
</body>
</html>