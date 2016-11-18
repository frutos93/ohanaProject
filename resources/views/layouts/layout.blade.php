<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>

<style>
    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
        width: 60%;
        margin: auto;
    }
    .img-center {
        margin:0 auto;
    }
    .no-padding {
        padding: 0;
    }
    .content-green {
        background-color: #74B02B
    }
    .content-blue {
        background-color: #3BA69E;
    }
    section {
        padding: 20px 0;
    }
    .rounded-border {
        border-radius: 20px;
    }
</style>


<body>
    @include('layouts.navBar')
    @yield('content')
</body>

</html>