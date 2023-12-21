<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rookie Record</title>
    <link rel="icon" href="gambar/logo pemweb.jpg">
    <link rel="stylesheet" type="text/css" href="/css/register.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        input[type="text"],
        input[type="password"],
        input[type="email"]
        {
            font-family: Josefin Sans;
            border-radius: 5px;
            width: 250px; /* Atur lebar kotak */
            height: 40px; /* Atur tinggi kotak */
            background-color:#fff; /* Warna latar belakang */
            border-radius: 10px;
        }
        /* desain tombol submit */
        input[type="submit"]
            {
                background-color: #c6aa9d;
                font-family: Bebas Neue;
                color: white;
                font-size: 25px;
                margin-left: 20px;
                width: 150px;
                height: 50px;
                border-radius: 20px;
                border: none;
                cursor: pointer;
            }
        /* desain hover tombol submit */
        input[type="submit"]:hover
        {
            background-color: #a1857f;
            transition: 0.3s ease-in-out;
        }

    </style>
</head>
<body>

    <div class="container">
        <div class="kotak">
            <div class="gambar mt-80">
                <h2>REGISTER</h2>
            </div>
            {{-- form untuk menginput nama penggguna, password, dan email --}}
            <form action="register" method = "post">
                @csrf
            <div class="kolom mt-40" >
                <input type="text"  name="name" class="form-control @error('name')
                is-invalid @enderror" id="name" placeholder="Nama" required value="{{ old('name') }}">
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror

        {{-- <div class="error-message">{{ $message }}</div> --}}

            </div>
            <div class="kolom mt-20" >
                <input type="email" name="email" class="form-control @error('email')
                is-invalid @enderror" id="email"  placeholder="Email" required value="{{ old('email') }}">
                @error('email')
                <div class="invalid-feedback">
                   {{$message}}
                </div>
                @enderror
            </div>

            <div class="kolom mt-20" >
                <input type="password"  name="password"  class="form-control
                @error('password')
                is-invalid @enderror" id="password"   placeholder="Kata Sandi" required>
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
{{-- tombol submit --}}
            <div class="tombol mt-40">
                <input type="submit" value="Submit">
            </div>
        </form>
        <div class="center-button">
            <p>Sudah punya akun?<br><a href="login">Silahkan Login</p>
        </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
