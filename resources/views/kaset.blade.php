<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rookie record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/kaset.css">

</head>
<body>
@extends('partials.navbar')

<div class="cassette">
    <h2>Cassette</h2>
</div>

<div class="search">
    <input type="text" class="search-input" placeholder="Search...">
    <button type="button" class="search-button" onclick="search()">Search</button>
</div>

<script>
    function search() {
        var searchTerm = document.querySelector('.search-input').value;
        document.getElementById('searchResults').innerHTML = "Hasil pencarian untuk: " + searchTerm;
    }
</script>
{{-- untuk menampilkan produk yang dijual --}}


    <div class="barang">

        <img src="/gambar/Sonic Youth Black Goo - L.png" alt="" style="width:300px" class="foto">
        <h3 class="harga">Rp.100.000</h3>
        <div class="deskripsi">
            <h3>Artist: Sonic Youth</h3>
            <h3>Album: Goo</h3>
            <h3>Deskripsi barang:</h3>
            <br>
            {{-- penggunaan button dan juga penambahan link reference --}}
            <a href="https://open.spotify.com/album/5iYYQwB0oH9FVyVlaOXZdr?si=n6av3DZfSOOG6wVreoHPuQ"><button>
                    Click this button to Listening on Spotify before you buy it
                </button></a>
        </div>
        <div class="tombol mt-40">
            <a href="payment" onclick="showPaymentAlert()">
                <input type="button" value="Payment">
            </a>
        </div>
    </div>




    <div class="barang">

        <img src="/gambar/Sonic Youth Black Goo - L.png" alt="" style="width:300px" class="foto">
        <h2 class="harga">Rp.200.000</h2>
        <div class="deskripsi">
            <h3>Artist: Oasis</h3>
            <h3>Album: What's Story Morning Glory</h3>
            <h3>Deskripsi barang: Kaset ada baret sedikit, cover aman, original</h3>
            <br>
            {{-- penggunaan button dan juga penambahan link reference --}}
            <a href="https://open.spotify.com/album/5iYYQwB0oH9FVyVlaOXZdr?si=n6av3DZfSOOG6wVreoHPuQ"><button>
                    Click this button to Listen on Spotify before you buy it
                </button></a>
        </div>
        <div class="tombol mt-40">
            <a href="payment" onclick="showPaymentAlert()">
                <input type="button" value="Payment">
            </a>
        </div>
    </div>


    {{-- untuk menampilkan alert bahwa produk berhasil dimasukkan ke keranjang setelah menekan tombol payment --}}


<script>
    function showPaymentAlert() {
        alert("Your Cassette has been successfully added to your cart.");
    }
</script>

</body>
</html>
