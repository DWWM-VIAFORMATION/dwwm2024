<?php
namespace app\entity;
class Duel
{
    public static int $nombreDuels=0;
    /**
     * Methode permettant de déterminer le gagnant du duel. Le ? indique la possibilité de l'absence de vainqueur.
     */
    public static function jouerDuel(Character $duellisteA,Character $duellisteB):?Character    
    {
        self::$nombreDuels++;
        // jouer les tours de combats
        do 
        {
            // le duelliste A essaye de taper le duelliste B
            if ($duellisteA->getAttaque()> $duellisteB->getAC())
                $duellisteB->subirDegats($duellisteA->getDegats());
            // le duelliste B essaye de taper le duelliste A
            if ($duellisteB->getAttaque()> $duellisteA->getAC())
                $duellisteA->subirDegats($duellisteB->getDegats());   
        }
        while (($duellisteA->getPV()>0)&&($duellisteB->getPV()>0));
        // déterminer le gagnant
        if (($duellisteA->getPV()<=0)&&($duellisteB->getPV()>0))
            return $duellisteA;
        if (($duellisteB->getPV()<=0)&&($duellisteA->getPV()>0))
            return $duellisteB;
        // double KO --> egalité
        return null;
    }
}

