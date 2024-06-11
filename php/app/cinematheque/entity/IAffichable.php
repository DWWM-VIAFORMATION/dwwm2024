<?php
namespace cinema\entities;
interface IAffichable
{
    public function afficherString():string;
    public function afficherJson():string;
}
