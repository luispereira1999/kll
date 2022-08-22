<!-- DEFINIÇÃO: controlador relativo a autenticação no site (login, signup, logout) -->

<?php
require_once("src/models/user-model.php");

class AuthenticationController
{
   private $model;

   public function __construct()
   {
      $this->model = new userModel;
   }

   // obter todos os posts ao carregar a página principal
   public function authentication()
   {
      require_once("src/views/authentication-view.php");
   }

   // fazer login e redirecionar utilizador para a página principal
   public function login()
   {
      $user = $this->model->login();
      header("location: /");
   }
}
?>