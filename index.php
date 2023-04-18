<?php
require_once('Animals.php');

class Lutra extends Animals {
    
    use Message;

    public function Speak()
    {
        echo "I`m Lutra, my name is ". $this->getName().", and my color is ".$this->getColor()."!"."<br>";
    }
}

$Lutra1 = new Lutra("Marlin", "Brownish white");
$Lutra1->Speak();
$Lutra2 = new Lutra("Merlin", "Brownish white");
$Lutra2->Speak();

?>