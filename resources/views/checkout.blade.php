<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
     <script type="text/javascript"
     src="https://app.sandbox.midtrans.com/snap/snap.js"
     data-client-key="{{ config('midtrans.client_key') }}"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rookie record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
</head>
<body>
    <nav class="sticky navbar navbar-expand-lg navbar-dark bg-black">
        <a class="navbar-brand judul word" href="/"><h1>Rookie <br>
            Record
        </h1></a>
    </nav>


<div class="barangpayment">
<h5 class="card-title" style="color: white">Detail pesanan</h5>
<table style>
    <tr>
        <td style="color: white">Nama</td>
        <td style="color: white">: {{ $order->name }}</td>
    </tr>
    <tr>
        <td style="color: white">Phone</td>
        <td style="color: white">: {{ $order->phone }}</td>
    </tr>
    <tr>
        <td style="color: white">Address</td>
        <td style="color: white">: {{ $order->address }}</td>
    </tr>
    <tr>
        <td style="color: white">Quantity</td>
        <td style="color: white">: {{ $order->quantity }}</td>
    </tr>
    <tr>
        <td style="color: white">Total Harga</td>
        <td style="color: white">: {{ $order->total_price }}</td>
    </tr>
</table>
<button class="btn btn-primary" id="pay-button">Bayar Sekarang</button>
</div>

<script type="text/javascript">
    // For example trigger on button clicked, or any time you need
    var payButton = document.getElementById('pay-button');
    payButton.addEventListener('click', function () {
      // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
      window.snap.pay('{{ $snapToken }}', {
        onSuccess: function(result){
          /* You may add your own implementation here */
          alert("payment success!"); console.log(result);
        },
        onPending: function(result){
          /* You may add your own implementation here */
          alert("wating your payment!"); console.log(result);
        },
        onError: function(result){
          /* You may add your own implementation here */
          alert("payment failed!"); console.log(result);
        },
        onClose: function(){
          /* You may add your own implementation here */
          alert('you closed the popup without finishing the payment');
        }
      })
    });
  </script>




</div>

</body>
</html>
