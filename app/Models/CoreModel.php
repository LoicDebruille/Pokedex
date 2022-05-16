<?php

class CoreModel
{

    //declaration of properties
    protected $id;
    protected $Type_id;

    //! Getter
    /**
     * Get the value of id
     * 
     * @return  int
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of Type_id
     */ 
    public function getType_id()
    {
        return $this->Type_id;
    }
}