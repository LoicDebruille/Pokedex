<?php

// Class MainController for the current page 

class MainController extends CoreController
{

     // action home
     public function home(){ 

     $pokemon = new Pokemon();
     $pokemonData = $pokemon->findAll();

     
     $this->show('home',[
            "pokemonData" => $pokemonData
        ]);
     }
}