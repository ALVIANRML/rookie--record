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
            @auth
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Welcome back, {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form action="logout" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item"><span class="material-symbols-outlined">
                            </span>log out</button>
                        </form>
                        </li>
                </ul>
            </li>
        @else
            <a id="login" class="nav-item nav-link login" href="login">Log in</a>
            <a id="register" class="nav-item nav-link login" href="register">Register</a>
            <a class="nav-item nav-link gambar-login" href="register"><img src="/gambar/Log-in.png" alt=""></a>
        </span>
        </div>
        @endauth
    </div>
    </nav>
    <div class="cassette">
        <h2>Cassette</h2>
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
        @foreach ($kaset as $index => $kasets)

        {{-- <div class="col-md-4 mt-40"> --}}
            <div class="barang"> {{-- Atur tinggi sesuai kebutuhan --}}

                    <img src="/gambar/Sonic Youth Black Goo - L.png" alt="" style="width:300px" class="foto">
                    <h3 class="harga">{{ $kasets->harga }}</h3>

                    <div class="deskripsi">
                        <h3>Artist: {{ $kasets->artist }}</h3>
                        <h3>Album:{{ $kasets->album }}</h3>
                        <h3>Deskripsi barang:{{ $kasets->deskripsi }}</h3>
                        <br>
                        {{-- penggunaan button dan juga penambahan link reference --}}
                        <a href="{{ $kasets->link_spotify }}">
                            <button>
                                Click this button to Listening on Spotify before you buy it
                            </button>
                        </a>
                        <div class="tombol mt-40">
                            <a href="payment" onclick="showPaymentAlert()">
                                <input type="button" value="Payment">
                            </a>
                        </div>
                    </div>
            </div>

                    @endforeach
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
