<?php

class About extends Controller
{
   public function index($nama = null, $prodi = null, $nim = null)
   {
      $data["nama"] = $nama;
      $data["prodi"] = $prodi;
      $data["nim"] = $nim;
      $this->view("templates/header");
      $this->view("about/index", $data);
      $this->view("templates/footer");
   }

   public function page()
   {
      $this->view("templates/header");
      $this->view("about/page");
      $this->view("templates/footer");
   }
}
