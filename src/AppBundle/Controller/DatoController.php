<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\Dato;
use AppBundle\Form\DatoType;

/**
 * Dato controller.
 *
 */
class DatoController extends Controller
{
    /**
     * Lists all Dato entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $datos = $em->getRepository('AppBundle:Dato')->findAll();

        return $this->render('dato/index.html.twig', array(
            'datos' => $datos,
            'active' => 'datos',
        ));
    }

    /**
     * Creates a new Dato entity.
     *
     */
    public function newAction(Request $request)
    {
        $dato = new Dato();
        $form = $this->createForm('AppBundle\Form\DatoType', $dato);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($dato);
            $em->flush();

            return $this->redirectToRoute('dato_show', array('id' => $dato->getId()));
        }

        return $this->render('dato/new.html.twig', array(
            'dato' => $dato,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Dato entity.
     *
     */
    public function showAction(Dato $dato)
    {
        $deleteForm = $this->createDeleteForm($dato);

        return $this->render('dato/show.html.twig', array(
            'dato' => $dato,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Dato entity.
     *
     */
    public function editAction(Request $request, Dato $dato)
    {
        $deleteForm = $this->createDeleteForm($dato);
        $editForm = $this->createForm('AppBundle\Form\DatoType', $dato);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($dato);
            $em->flush();

            return $this->redirectToRoute('dato_index');
        }

        return $this->render('dato/edit.html.twig', array(
            'dato' => $dato,
            'active' => 'datos',
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Dato entity.
     *
     */
    public function deleteAction(Request $request, Dato $dato)
    {
        $form = $this->createDeleteForm($dato);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($dato);
            $em->flush();
        }

        return $this->redirectToRoute('dato_index');
    }

    /**
     * Creates a form to delete a Dato entity.
     *
     * @param Dato $dato The Dato entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Dato $dato)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('dato_delete', array('id' => $dato->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
