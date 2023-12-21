<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rookie Record</title>
    <link rel="stylesheet" type="text/css" href="/css/register.css">
    <link rel="icon" href="gambar/logo pemweb.jpg">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        /* mendesain kolom inputan */
        input[type="text"],
        input[type="password"],
        input[type="email"]
            {
                font-family: Josefin Sans;
                border-radius: 5px;
                width: 250px;
                height: 40px;
                background-color:#fff;
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

            {{-- alert jika registrasi berhasil --}}
            @if(session()->has('success'))
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                </button>
            </div>
            @endif

    {{-- logika php jika email atau password salah --}}
            @if(session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                </button>
            </div>
            @endif

            {{-- logo --}}
            <div class="gambar mt-80">
               <h2>Login</h2>
            </div>
            {{-- form mengisi email dan password untuk login --}}
            <form action="login" method = "post">
                @csrf
            <div class="kolom mt-50" >
                <input type="email" name="email" class="form-control @error('email')
                is-invalid @enderror" id="email" autocomplete="email" placeholder="Email" autofocus required value="{{ old('email') }}">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="kolom mt-40" >
                <input type="password" name="password" autocomplete="password"
                 class="form-control
                @error('password')
                is-invalid"
                @enderror
                id="password"
                 placeholder="Kata Sandi" required>
                    @error('password')
                    <div class="invalid=feedback">
                        {{ $message }}
                    </div>
                    @enderror
            </div>
{{-- tombol login --}}
            <div class="tombol mt-50">
                <input type="submit" value="Submit">
            </div>
        </form>
        <div class="center-button">
            <p>Belum punya akun?<br><a href="register">Silahkan registrasi</p>
        </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
