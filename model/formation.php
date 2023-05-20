<?php

class Formation
{
    private $idFormation, $nomFormation, $prix, $description, $nbSession;

    public function __construct($idFormation,$nomFormation, $prix, $description, $nbSession)
    {
        $this->idFormation = $idFormation;
        $this->nomFormation = $nomFormation;
        $this->prix = $prix;
        $this->description = $description;
        $this->nbSession = $nbSession;
    }
    /**
     * @return mixed
     */
    public function getIdFormation()
    {
        return $this->idFormation;
    }

    /**
     * @param mixed $idFormation
     */
    public function setIdFormation($idFormation)
    {
        $this->idFormation = $idFormation;
    }
    /**
     * @return mixed
     */
    public function getNomFormation()
    {
        return $this->nomFormation;
    }

    /**
     * @param mixed $nomFormation
     */
    public function setNomFormation($nomFormation)
    {
        $this->nomFormation = $nomFormation;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getNbSession()
    {
        return $this->nbSession;
    }

    /**
     * @param mixed $nbSession
     */
    public function setNbSession($siteWeb)
    {
        $this->nbSession = $nbSession;
    }
}