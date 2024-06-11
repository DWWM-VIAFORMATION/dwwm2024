<?php
namespace app\entities;
class Recette
{
    private string $_titre;
    private int $_id;
    public function __construct(string $titre = "une recette inconnue",int $id =0) {
        $this->_titre = $titre;
        $this->_id = $id;
    }
    public function getTitre():string
    {
        return $this->_titre;
    }
    public function getId():int
    {
        return $this->_id;
    }
     // Méthode CREATE
     public static function create(Recette $recette) {
        $sql = "INSERT INTO recettes (titre) VALUES (:titre)";
        $stmt = Database::getInstance()->getConnection()->prepare($sql);
        $stmt->execute(['titre' => $recette->getTitre()]);
        return Database::getInstance()->getConnection()->lastInsertId();
    }
    // Méthode READ (pour un seul enregistrement)
    public static function read($id):Recette {
        $sql = "SELECT * FROM recettes WHERE id = :id";
        $stmt =Database::getInstance()->getConnection()->prepare($sql);
        $stmt->execute(['id' => $id]);
        $data = $stmt->fetch();
        return new Recette($data['titre'],$data['id']);
    }

    // Méthode UPDATE
    public static function update($id, $nouveauTitre) {
        $sql = "UPDATE recettes SET titre = :titre WHERE id = :id";
        $stmt = Database::getInstance()->getConnection()->prepare($sql);
        $stmt->execute(['titre' => $nouveauTitre, 'id' => $id]);
        return $stmt->rowCount();
    }

    // Méthode DELETE
    public static function delete($id) {
        $sql = "DELETE FROM recettes WHERE id = :id";
        $stmt = Database::getInstance()->getConnection()->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->rowCount();
    }
    public static function getList():\ArrayObject {
        $sql = "SELECT * FROM recettes ";
        $stmt =Database::getInstance()->getConnection()->prepare($sql);
        $stmt->execute();
        $list = new \ArrayObject();
        foreach ($stmt->fetchAll() as $recette) {
          $list->append(new Recette($recette['titre'],$recette['id']));
        };
        return $list;
    }
}
