<?php
// DEFINIÇÃO: ponto de entrada do site (quaisquer requisições são encaminhadas para este ficheiro)

require_once("src/configs/route-config.php");

require_once("src/controllers/brief-post-controller.php");
require_once("src/controllers/full-post-controller.php");
require_once("src/controllers/comment-controller.php");
require_once("src/controllers/profile-controller.php");
require_once("src/controllers/auth-controller.php");
require_once("src/controllers/account-controller.php");
require_once("src/controllers/error-controller.php");

require_once("src/utils/session-util.php");

// variáveis de ambiente
define("HOST", "localhost");
define("USER", "root");
define("PASSWORD", "");
define("DATABASE_NAME", "kll");
define("CHARSET", "utf8");

startOrContinueSession(); // iniciar uma nova ou continuar a sessão atual 

// se só existem cookies definidos,
// significa que o utilizador já estava logado no site, antes de abrir o browser
if (isset($_COOKIE["id"]) && !isset($_SESSION["id"])) {
   // definir sessão de login
   setLoginSession($_COOKIE["login"], $_COOKIE["id"], $_COOKIE["name"], $_COOKIE["email"], $_COOKIE["firstName"], $_COOKIE["lastName"]);
}

$route = new Route();
$briefPostController = new BriefPostController();
$fullPostController = new FullPostController();
$commentController = new CommentController();
$profileController = new ProfileController();
$authController = new AuthController();
$accountController = new AccountController();
$errorController = new ErrorController();

// rotas
if ($_SERVER["REQUEST_METHOD"] === "POST") {
   $route->add("/post/create", array($fullPostController, "create"));
   $route->add("/post/edit/{id}", array($briefPostController, "edit"));
   $route->add("/post/vote/{id}", array($briefPostController, "vote"));
   $route->add("/post/delete/{id}", array($briefPostController, "delete"));
   $route->add("/comment/create", array($commentController, "create"));
   $route->add("/comment/edit/{id}", array($commentController, "edit"));
   $route->add("/comment/delete/{id}", array($commentController, "delete"));
   $route->add("/auth/login", array($authController, "login"));
   $route->add("/auth/signup", array($authController, "signup"));
   $route->add("/account/edit-data/{id}", array($accountController, "editData"));
   $route->add("/account/edit-password/{id}", array($accountController, "editPassword"));
} else {
   $route->add("/", array($briefPostController, "index"));
   $route->add("/search/{title}", array($briefPostController, "search"));
   $route->add("/post/{id}", array($fullPostController, "index"));
   $route->add("/profile/{id}", array($profileController, "index"));
   $route->add("/auth", array($authController, "index"));
   $route->add("/auth/logout", array($authController, "logout"));
   $route->add("/account", array($accountController, "index"));
}

// se nenhuma rota for encontrada
$route->go(array($errorController, "index"));
?>