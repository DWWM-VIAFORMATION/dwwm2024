<?php
declare(strict_types=1);
namespace app\entities;
class Genre{
    private string $_genre;
    public function __construct($genre){
        $this->_genre=$genre;
    }
    public function getGenre():string{
        return $this->_genre;
    }
}
?>