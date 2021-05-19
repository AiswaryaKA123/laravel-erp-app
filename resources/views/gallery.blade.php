@extends('theme')
@section('content')



<!DOCTYPE html>
<html lang="en">
<head>
<style>
div.gallery{
    margin:15px;
    border:3px solid #ccc;
    float:left;
    width:380px;
}
div.gallery:hover{
    border:1px solid #777;
}
div.gallery img{
    width:100%;
    height:auto;
}
div.desc{
    padding:15px;
    text-align:center;
}




</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
</head>
<body>
<br>
<div class="container">
    <div class="row">
        <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="http://www.guardianangelcs.com/wp-content/uploads/guardian-homeslides-slide-04-980x384.jpg" class="d-block w-100" alt="...">
    </div>
    </div>
</div>
        </div>
        <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="http://www.guardianangelcs.com/wp-content/uploads/guardian-pagephotos-parents.jpg" class="d-block w-100" alt="...">
    </div>
    </div>
</div>
        </div>
        <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRnZedypHygS0PRqwlqg64I8WuwCAhKmVEvfA&usqp=CAU" class="d-block w-100" alt="...">
    </div>
    </div>
</div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://guardianangelsps.com/wp-content/uploads/2018/04/Guardian-Angels-Public-School-18.jpg" class="d-block w-100" alt="...">
    </div>
    </div>
</div>
        </div>
        <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://gbshse.gov.in/sites/default/files/styles/institution_slideshow/public/institution_assets/07.01/1%20Staff%20Room.jpg?itok=LWS2WHJf" class="d-block w-100" alt="...">
    </div>
    </div>
</div>
        </div>
        <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://cache.careers360.mobi/media/schools/social-media/media-gallery/9183/2019/8/26/Guardian%20Angels%20Public%20School-Conferencehall.jpg" class="d-block w-100" alt="...">
    </div>
    </div>
</div>
        </div>
    </div>
</div>
    
@endsection
</body>
</html>