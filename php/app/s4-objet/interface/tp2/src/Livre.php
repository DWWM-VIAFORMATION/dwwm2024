<?php
namespace app\bibli;
class Livre implements Printable
{
    private string $_titre;
    public function __construct(string $titre) {
        $this->_titre = $titre;
    }
    public function print():string
    {
        return "[".get_class($this)."]titre:".$this->_titre;
    }
}