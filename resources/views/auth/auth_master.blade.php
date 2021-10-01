<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{--    <!-- boostrap -->--}}
    {{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">--}}

    {{--    <!-- styles -->--}}
    {{--    <link href="{{asset('styles/auth.css')}}" rel="stylesheet">--}}

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/walter.css">

    <title>Caroline</title>
</head>
<body style="background-image: url('../../images/loginbackgrond.jpg'); background-size: cover;
    vertical-align: middle;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    min-height: 100vh;
    position: relative;
    overflow: hidden;">
<!-- PRE LOADER -->
<section class="preloader">
    <div class="spinner">
        <span></span>
    </div>
</section>
@yield('content')
<!-- boostrap -->
{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"--}}
{{--        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"--}}
{{--        crossorigin="anonymous"></script>--}}
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
