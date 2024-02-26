<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
require_once 'src/personnage.php';

final class PersonnageTest extends TestCase
{
    #region liste des attributs
    public function test_1_private_Prenom():void
    {
        $personnage = new Aventures\Personnage();
        $this->assertObjectHasProperty('_prenom',$personnage);
    }
    public function test_2_private_forceAttaque():void
    {
        $personnage = new Aventures\Personnage();
        $this->assertObjectHasProperty('_forceAttaque',$personnage);
    }
    public function test_3_private_PointDeVie():void
    {
        $personnage = new Aventures\Personnage();
        $this->assertObjectHasProperty('_pointsDeVie',$personnage);
    }
    #endregion
    #region constructeur
    public function test_4_constructeur():void
    {
        $personnage = new Aventures\Personnage();
        $this->assertSame('',$personnage->getPrenom());
        $this->assertSame(0,$personnage->getForceAttaque());
        $this->assertSame(0,$personnage->getPointDeVie());
    }
    public function test_5_constructeur():void
    {
        $personnage = new Aventures\Personnage('Bilbo',5,10);
        $this->assertSame('Bilbo',$personnage->getPrenom());
        $this->assertSame(5,$personnage->getForceAttaque());
        $this->assertSame(10,$personnage->getPointDeVie());
    }
    #endregion
    #region setters
    public function test_6_setters():void
    {
        $personnage = new Aventures\Personnage();
        $personnage->setPrenom('Bilbo');
        $personnage->setForceAttaque(5);
        $personnage->setPointDeVie(10);
        $this->assertSame('Bilbo',$personnage->getPrenom());
        $this->assertSame(5,$personnage->getForceAttaque());
        $this->assertSame(10,$personnage->getPointDeVie());
    }
    public function test_7_setters():void
    {
        $this->expectException(TypeError::class);
        $personnage = new Aventures\Personnage();
        $personnage->setPrenom(42);
    }
    public function test_8_setters():void
    {
        $this->expectException(TypeError::class);
        $personnage = new Aventures\Personnage();
        $personnage->setForceAttaque('42');
    }
    public function test_9_setters():void
    {
        $this->expectException(TypeError::class);
        $personnage = new Aventures\Personnage();
        $personnage->setPointDeVie('42');
    }
    
    #endregion
    

}