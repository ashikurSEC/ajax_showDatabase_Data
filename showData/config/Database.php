<?php 

class Database
{

   public function query ( $query ) 
   {
    $dsn = "mysql:host=localhost;user=root;password=ashik1234;dbname=ajax;charset=utf8mb4";
    $pdo = new PDO($dsn);
    $statement = $pdo->prepare( $query );
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
   }

}