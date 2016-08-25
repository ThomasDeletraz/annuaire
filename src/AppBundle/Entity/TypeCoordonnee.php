<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeCoordonnee
 *
 * @ORM\Table(name="type_coordonnee")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TypeCoordonneeRepository")
 */
class TypeCoordonnee
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
     * @ORM\Column(name="libelleTypeCoordonnee", type="string", length=255)
     */
    private $libelleTypeCoordonnee;


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
     * Set libelleTypeCoordonnee
     *
     * @param string $libelleTypeCoordonnee
     *
     * @return TypeCoordonnee
     */
    public function setLibelleTypeCoordonnee($libelleTypeCoordonnee)
    {
        $this->libelleTypeCoordonnee = $libelleTypeCoordonnee;

        return $this;
    }

    /**
     * Get libelleTypeCoordonnee
     *
     * @return string
     */
    public function getLibelleTypeCoordonnee()
    {
        return $this->libelleTypeCoordonnee;
    }
}

