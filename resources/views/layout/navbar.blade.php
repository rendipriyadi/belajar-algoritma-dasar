<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('dashboard.index') }}">Algoritma Dasar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('urutkan_array.index') }}">Urutkan Array</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pattern_count.index') }}">Pattern Count</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('hitung_huruf.index') }}">Hitung Huruf</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
