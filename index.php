<?php

class Vertebrati{

public function __construct()
{
// essendo che il metodo deve essere di tipo protected, cel costruttore vado a richiamarlo dato che è pubblico, così facendo nei figli quando verrà richiamato il padre il terminale sarà in grado di accedere alla funzione anche se protetta e mostrerà le frasi contenute nei metodi protected
// con un pò di ragionamento ci sono arrivato ho visto che c'erano esempi di attributi protetti e di come richiamarli, e venivano richiamati nel costruttore, quindi ho seguito questo ragionamento ma per la funzione
$this->tipo();
}

protected function tipo(){
echo "Sono un animale Vertebrato \n";
}
}

class SangueFreddo extends Vertebrati{

// il costrutto non l'ho scritto perchè essendo che non ci sono attributi da passare dal padre, viene ereditato in automatico

// al metodo protected do lo stesso nome che ho dato al padre, così verrà riprodotta l'istruzione 
protected function tipo(){
parent::tipo();
echo "Sono un animale a Sangue Freddo \n";
}
}

class Fish extends SangueFreddo{


protected function tipo(){
parent::tipo();
echo "Splash! \n \n \n";
}
}


class Rettile extends SangueFreddo{
protected function tipo(){
parent::tipo();
echo "Pssssssss! \n \n \n";
}
}

class Anfibio extends SangueFreddo{

protected function tipo(){
parent::tipo();
echo "Cra! Cra! \n \n \n";
}

}

$magikarp = new Fish();
$pitone = new Rettile();
$rana = new Anfibio();

class SangueCaldo extends Vertebrati{
protected function tipo(){
parent::tipo();
echo "Sono un Animale a Sangue Caldo \n";
}
}

class Mammifero extends SangueCaldo{
protected function tipo(){
parent::tipo();
echo "Roaarrrrrrrrrr!!! \n \n \n";
}
}

class Uccello extends SangueCaldo{
protected function tipo(){
parent::tipo();
echo "Cip ! Cip ! \n \n \n";
}
}


$leone = new Mammifero();
$pettirosso = new Uccello();

