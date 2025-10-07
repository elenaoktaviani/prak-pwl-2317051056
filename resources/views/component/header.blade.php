<!-- resources/views/header.blade.php -->
<nav class="navbar navbar-expand-lg navbar-light bg-gradient-custom shadow-sm mb-4">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <span class="fw-bold title-gradient">Sistem Pendaftaran Pengguna</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active text-blue-900 fw-semibold" href="#">Beranda</a></li>
                <li class="nav-item"><a class="nav-link text-blue-900 fw-semibold" href="#">Tentang</a></li>
                <li class="nav-item"><a class="nav-link text-blue-900 fw-semibold" href="#">Kontak</a></li>
            </ul>
        </div>
    </div>
</nav>

<style>
.bg-gradient-custom {
    background: linear-gradient(90deg, #93c5fd 0%, #ffffff 100%);
}

.title-gradient {
    background: linear-gradient(90deg, #3b82f6, #292727ff);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-weight: bold;
}

.nav-link {
    color: #1e3a8a !important; 
}

.nav-link:hover {
    color: #2563eb !important; 
}
</style>
