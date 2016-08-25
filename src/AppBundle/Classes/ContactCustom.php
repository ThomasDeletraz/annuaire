<?php

namespace AppBundle\Classes;
use AppBundle\Entity\Personne;

/**
 * Created by PhpStorm.
 * User: OUANE
 * Date: 23/08/2016
 * Time: 23:09
 */
class ContactCustom
{

    private $nom;
    private $prenom;
    private $sexe;
    private $dateDeNaissance;
    private $personne;
    private $coordonnes=[];
    private $coordonnesDisponibles;

    public function __construct()
    {
        $this->personne= new Personne();
    }

    /**
     * @return mixed
     */
    public function getCoordonnesDisponibles()
    {
        return $this->coordonnesDisponibles;
    }

    /**
     * @param mixed $coordonnesDisponibles
     */
    public function setCoordonnesDisponibles($coordonnesDisponibles)
    {
        $this->coordonnesDisponibles = $coordonnesDisponibles;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * @param mixed $sexe
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }

    /**
     * @return mixed
     */
    public function getDateDeNaissance()
    {
        return $this->dateDeNaissance;
    }

    /**
     * @param mixed $dateDeNaissance
     */
    public function setDateDeNaissance($dateDeNaissance)
    {
        $this->dateDeNaissance = $dateDeNaissance;
    }

    /**
     * @return mixed
     */
    public function getCoordonnes()
    {
        return $this->coordonnes;
    }

    /**
     * @param mixed $coordonnes
     */
    public function setCoordonnes($coordonnes)
    {
        $this->coordonnes = $coordonnes;
    }


    public function chargerContact($idPersonne){

    }

    public function ajouterCoordonnes($libelle,$contenu){

        $this->coordonnes.push(array($libelle=>$contenu));
    }

    public function enregistrerContact(){



    }
    public function supprimerContact(){



    }








}