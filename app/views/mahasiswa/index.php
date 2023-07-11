<div class="container mt-3">
   <div class="row">
      <div class="col-lg-6">
         <?php Flasher::flash(); ?>
      </div>
   </div>
   <div class="row">
      <div class="col-lg-6">
         <!-- button modal -->
         <button type="button" class="btn btn-primary tommbolTambahData" data-bs-toggle="modal" data-bs-target="#formModal" style="margin-bottom: 20px;">
            Tambah
         </button>
         <!-- modal -->
         <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                     <!-- form -->
                     <form action="<?= BASEURL_TAMBAH ?>" method="post">
                        <input type="hidden" name="id" id="id">
                        <div class="form-group">
                           <label class="mb-1" for="nama" style="margin-left: 2px;">Nama</label>
                           <input type="text" class="form-control" id="nama" placeholder="nama mahasiswa" name="nama">
                        </div>
                        <div class="form-group mt-3">
                           <label class="mb-1" for="nim" style="margin-left: 2px;">NIM</label>
                           <input type="number" class="form-control" id="nim" placeholder="nim mahasiswa" name="nim">
                        </div>
                        <div class="form-group mt-3">
                           <label class="mb-1" for="email" style="margin-left: 2px;">Email</label>
                           <input type="email" class="form-control" id="email" placeholder="email mahasiswa" name="email">
                        </div>
                        <div class="form-group mt-3">
                           <label for="jurusan">Program Studi</label>
                           <select class="form-select mt-2" aria-label="Default select example" id="jurusan" name="jurusan">
                              <option disabled selected>Pilih Program Studi</option>
                              <option value="Teknik Informatika">Teknik Informatika</option>
                              <option value="Teknik industri">Teknik industri</option>
                              <option value="Teknik Elektro">Teknik Elektro</option>
                              <option value="Teknik Mesin">Teknik Mesin</option>
                              <option value="Teknik Mekatronika">Teknik Mekatronika</option>
                              <option value="Sistem Informasi">Sistem Informasi</option>
                           </select>
                        </div>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                     <button type="submit" class="btn btn-primary">Tambah Data</button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
         <h2>Daftar Mahasiswa</h2>
         <ul class="list-group">
            <?php foreach ($data["mhs"] as $mhs) : ?>
               <li class="list-group-item d-flex justify-content-between align-items-center" style="display: flex; justify-content: space-between; align-items: center;">
                  <p style="font-size: 18px;"><?= $mhs["nama"] ?></p>
                  <div>
                     <a class="btn btn-primary btn-sm" href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs["id"] ?>">Detail</a>
                     <a class="btn btn-danger btn-sm" href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs["id"] ?>" onclick="return confirm('yakin ingin dihapus?')" id="hapus">Hapus</a>
                     <a class="btn btn-warning btn-sm tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs["id"] ?>" data-id="<?= $mhs["id"] ?>">Ubah</a>
                  </div>
               </li>
            <?php endforeach; ?>
         </ul>
      </div>
   </div>
</div>