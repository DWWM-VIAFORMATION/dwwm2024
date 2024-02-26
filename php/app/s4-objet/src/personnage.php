<?php declare(strict_types=1);
namespace Aventures;
class Personnage
{
    private string $_prenom;
    private int $_forceAttaque;
    private int $_pointsDeVie;
    public function __construct(string $pPrenom="",int $pForceAttaque=0,int $pPointsDeVie=0) {
        $this->_prenom = $pPrenom;
        $this->_forceAttaque = $pForceAttaque;
        $this->_pointsDeVie=$pPointsDeVie;
        error_log("Creation du personnage:$pPrenom-$pForceAttaque-$pPointsDeVie",3,'/var/www/html/s4-objet/logs/log_personnage.log');
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }
    public function getForceAttaque()
    {
        return $this->_forceAttaque;
    }
    public function getPointDeVie()
    {
        return $this->_pointsDeVie;
    }
    public function setPrenom($pPrenom)
    {
        $this->_prenom = $pPrenom;
    }
    public function setPointDeVie($pPointsDeVie)
    {
        $this->_pointsDeVie = $pPointsDeVie;
    }
    public function setForceAttaque($pForceAttaque)
    {
        $this->_forceAttaque = $pForceAttaque;
    }
}

