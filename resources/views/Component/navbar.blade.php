<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-bs-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="dashboard-home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="dashboard-produk">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="dashboard-kategori">Kategori</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout">Logout</a>
                </li>
            </ul>
            {{-- <div>
                @guest
                 <form class="">
                    <button class="btn btn-primary" type="button" 
                    onclick="event.preventDefault(); location.href='{{url('login')}}';">
                Login</button>    
                </form>   
                @endguest

                @auth
                 <form class="" action="{{ url('logout')}}" method="POST">
                    @csrf
                    <button class="btn btn-primary">
                        Logout
                    </button>
                </form>   
                @endauth
            </div> --}}
        </div>
    </div>
</nav>
