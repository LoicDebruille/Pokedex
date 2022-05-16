<?php

class Pokemon extends CoreModel
{
    //declaration of properties
    private $name;
    private $hp;
    private $attack;
    private $defense;
    private $spe_attack;
    private $spe_defense;
    private $speed;
    private $number;
    private $concat;

    /**
     * returns all table data
     *
     * @return [pokemon] 
     */
    public function findAll()
    {
        $sql = '
            SELECT pokemon.*, GROUP_CONCAT(type.name) AS concat FROM pokemon
            INNER JOIN pokemon_type ON pokemon.number = pokemon_type.pokemon_number
            INNER JOIN type ON type.id = pokemon_type.type_id
            Group BY pokemon.number';

        // Database::getPDO() me retourne l'objet PDO représentant la connexion à la BDD
        $pdo = Database::getPDO();
        // j'execute ma requête pour récupérer les catégories
        $pdoStatement = $pdo->query($sql);

        // fetchAll avec l'argument FETCH_CLASS renvoie un array qui contient tous mes résultats sous la forme d'objets de la classe spécifiée en 2e argument
        $results = $pdoStatement->fetchAll(\PDO::FETCH_CLASS, self::class);

        return $results;
    }

    public function find($id)
    {
        // On récupère la connexion PDO
        $pdoDBConnexion = Database::getPDO();

        // On écrit notre requête SQL
        $sql = 'SELECT * FROM `pokemon` WHERE `number` = ' . $id;

        // On exécute la requête
        $pdoStatement = $pdoDBConnexion->query($sql);

        // On récupère les données
        // fetchObject recupère un seul résultat et crée un objet
        // de la classe passée en argument.
        $pokemonId = $pdoStatement->fetchObject(self::class);

        // On retourne le résultat
        return $pokemonId;
    }

    public function findPokemonByType()
    {
        $sql = '
            SELECT pokemon.*, type.id AS Type_id
            FROM pokemon 
            INNER JOIN pokemon_type ON pokemon.number = pokemon_type.pokemon_number
            INNER JOIN type ON type.id = pokemon_type.type_id
            ORDER BY pokemon.number';

        // Database::getPDO() me retourne l'objet PDO représentant la connexion à la BDD
        $pdo = Database::getPDO();
        // j'execute ma requête pour récupérer les catégories
        $pdoStatement = $pdo->query($sql);

        // fetchAll avec l'argument FETCH_CLASS renvoie un array qui contient tous mes résultats sous la forme d'objets de la classe spécifiée en 2e argument
        $results = $pdoStatement->fetchAll(\PDO::FETCH_CLASS, self::class);

        return $results;
    }

    
    
    //! Getter
    /**
     * Get the value of name
     * 
     * @return  string
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of hp
     * 
     * @return  int
     */ 
    public function getHp()
    {
        return $this->hp;
    }

    /**
     * Get the value of attack
     * 
     * @return  int
     */ 
    public function getAttack()
    {
        return $this->attack;
    }

    /**
     * Get the value of defense
     * 
     * @return  int
     */ 
    public function getDefense()
    {
        return $this->defense;
    }

    /**
     * Get the value of spe_attack
     * 
     * @return  int
     */ 
    public function getSpe_attack()
    {
        return $this->spe_attack;
    }

    /**
     * Get the value of spe_defense
     * 
     * @return  int
     */ 
    public function getSpe_defense()
    {
        return $this->spe_defense;
    }

    /**
     * Get the value of speed
     * 
     * @return  int
     */ 
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * Get the value of number
     * 
     * @return  int
     */ 
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Get the value of concat
     */ 
    public function getConcat()
    {
        return $this->concat;
    }

   
}