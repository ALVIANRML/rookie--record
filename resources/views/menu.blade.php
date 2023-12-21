<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rookie Record</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="icon" href="gambar/logo pemweb.jpg">
    <link rel="stylesheet" href="css/menu.css">
</head>
<body>

    {{-- ini untuk memanggil navbar yang ada di folder partials di dalam file navbar --}}
   @extends('partials.navbar')



    {{-- ini merupakan carousel salah satu dari penggunaan bootstrap--}}
    <div class="gambar">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="3000">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <!-- Konten untuk slide pertama -->
            <img class="gif" src="/gambar/6ba37d09-8da6-4ea3-b222-330eb7f8803b.gif" alt="">
        </div>
        <div class="carousel-item">
            <!-- Konten untuk slide kedua -->
            <img class="gif" src="/video/Magnetic audio tape gif.gif" alt="">
        </div>
        <div class="carousel-item">
            <img class="gif" src="/gambar/The antique tech shortage that hurts the vinyl boom _ Boing Boing.gif" alt="">
            <!-- Konten untuk slide ketiga -->
        </div>
</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
