<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * personne_coordonnee
 *
 * @ORM\Table(name="personne_coordonnee_manuelle")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CoordPersonne")
 */
class Personne_coordonnee
{


    /**
     * @ORM/One
     */

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="personne_id", type="integer")
     */
private $personne_id;

    /**
     * @var int
     *
     * @ORM\Column(name="coordonnee_id", type="integer")
     */
private $coordonnee_id;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=255)
     */
private $contenu;

}

