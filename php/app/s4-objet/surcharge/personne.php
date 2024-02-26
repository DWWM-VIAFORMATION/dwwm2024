<?php
namespace Surcharge;
class Personne
{
    private string $_prenom;
    private string $_nom;
    private int $_age;

    public function __construct(string $prenom, string $nom,int $age=45)
    {
        echo "<p>personne:construct:start($prenom $nom,)</p>";
        $this->_prenom = $prenom;
        $this->_nom = $nom;
        $this->_age = $age;
        echo "<p>personne:construct:end</p>";

    }
    public function setName($pName)
    {
        $this->_nom = $pName;
    }
    public function saluer(string $pWord="salut"): string
    {
        // return "salut";
        echo "<p>personne:saluer:start( $this->_nom)</p>";
        return "$this->_prenom $this->_nom,  $pWord ";
    }
    public function __destruct()
    {
        echo "<p>instance détruite: $this->_prenom</p>";
    }
    public function __debugInfo()
    {
        return ['name'=>$this->_nom,'firstname'=>$this->_prenom,'age'=>$this->_age];
    }
    public function __call($method, $args)
    {

    //     if (substr($method,0,3)=='get')
    //     {
    
    //         $reflection = new ReflectionClass($this);
    //     $class_vars = $reflection->getProperties(ReflectionProperty::IS_PRIVATE);
      
    // foreach  ($class_vars as $key=>$value)
    // {
    //     // var_dump($value);
    //     foreach ($value as $key => $data) {
    //         var_dump($data);
    //         echo substr($method,3)."|";
    //         if (isset($data[strtolower(substr($method,3))]))  
    //         return $data[strtolower(substr($method,3))];
    //     }
        
    // }
    //         return "notfound";
    //     }
        echo "la methode $method a été appelée avec les parametres :";
        foreach ($args as $key => $value) {
            echo "$key $value";
        }
      
    }
}