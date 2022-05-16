<?php

// Class CatalogControlleur for the additionnal page 

class CatalogController extends CoreController
{
     // action detail
     public function detail($urlParam)
     { 

     $idNumberPokemon = $urlParam['id'];

     $pokemonDetail = new Pokemon();
     $curentPokemon = $pokemonDetail->find($idNumberPokemon);

     $pokemon = new Pokemon();
     $pokemonData = $pokemon->findAll();

     $this->show('detail', [
            "pokemonData" => $pokemonData,
            "curentPokemon" => $curentPokemon,
        ]);
     }

     // action home
     public function type()
     { 
     
     $type = new Type();
     $pokemonType = $type->findType();

     $this->show('type', ["pokemonType" => $pokemonType]);
     }

      // action typelisting
     public function typelisting($urlParam){ 

     $idTypePokemon = $urlParam['id'];

     $TypeById = new Type();
     $pokemonTypeById = $TypeById->findTypeById($idTypePokemon);

     $pokemonType = new Pokemon ();
     $pokemonByType = $pokemonType->findPokemonByType();

     $this->show('listedestypes' , [
          "pokemonTypeById" => $pokemonTypeById,
          "pokemonByType" => $pokemonByType
          ]);
     }
}