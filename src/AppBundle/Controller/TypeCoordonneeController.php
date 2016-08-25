<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\TypeCoordonnee;
use AppBundle\Form\TypeCoordonneeType;

/**
 * TypeCoordonnee controller.
 *
 * @Route("/gestion")
 */
class TypeCoordonneeController extends Controller
{
    /**
     * Lists all TypeCoordonnee entities.
     *
     * @Route("/", name="gestion_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $typeCoordonnees = $em->getRepository('AppBundle:TypeCoordonnee')->findAll();

        return $this->render('typecoordonnee/index.html.twig', array(
            'typeCoordonnees' => $typeCoordonnees,
        ));
    }

    /**
     * Creates a new TypeCoordonnee entity.
     *
     * @Route("/new", name="gestion_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $typeCoordonnee = new TypeCoordonnee();
        $form = $this->createForm('AppBundle\Form\TypeCoordonneeType', $typeCoordonnee);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($typeCoordonnee);
            $em->flush();

            return $this->redirectToRoute('gestion_index', array('id' => $typeCoordonnee->getId()));
        }

        return $this->render('typecoordonnee/new.html.twig', array(
            'typeCoordonnee' => $typeCoordonnee,
            'form' => $form->createView(),
        ));
    }


    /**
     * Displays a form to edit an existing TypeCoordonnee entity.
     *
     * @Route("/{id}/edit", name="gestion_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, TypeCoordonnee $typeCoordonnee)
    {
        $deleteForm = $this->createDeleteForm($typeCoordonnee);
        $editForm = $this->createForm('AppBundle\Form\TypeCoordonneeType', $typeCoordonnee);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($typeCoordonnee);
            $em->flush();

            return $this->redirectToRoute('gestion_edit', array('id' => $typeCoordonnee->getId()));
        }

        return $this->render('typecoordonnee/edit.html.twig', array(
            'typeCoordonnee' => $typeCoordonnee,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a TypeCoordonnee entity.
     *
     * @Route("/{id}", name="gestion_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, TypeCoordonnee $typeCoordonnee)
    {
        $form = $this->createDeleteForm($typeCoordonnee);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($typeCoordonnee);
            $em->flush();
        }

        return $this->redirectToRoute('gestion_index');
    }

    /**
     * Creates a form to delete a TypeCoordonnee entity.
     *
     * @param TypeCoordonnee $typeCoordonnee The TypeCoordonnee entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TypeCoordonnee $typeCoordonnee)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('gestion_delete', array('id' => $typeCoordonnee->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
