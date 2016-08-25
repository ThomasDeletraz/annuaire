<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Personne
 *
 * @ORM\Table(name="personne")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PersonneRepository")
 */
class Personne
{


    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomPersonne", type="string", length=255)
     */
    private $nomPersonne;



    /**
     * @var string
     *
     * @ORM\Column(name="prenomPersonne", type="string", length=255 , nullable=true)
     */
    private $prenomPersonne;

    /**
     * @var bool
     *
     * @ORM\Column(name="sexePersonne", type="boolean" , nullable=true)
     */
    private $sexePersonne;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNaissancePersonne", type="date", nullable=true)
     */
    private $dateNaissancePersonne;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomPersonne
     *
     * @param string $nomPersonne
     *
     * @return Personne
     */
    public function setNomPersonne($nomPersonne)
    {
        $this->nomPersonne = $nomPersonne;

        return $this;
    }

    /**
     * Get nomPersonne
     *
     * @return string
     */
    public function getNomPersonne()
    {
        return $this->nomPersonne;
    }

    /**
     * Set prenomPersonne
     *
     * @param string $prenomPersonne
     *
     * @return Personne
     */
    public function setPrenomPersonne($prenomPersonne)
    {
        $this->prenomPersonne = $prenomPersonne;

        return $this;
    }

    /**
     * Get prenomPersonne
     *
     * @return string
     */
    public function getPrenomPersonne()
    {
        return $this->prenomPersonne;
    }

    /**
     * Set sexePersonne
     *
     * @param boolean $sexePersonne
     *
     * @return Personne
     */
    public function setSexePersonne($sexePersonne)
    {
        $this->sexePersonne = $sexePersonne;

        return $this;
    }

    /**
     * Get sexePersonne
     *
     * @return bool
     */
    public function getSexePersonne()
    {
        return $this->sexePersonne;
    }

    /**
     * Set dateNaissancePersonne
     *
     * @param \DateTime $dateNaissancePersonne
     *
     * @return Personne
     */
    public function setDateNaissancePersonne($dateNaissancePersonne)
    {
        $this->dateNaissancePersonne = $dateNaissancePersonne;

        return $this;
    }

    /**
     * Get dateNaissancePersonne
     *
     * @return \DateTime
     */
    public function getDateNaissancePersonne()
    {
        return $this->dateNaissancePersonne;
    }
}

