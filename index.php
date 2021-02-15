<?php
/* Create una classe per descrivere un entitá, assegnatele degli attributi, utilizzate il constructor. Create alcune istanze della classe. Stampate a schermo gli attributi di ogni istanza. 
Per chi non ha fantasia ecco qualche entitá che potete usare: 
Animale, Persona, Casa, Computer, Hotel, Film, Videogioco, Sport, Bicicletta, Veicolo, Nazione etc. */

class Film {
    // Properties: le variabili della nostra classe/entità
    public $name;
    public $genere;

    // Methods: le funzioni della nostra classe che saranno condivise con le istanze/colonne
    /* public function setName(string $name){ $this->name = $name; } */
    //Constructor ci evita di scrivere la funzione set 
    public function __construct(string $name, string $genere)
    {
        $this->name = $name;
        $this->genere = $genere;
    }

    public function getName()
    {
        return $this->name;
    }

    /* public function setGenere(string $genere){$this->genere = $genere;} */

    public function getGenere()
    {
        return $this->genere;
    }
}
// Usando il Constructor evitiamo di inserire la funzione set e duqnue possiamo inserire come attributi le nostre proprietà singole della classe per la nuova istanza
$film1 = new Film('Shutter Island', 'Horror');
//$film1 -> setName('Shutter Island');
var_dump($film1->getName()); 
//$film1 -> setGenere('Horror');
var_dump($film1->getGenere());

$film2 = new Film('Lo Hobbit', 'Fantasy');
$film3 = new Film('Red Hot', 'Action');
$film4 = new Film('Wonder Woman', 'Fantasy');
$film5 = new Film('Lockdown Italia', 'Commedia');

var_dump($film2, $film3, $film4, $film5);


?>