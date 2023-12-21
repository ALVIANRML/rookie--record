<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rookie record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="{{ asset('css/payment.css') }}">
   <link rel="icon" href="gambar/logo pemweb.jpg">
   <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
<body>

    <nav class="sticky navbar navbar-expand-lg navbar-dark bg-black">
        <a class="navbar-brand judul word" href="/"><h1>Rookie <br>
            Record
        </h1></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        {{-- </button> --}}
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link " href="/">Home</a>
       </div>
    </nav>

    <form action="/checkout/{id}"method="post">
<div class="cassette">
    <h2>Payment</h2>
</div>
@if(isset($kaset))
<div class="barangpayment">
    <img src="/gambar/Sonic Youth Black Goo - L.png" alt="" style="width:300px" class="foto">
    <h2 class="harga">Rp.{{ $kaset->harga }}</h2>

    <div class="deskripsi">
        <h2>Artist  : {{ $kaset->artist }}</h2>
        <h2>Album   : {{$kaset->album}}</h2>
        <h2>Deskripsi barang    : </h2><br>
        <h2>{{ $kaset->deskripsi }}</h2>
    </div>
@elseif (isset($compactdisk))
    <div class="barangpayment">
        <img src="/gambar/Sonic Youth Black Goo - L.png" alt="" style="width:300px" class="foto">
        <h2 class="harga">Rp.{{ $compactdisk->harga }}</h2>

        <div class="deskripsi">
            <h2>Artist  : {{ $compactdisk->artist }}</h2>
            <h2>Album   : {{$compactdisk->album}}</h2>
            <h2>Deskripsi barang    : </h2><br>
            <h2>{{ $compactdisk->deskripsi }}</h2>
        </div>
        @endif
    @csrf
    {{-- untuk menginput biodata pembeli --}}
    <div class="container-biodata">
        <div class="baris1 mt-40">
            <input type="text" class="input-payment" id="name" name="name" placeholder="Your name..."><br><br>
            <input type="number" class="input-payment" id="quantity" name="quantity" placeholder="How much?" min="1"><br><br>
            <input type="text" class="input-payment" id="phone" name="phone" placeholder="Your phone number"><br><br>
            <textarea name="address" class="input-alamat" id="address" name="address" rows="3" placeholder="Your Address"></textarea>
        </div>
        <div class="tombol mt-40">
            @if(isset($kaset))
                <a href="{{ route('checkout', ['id' => $kaset->id]), }}" onclick="showPaymentAlert()">
                    <input type="button"  class="button" value="The item">
                    <input type="submit"  class= "submit" value="Payment for Cassette">

                </a>
                @endif

                @if(isset($compactdisk))
                <a href="{{ route('checkout', ['id' => $compactdisk->id]), }}" onclick="showPaymentAlert()">
                    <input type="button" class="button" value="The item">
                    <input type="submit" class="submit" value="Payment for Compact Disk">
                </a>
                @endif
            </div>
        </form>
    </div>
</div>

</body>
</html>
