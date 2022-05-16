<?php

class Pokemon_type extends CoreModel
{

    //declaration of properties
    private $pokemon_number;
    

    //! Getter
    /**
     * Get the value of pokemon_number
     * 
     * @return  int
     */ 
    public function getPokemon_number()
    {
        return $this->pokemon_number;
    }

    
}