<nav class="navbar navbar-expand-lg navbar-dark mb-3" style="background-color: #921f1b">
  <div class="container">
    <a class="navbar-brand" href="/">OPREC UKM SILAT UNPER</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('galeri') ? 'active' : '' }}" href="/galeri">Galeri</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('tentang') ? 'active' : '' }}" href="/tentang">Seputar UKM</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('daftar') ? 'active' : '' }}" href="/daftar">Daftar</a>
        </li>
      </ul>
    </div>
  </div>
</nav>