<!-- DEFINIÇÃO: controlador relativo a autenticação no site (login, signup, logout) -->

<?php
class AuthenticationController
{
   private $model;

   // obter todos os posts ao carregar a página principal
   public function authentication()
   {
      require_once("src/views/authentication-view.php");
   }

   // fazer login e redirecionar utilizador para a página principal
   public function login()
   {
      require_once("src/models/user-model.php");
      $this->model = new userModel();

      // obter os dados do formulário
      $data = filter_input_array(INPUT_POST, FILTER_DEFAULT);

      // verificar se o utilizador clicou no botão de login
      if (!isset($data["isLogin"])) {
         $_SESSION["errors"] = "Não é possível efetuar esta operação.";
         die();
      }

      // obter o utilizador que pretende fazer login
      $user = $this->model->validate($data["name"], $data["password"]);

      // se houve erros na requisição
      if (!isset($user) || count($this->model->errors) > 0) {
         $errors = array();

         // obter mensagens de erros
         foreach ($this->model->errors as $error) {
            array_push($errors, $error->getMessage());
         }

         // aceder aos erros na página de autenticação
         $_SESSION["errors"] = $errors;
         header("location: /authentication");
         die();
      }

      require_once("src/utils/security-util.php");
      $user = protectOutputToHtml($user);

      // definir sessão de login no site
      require_once("src/utils/session-util.php");
      setLoginSession(true, $user->id, $user->name, $user->email, $user->first_name, $user->last_name);

      // definir cookies para lembrar login quando o browser é fechado
      if (isset($data["rememberLogin"]) == true) {
         setLoginCookies(true, $user->id, $user->name, $user->email, $user->first_name, $user->last_name);
      }

      // redirecionar para a página principal
      header("location: /");
   }
}
?>