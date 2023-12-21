<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rookie record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/kaset.css">
    <link rel="icon" href="gambar/logo pemweb.jpg">
</head>
<body>

    <nav class="sticky navbar navbar-expand-lg navbar-dark bg-black">
        <a class="navbar-brand judul word" href="/"><h1>Rookie <br>
            Record
        </h1></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link " href="/">Home</a>
            <a class="nav-item nav-link " href="Cassette">Cassette</a>
            <a class="nav-item nav-link mr-10" href="CompactDisk">Compact Disk</a>

    </div>
    </nav>
    <div class="cassette">
        <h2>Compact Disk</h2>
    </div>
    <div class="search">
        <form action="/Cassette" method="GET">
            <input type="text" class="search-input" name="search" placeholder="Search...">
            <button type="submit" class="search-button">Search</button>
        </form>
    </div>

    <script>
        function search() {
            var searchTerm = document.querySelector('.search-input').value;
            document.getElementById('searchResults').innerHTML = "Hasil pencarian untuk: " + searchTerm;
        }
    </script>

    {{-- untuk menampilkan produk yang dijual --}}
    <div class="container">
    <div class="row">
        @if($searchNotFound)
        <h1 style="color: white">No results found.</h1>
    @else
        @foreach ($compactdisk as $index => $compactdisks)

        {{-- <div class="col-md-4 mt-40"> --}}
            <div class="barang"> {{-- Atur tinggi sesuai kebutuhan --}}

                    <img src="/gambar/Sonic Youth Black Goo - L.png" alt="" style="width:300px" class="foto">
                    <h3 class="harga">{{ $compactdisks->harga }}</h3>

                    <div class="deskripsi">
                        <h3>Artist  : {{ $compactdisks->artist }}</h3>
                        <h3>Album   : {{ $compactdisks->album }}</h3>
                        <h3>Deskripsi barang    : </h3><br>
                        <h3>{{ $compactdisks->deskripsi }}</h3>
                        <br>
                        {{-- penggunaan button dan juga penambahan link reference --}}
                        <a href="{{ $compactdisks->spotify }}">
                            <button class="button">
                                Listen to Spotify
                            </button>
                        </a>
                        <div class="tombol mt-40">
                            <a href="{{ route('payment', ['id' => $compactdisks->id]) }}" onclick="showPaymentAlert()">
                                <input type="button" class="payment-button" value="Payment">
                            </a>
                        </div>
                    </div>
            </div>

                    @endforeach
                    @endif
                </div>
            </div>
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
