<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" />

  <title>Admin Page - Company Profile</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/beranda">
        <img src="/assets/images/elecomp.png" alt="" width="auto" height="50">
      </a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <img src="/assets/icons/home-fill.svg" alt="" width="30" height="24" class="ms-4">
            <a class="nav-link active" aria-current="page" href="/beranda">Beranda</a>
          </li>
          <li class="nav-item">
            <img src="/assets/icons/sliders.svg" alt="" width="30" height="24" class="ms-2">
            <a class="nav-link active" aria-current="page" href="/slider">Slider</a>
          </li>
          <li class="nav-item">
            <img src="/assets/icons/info.svg" alt="" width="30" height="24" class="ms-4">
            <a class="nav-link active" aria-current="page" href="/tentang">Tentang</a>
          </li>
          <li class="nav-item">
            <img src="/assets/icons/phone-call.png" alt="" width="30" height="24" class="ms-2">
            <a class="nav-link active" aria-current="page" href="/kontak">Kontak</a>
          </li>
          <li class="nav-item">
            <img src="/assets/icons/menu.png" alt="" width="30" height="24" class="ms-4">
            <a class="nav-link active" aria-current="page" href="/layanan">Layanan</a>
          </li>
          <li class="nav-item">
            <img src="/assets/icons/menu.png" alt="" width="30" height="24" class="ms-4">
            <a class="nav-link active" aria-current="page" href="/kategori">Kategori</a>
          </li>
          <li class="nav-item">
            <img src="/assets/icons/gallery.png" alt="" width="30" height="24" class="ms-3">
            <a class="nav-link active" aria-current="page" href="/galeri">Galeri</a>
          </li>
          <li class="nav-item">
            <img src="/assets/icons/gallery.png" alt="" width="30" height="24" class="ms-3">
            <a class="nav-link active" aria-current="page" href="/album">Album</a>
          </li>
          <li class="nav-item">
            <img src="/assets/icons/power-off.png" alt="" width="30" height="24" class="ms-4">
            <a class="nav-link active" aria-current="page" href="/logout">Logout</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  </div>
  <div class="col-8 px-2"><?= $this->renderSection('content') ?></div>
  </div>
  </div>
</body>

</html>