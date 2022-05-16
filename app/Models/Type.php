<?php

class Type extends CoreModel

{
    //declaration of properties
    private $name;
    private $color;

     /**
     * returns all table data
     *
     * @return [type] 
     */
    public function findType()
    {
        $sql = '
            SELECT *
            FROM `type`
            ORDER BY `name`';

        // Database::getPDO() me retourne l'objet PDO représentant la connexion à la BDD
        $pdo = Database::getPDO();
        // j'execute ma requête pour récupérer les catégories
        $pdoStatement = $pdo->query($sql);

        // fetchAll avec l'argument FETCH_CLASS renvoie un array qui contient tous mes résultats sous la forme d'objets de la classe spécifiée en 2e argument
        $results = $pdoStatement->fetchAll(\PDO::FETCH_CLASS, self::class);

        return $results;
    }

    public function findTypeById($id)
    {
        $sql = '
            SELECT *
            FROM `type`
            WHERE `id` = ' . $id;
           

        // Database::getPDO() me retourne l'objet PDO représentant la connexion à la BDD
        $pdo = Database::getPDO();
        // j'execute ma requête pour récupérer les catégories
        $pdoStatement = $pdo->query($sql);

        // fetchAll avec l'argument FETCH_CLASS renvoie un array qui contient tous mes résultats sous la forme d'objets de la classe spécifiée en 2e argument
        $results = $pdoStatement->fetchObject(self::class);

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
     * Get the value of color
     * 
     * @return  string
     */ 
    public function getColor()
    {
        return $this->color;
    }
}