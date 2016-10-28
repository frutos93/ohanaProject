@extends('layouts.app')

@section('content')
<head>
    <style type ="text/css">

      #container {
        height: 450px;
        width: 650px;
        margin: auto;
        position: relative;
      }

      #img {
        height: 450px;
        width: 650px;
        position: absolute;
      }

      #left_holder {
        height: 450px;
        width: 100px;
        position: absolute;
        left: 0px;
        top: 0px;
      }

      #right_holder {
        height: 450px;
        width: 100px;
        position: absolute;
        right: 0px;
        top: 0px;
      }

      .left {
        height: 50px;
        width: 50px;
        position: absolute;
        top: 40%;
        left: 0px;
      }

      .right {
        height: 50px;
        width: 50px;
        position: absolute;
        top: 40%;
        right: 0px;
      }
      p {
          color: white;
          width: 500px;
          border: 25px;
          padding: 25px;
          margin: 25px;
      }

      .boxed1 {
          color: white;
          width: 500px;
          border: 25px;
          padding: 15px;
          margin: 25px;
          background: #3BAA9F;
          border-radius: 20px;
      }

      .boxed2 {
          color: white;
          width: 500px;
          border: 25px;
          padding: 15px;
          margin: 25px;
          background: yellowgreen;
          border-radius: 20px;
      }

      .box1 {
          color: white;
          
          border: 25px;
          padding: 15px;
          
          background: yellowgreen;
          
      }
      .box2 {
          color: white;
          position: absolute;
          right: 0px;
          width: 550px;
          border: 25px;
          padding: 15px;
          
          background: #3BAA9F;
          
      }
      
</style>

<script type="text/javascript">
  var imageCount = 1;
  var total = 4;

  function slide(x) {
      var image = document.getElementById('img');
      imageCount = imageCount + x;
      if (imageCount == 5) imageCount = 1;
      
      if (imageCount == 0) imageCount = 4;

      image.src = "images/" + imageCount + ".jpg";  
  }

</script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>

    <!-- Bootstrap core CSS -->
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
  </head>
  <body>

   

    <div class="container">
   
    </div>

    <div id="container"> 
    <img src="images/1.jpg" id="img"/>
    <div id=left_holder><img onClick="slide(-1)" class="left" src="images/left_arrow.png"/></div>
    <div id=right_holder><img onClick="slide(1)" class="right" src="images/right_arrow.png"/></div>
    </div>
    
    <div class="box1">
    <img src="images/logo.png"  style="width:200px;height:210px;border-radius:10px;" align="right">
    <h2 >¿Qué es Ohana?</h2>
   <div class="boxed1">
  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut
     labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
     laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate
      velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non 
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

  </div>

  </div>
    
    <div class="box2">
    <h3 align="right">¿Quiénes lo conforman?</h3>
    <div class="boxed2">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut
     labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
     laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate
      velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non 
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>

    </div>

  
  </body>
@endsection
