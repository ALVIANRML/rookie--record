<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rookie record</title>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="icon" href="gambar/logo pemweb.jpg">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
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
       </div>
    </nav>
{{-- ini untuk menampilkan kaset atau compact disk atau juga detail pemesanan yg menggunakan logika if --}}
    <div class="barangpayment">
        @if(isset($kaset))
        <img src="/gambar/Sonic Youth Black Goo - L.png" alt="" style="width:300px" class="foto">
        <h2 class="harga">Rp.{{ $kaset->harga }}</h2>
        <div class="deskripsi">
            <h2>Artist: {{ $kaset->artist }}</h2>
            <h2>Album:{{ $kaset->album }}</h2>
            <h2>Deskripsi barang:{{ $kaset->deskripsi }}</h2>
            @elseif (isset($compactdisk))
        <img src="/gambar/Sonic Youth Black Goo - L.png" alt="" style="width:300px" class="foto">
        <h2 class="harga">Rp.{{ $compactdisk->harga }}</h2>
        <div class="deskripsi">
            <h2>Artist: {{ $compactdisk->artist }}</h2>
            <h2>Album:{{ $compactdisk->album }}</h2>
            <h2>Deskripsi barang:{{ $compactdisk->deskripsi }}</h2>
            @else
            {{-- ini merupakan detail dari si pemesan --}}
            <div class="selimutdetail">
        <div class="detail mt-40">
            <h5 class="card-title" style="color: white">Detail pesanan</h5>
            <table>
                <tr>
                    <td class="card-table" style="color: white">Nama : {{ $order->name }}</td>
                </tr>
                <tr>
                    <td class="card-table" style="color: white">Phone : {{ $order->phone }}</td>
                </tr>
                <tr>
                    <td class="card-table" style="color: white">Address : {{ $order->address }}</td>
                </tr>
                <tr>
                    <td class="card-table" style="color: white">Quantity : {{ $order->quantity }}</td>
                </tr>
                <tr>
                    <td class="card-table" style="color: white">Total Harga : {{ $order->total_price }}</td>
                </tr>
            </table>
            <button class="btn btn-primary" id="pay-button">Bayar Sekarang</button>
        </div>
    </div>
        @endif
    </div>
    </div>

    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function () {
            // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
            window.snap.pay('{{ $snapToken }}', {
                onSuccess: function (result) {
                    /* You may add your own implementation here */
                    alert("payment success!");
                    console.log(result);
                },
                onPending: function (result) {
                    /* You may add your own implementation here */
                    alert("waiting for your payment!");
                    console.log(result);
                },
                onError: function (result) {
                    /* You may add your own implementation here */
                    alert("payment failed!");
                    console.log(result);
                },
                onClose: function () {
                    /* You may add your own implementation here */
                    alert('you closed the popup without finishing the payment');
                }
            })
        });
    </script>

</body>

</html>
