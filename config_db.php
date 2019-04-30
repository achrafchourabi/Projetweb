<?php
class config {
    private static $instance = NULL; // L'attribut qui stockera l'instance unique
//La méthode statique qui permet d'instancier ou de récupérer l'instance unique
    public static function getConnexion() {
      if (!isset(self::$instance)) {
		try{
        self::$instance = new PDO('mysql:host=localhost;dbname=sav', 'root', '');
		self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(Exception $e){
            die('Erreur: '.$e->getMessage());
		}
      }
      return self::$instance;
    }
  }
?>