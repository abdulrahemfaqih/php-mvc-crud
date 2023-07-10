<div class="container mt-5">
   <div class="row">
      <div class="col-6">
         <h2>Daftar Mahasiswa</h2>
         <ul class="list-group">
            <?php foreach ($data["mhs"] as $mhs) : ?>
               <li class="list-group-item d-flex justify-content-between align-items-center">
                  <p style="font-size:18px;"><?= $mhs["nama"] ?></p>
                  <a class="btn btn-primary btn-sm" href="<?= BASEURL;?>/mahasiswa/detail/<?= $mhs["id"] ?>">Detail</a>
               </li>
            <?php endforeach; ?>
         </ul>
      </div>
   </div>
</div>
