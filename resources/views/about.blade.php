@extends('layouts.layout')

@section('content')

<link href="css/app.css" rel="stylesheet">

<section>
  <div id="mainContainer">
    <div id="title" style="width: 50%; margin: 0 auto;">
      <h1> Participa en Ohana </h1>
      <img src="{{asset('assets/images/participaOhana.jpg')}}" alt="Participa!" />
    </div>
    <h2>Si eres... </h2>
    <ul>
      <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
      <li>Phasellus eu nulla ac erat lacinia egestas.</li>
      <li>Proin nec tellus placerat, cursus odio nec, facilisis nibh.</li>
      <li>Nam eget nibh efficitur, molestie sem sed, vestibulum risus.</li>
      <li>Nunc euismod felis vitae felis vehicula, vel vehicula tellus pulvinar.</li>
    </ul>

    <h2> ...y quieres impulsar a los niños de México, únete a Ohana!</h2>
    <h3> para unirte solo tienes que: </h3>
    <ul>
      <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
      <li>Phasellus eu nulla ac erat lacinia egestas.</li>
      <li>Proin nec tellus placerat, cursus odio nec, facilisis nibh.</li>
    </ul>
  </div>
</section>

@endsection
