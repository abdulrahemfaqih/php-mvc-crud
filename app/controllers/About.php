<?php

class About extends Controller
{
   public function index($nama = "AbduL Rahem Faqih", $prodi = "Teknik Informatika", $nim = "220411100029", )
   {
      $data["nama"] = $nama;
      $data["prodi"] = $prodi;
      $data["nim"] = $nim;
      $data["judul"] = "About me";

      $this->view("templates/header", $data);
      $this->view("about/index", $data);
      $this->view("templates/footer");
   }

   public function page()
   {
      $data["judul"] = "pages";

      $this->view("templates/header", $data);
      $this->view("about/page", $data);
      $this->view("templates/footer");
   }
}

