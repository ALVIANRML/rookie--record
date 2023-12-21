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
                        </span>Log out</button>
                    </form>
                    </li>
            </ul>
        </li>
    @else
        <a id="login" class="nav-item nav-link login" href="login">Log in</a>
        <a id="register" class="nav-item nav-link login" href="register">Register</a>
        <a class="nav-item nav-link gambar-login" href="register"><img src="/gambar/log-in.png" alt=""></a>


    </span>
    </div>
    @endauth
</div>
</nav>
