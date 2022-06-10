<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/module1.css')}}">
    <link rel="stylesheet" href="{{asset('css/module7.css')}}">
    <link rel="stylesheet" href="{{asset('css/module8.css')}}">
    <script src="https://kit.fontawesome.com/72db99a8b6.js" crossorigin="anonymous"></script>

    <title>Document</title>
</head>

<body>
    <x-layout></x-layout>
    @yield('module8')

    <x-module7></x-module7>
</body>

<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>

</html>
