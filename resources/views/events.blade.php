
@extends('theme')
@section('content')



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <style>
    
    div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}
</style>
</head>
<body>
<div class="gallery">
  <a target="_blank" href="https://guardianangelsps.com/wp-content/uploads/2018/04/Guardian-Angels-Public-School-4.jpg">
    <img src="https://guardianangelsps.com/wp-content/uploads/2018/04/Guardian-Angels-Public-School-4.jpg" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">Sports Day</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://www.mbiseed.com/uploads/events/school/4847ORGE7034.resized_thumb.JPG">
    <img src="https://www.mbiseed.com/uploads/events/school/4847ORGE7034.resized_thumb.JPG" alt="Forest" width="600" height="400">
  </a>
  <div class="desc">Medical Camp</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://swachhbharat.mygov.in/system/storage/serve/673190/test3.jpg%3Fitok%3D1">
    <img src="https://swachhbharat.mygov.in/system/storage/serve/673190/test3.jpg%3Fitok%3D1" alt="Northern Lights" width="600" height="400">
  </a>
  <div class="desc">Swachhbhrat</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://gbshse.gov.in/sites/default/files/styles/institution_slideshow_modal/public/institution_assets/07.01/3%20classroom.jpg?itok=NkH1GegI">
    <img src="https://gbshse.gov.in/sites/default/files/styles/institution_slideshow_modal/public/institution_assets/07.01/3%20classroom.jpg?itok=NkH1GegI" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Natural Club</div>
</div>
@endsection
</body>
</html>