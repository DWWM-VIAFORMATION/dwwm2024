<?php
namespace cinema\entities;
interface IListable
{
    public function supprimerFilmByKey(int $key): void;
    public function supprimerFilmByTitre(string $title): void;
}