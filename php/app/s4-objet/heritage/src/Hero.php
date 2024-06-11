<?php
namespace app\entity;
class Hero extends Character
{
    private string $_name;
    private int $_pv;
    private int $_ac;
    private int $_force;
    private int $_dexterite;
    private int $_constitution;

    
    public function __construct(string $name,int $force,int $dexterite,int $constitution,int $ac) {
        $this->_name=$name;
        $this->_force = $force;
        $this->_dexterite=$dexterite;
        $this->_constitution =$constitution;
        $this->_ac = $ac;
        $this->_pv = $constitution*2;
    }
    public function __toString()
    {
        return "je suis ".$this->_name." et je suis un héro.";
    }
    public function getName():string
    {
        return $this->_name;
    }
    public function getPV():int
    {
        return $this->_pv;
    }
    public function getAttaque():int
    {
        return ($this->_force+$this->_dexterite)/2;
    }
    public function getAC():int
    {
        return $this->_ac+($this->_dexterite/2);
    }
    public function getDegats():int
    {
        return rand(1,6)+($this->_force)/2;
    }
    #endregion
    public function subirDegats(int $degats)
    {
        $this->_pv-=$degats;
    }
    public function levelUp()
    {
        $this->_pv +=1;
        $this->_attaque+=1;

    }
}
