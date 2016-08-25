<?php

namespace AppBundle\Classes;
use AppBundle\Entity\Personne;

/**
 * Created by PhpStorm.
 * User: OUANE
 * Date: 23/08/2016
 * Time: 23:09
 */
class ContactBasique
{

    private $nom;
    private $prenom="";
    private $sexe;
    private $dateDeNaissance;
    private $telFixe;
    private $telMobile;
    private $email;

    private $personne;

    public function __construct()
    {
        $this->personne = new Personne();
    }


    public function getPersonne()
    {
        $this->personne->setNomPersonne($this->nom);
        $this->personne->setPrenomPersonne($this->prenom);
        $this->personne->setDateNaissancePersonne($this->dateDeNaissance);
        $this->personne->setSexePersonne($this->sexe);

        return $this->personne;
    }



    /**
     * @return mixed
     */
    public function getTelFixe()
    {
        return $this->telFixe;
    }

    /**
     * @param mixed $telFixe
     */
    public function setTelFixe($telFixe)
    {
        $this->telFixe = $telFixe;
    }

    /**
     * @return mixed
     */
    public function getTelMobile()
    {
        return $this->telMobile;
    }

    /**
     * @param mixed $telMobile
     */
    public function setTelMobile($telMobile)
    {
        $this->telMobile = $telMobile;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
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