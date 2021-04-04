<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-comm project</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

</head>
<body>
{{ View::make('header')}}
@yield('content')
{{ View::make('footer')}}
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>
<style>
    .custom-login {
        height: 500px;
        padding-top: 100px
    }

    img.slider-img {
        height: 400px !important;
    }

    .custom-product {
        height: 600px
    }

    .slider-text {
        background-color: #24465454 !important;
    }

    .trending-img {
        height: 100px;
    }

    .tredning-item {
        float: left;
        width: 20%;
    }

    .trending-wrapper {
        margin: 20px;
    }

    .detail-img {
        height: 200px;
    }

    .search-form {
        width: 500px !important
    }

    .cart-list-devider {
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px;
    }

    .tredning-item {
        border: 1px solid #eee;
        border-radius: 5px;
        padding: 10px;
        margin: 5px;
    }

    .detail-items{
        border: 1px solid #eee;
        border-radius: 5px;
        padding: 0 0 5px 10px;
        margin-bottom: 10px;
    }
</style>
</html>