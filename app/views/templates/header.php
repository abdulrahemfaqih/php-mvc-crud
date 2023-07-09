<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="<?= BASEURL_BOOTSTRAP_CSS ?>bootstrap.css" rel="stylesheet">
   <title>halaman <?= $data["judul"] ?> </title>
</head>

<body>
   <nav class="navbar navbar-expand-lg navbar-light bg-dark">
      <div class="container-fluid">
         <a class="navbar-brand" style="color: white;" href="#">PHP MVC</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a class="nav-link active" aria-current="page" style="color: white;" href="#">Home</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" style="color: white;" href="#">About</a>
               </li>
            </ul>
         </div>
      </div>
   </nav>