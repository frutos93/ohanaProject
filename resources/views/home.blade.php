@extends('layouts.layout')

@section('content')
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

      if (imageCount == 0) imageCount = total;

      image.src = "assets/images/" + imageCount + ".jpg";
  }

</script>


    </div>

    <div id="container">
        <div class="embed-responsive embed-responsive-16by9">
            <img src="assets/images/1.jpg" id="img"/>
            <!--<iframe class="embed-responsive-item" src="assets/images/1.jpg" id="img"></iframe> -->
            <div id=left_holder><img onClick="slide(-1)" class="left" src="{{asset('assets/images/left_arrow.png')}}"/></div>
            <div id=right_holder><img onClick="slide(1)" class="right" src="{{asset('assets/images/right_arrow.png')}}"/></div>
        </div>
    </div>

    <div class="box1">
    <img src="{{asset('assets/images/logo.png')}}"  style="width:200px;height:210px;border-radius:10px;" align="right">
    <h2 >¿Qué es Ohana?</h2>
   <div class="boxed1">
      Ohana es una Asociación Civil conformada por estudiantes de distintas
      universidades de México que por medio del voluntariado promueve el
      desarrollo social, el amor a la educación, el cuidado del medio ambiente,
      la importancia de los valores y el deseo de progresar como ciudadanos en
      los niños de casas hogar y escasos recursos.

  </div>

  </div>

    <div class="box2">
    <h3 align="right">¿Quiénes lo conforman?</h3>
    <div class="boxed2">
      Conformado por grupos estudiantiles de distintas universidades y
      preparatorias de Nuevo León e integrado por una mesa directiva y
      gabinetes de trabajo. Todos en conjunto estamos conformados por
      jóvenes voluntarios comprometidos en transformar comunidades. 
    </div>

    </div>


  </body>
@endsection
