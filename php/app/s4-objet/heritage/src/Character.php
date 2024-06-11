<?php
namespace app\entity;
abstract class Character{
#region getters
    public abstract function getName():string;
    public abstract function getPV():int;
    public abstract function getAttaque():int;
    public abstract function getAC():int;
    public abstract function getDegats():int;
    #endregion
    public abstract function subirDegats(int $degats);
}