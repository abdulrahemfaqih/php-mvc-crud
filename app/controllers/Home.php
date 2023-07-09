<?php

class Home extends Controller
{
   public function index()
   {
      $data["judul"] = "Homepage";
      $data["nama"] = $this->model("user_model")->getUser();
      $this->view("templates/header", $data);
      $this->view("home/index", $data);
      $this->view("templates/footer");
   }
}
