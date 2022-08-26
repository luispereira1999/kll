<!-- DEFINIÇÃO: classe para conexão à base de dados -->

<?php
class Database
{
   protected $connection;

   public function __construct()
   {
      define("HOST", "localhost");
      define("USER", "root");
      define("PASSWORD", "");
      define("DATABASE_NAME", "kll");

      $this->connect();
   }

   private function connect()
   {
      try {
         $this->connection = new PDO("mysql:host=" . HOST . ";dbname=" . DATABASE_NAME, USER, PASSWORD);
      } catch (PDOException $exception) {
         $_SESSION["errors"] = "Não foi possível comunicar com o servidor. Tente mais tarde.";
         header("location: /not-found");
         die();
      }
   }
}
?>