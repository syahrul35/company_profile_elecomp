<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/beranda_style.css">

    <title>Elecomp Indonesia</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="/elecomp/">
                <img src="/assets/images/elecomp.png" alt="" width="auto" height="50">
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/elecomp/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/elecomp/tentang">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/elecomp/produk">Produk Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/elecomp/galeri">Galeri Foto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/elecomp/kontak">Hubungi Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    </div>
    <div><?= $this->renderSection('content') ?></div>
    </div>
    </div>
</body>

</html>