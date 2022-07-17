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
  <nav class="navbar navbar-expand-lg bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/beranda">
        <img src="/public/assets/images/elecomp.png" alt="" width="30" height="24">
      </a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/beranda">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/slider">Slider</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/tentang">Tentang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/kontak">Kontak</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/layanan">Layanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/kategori">Kategori</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/album">Album</a>
          </li>
          <li class="nav-item">
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