<?php
/**  /src/model/Database.php */
namespace app\entities;
class Database {
    private static $instance = null;
    private $pdo;
    // Constructeur privé pour empêcher l'instanciation directe
    private function __construct() {
        try {
            $dsn = 'mysql:host='.DB_HOST.';dbname='.DB_NAME;
            $this->pdo = new \PDO($dsn, DB_USER, DB_PASS);
            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            die("Erreur de connexion à la base de données : " . $e->getMessage());
        }
    }

    // Méthode statique pour accéder à l'instance unique
    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    // Méthode pour récupérer l'objet PDO
    public function getConnection() {
        return $this->pdo;
    }
}
