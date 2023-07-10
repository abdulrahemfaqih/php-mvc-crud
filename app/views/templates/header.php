<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="<?= BASEURL_CSS ?>global.css">
   <link href="<?= BASEURL_BOOTSTRAP_CSS ?>bootstrap.css" rel="stylesheet">
   <title>halaman <?= $data["judul"] ?> </title>
</head>

<body>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="d-flex align-items-center">
         <a class="navbar-brand me-auto fs-4" href="<?= BASEURL ?>" style="color: white; margin-left: 1rem;">PHP MVC</a>
      </div>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
         <ul class="navbar-nav" style="margin-right: 8rem;display:flex;gap: 20px;">
            <li class="nav-item">
               <a class="nav-link active fs-5" aria-current="page" href="<?= BASEURL ?>" style="color: white;">Home</a>
            </li>
            <li class="nav-item">
               <a class="nav-link fs-5" href="<?= BASEURL ?>/mahasiswa" style="color: white;">Mahasiswa</a>
            </li>
            <li class="nav-item">
               <a class="nav-link fs-5" href="<?= BASEURL ?>/about" style="color: white;">About</a>
            </li>
         </ul>
      </div>
   </nav>