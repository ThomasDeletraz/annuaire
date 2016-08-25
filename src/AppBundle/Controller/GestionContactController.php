<?php

namespace AppBundle\Controller;

use AppBundle\Classes\ContactBasique;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class GestionContactController extends Controller
{
    /**
     * @Route ( "/AjouterUnContact" , name="ajoutContact")
     *
     */
    public function indexAction(Request $request)
    {

       $contact = new ContactBasique();

        $form = $this->createForm('AppBundle\Form\ContactBasiqueType', $contact);

        if ($request->getMethod() == 'POST' ) {
            $form->submit($request->request->get($form->getName()));
            if( $form->isValid()){
                $base = $this->getDoctrine()->getManager();
                $repositoryContact = $this->get("ContactBasiqueRepository");
                $repositoryContact->enregistrerContact($contact);
            }


            return $this->redirectToRoute('homepage');
        }

        return $this->render(':gestionContact:formContactBasique.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Route ( "/Suppression/{id}" , name="suppressionContact")
     *
     */
    public function suppressionAction($id)
    {

        $this->get("ContactBasiqueRepository")->supprimerContact($id);

        return $this->redirectToRoute("homepage");
    }




}
