<?php
/**
 * Created by PhpStorm.
 * User: OUANE
 * Date: 25/08/2016
 * Time: 21:01
 */

namespace AppBundle\Repository;


use AppBundle\Entity\Personne;
use Symfony\Component\EventDispatcher\Tests\Service;

class ContactBasique extends \Doctrine\ORM\EntityRepository
{

    private $personneRepository;
    private $base;
    private $pdo;



    public function  __construct( $doctrineService, $pdo){

    $this->personneRepository = $doctrineService->getRepository("AppBundle:Personne");
    $this->base = $doctrineService->getManager();
    $this->pdo = $pdo;
    }

    public function enregistrerContact(\AppBundle\Classes\ContactBasique $contact){


        $this->base->persist($contact->getPersonne());
        $this->base->flush();

        $sql="INSERT INTO personne_coordonnee_manuelle VALUES(NULL,'".$contact->getPersonne()->getId()."',1,'".$contact->getTelMobile()."' )";
        $this->pdo->exec($sql);
        $sql="INSERT INTO personne_coordonnee_manuelle VALUES(NULL,'".$contact->getPersonne()->getId()."','2','".$contact->getTelMobile()."' )";
        $this->pdo->exec($sql);
        $sql="INSERT INTO personne_coordonnee_manuelle VALUES(NULL,'".$contact->getPersonne()->getId()."','3','".$contact->getEmail()."' )";
        $this->pdo->exec($sql);


    }

    public function chargerContacts(){


        $contacts =[];

        $personnes = $this->personneRepository->findAll();

        foreach($personnes as $personne){
           $sql="SELECT t.id,t.libelleTypecoordonnee,p.contenu FROM personne_coordonnee_manuelle p INNER JOIN type_coordonnee t ON t.id=p.coordonnee_id WHERE personne_Id =".$personne->getId()." ORDER BY t.id";
           $req = $this->pdo->query($sql);
            $coordonnees=[];
            while($res=$req->fetch()){
                array_push($coordonnees,array("libelle"=>$res["libelleTypecoordonnee"],"contenu"=>$res["contenu"]));
            }
           $res = $req->fetchAll();
            array_push($contacts,array("personne"=>$personne,"coordonnees" =>$coordonnees) );
        }

        return $contacts;

    }

    public function supprimerContact($id){

        $personne=$this->personneRepository->find($id);
        $this->base->remove($personne);
        $this->base->flush();

        $sql = "DELETE FROM personne_coordonnee_manuelle WHERE personne_id = $id";
        $this->pdo->exec($sql);

        return true;

    }




}