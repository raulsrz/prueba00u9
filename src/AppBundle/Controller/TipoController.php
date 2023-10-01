<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\Tipo;
use AppBundle\Form\TipoType;
use AppBundle\Entity\Factura;

/**
 * Tipo controller.
 *
 */
class TipoController extends Controller
{
    /**
     * Lists all Tipo entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tipos = $em->getRepository('AppBundle:Tipo')->findAll();

        return $this->render('tipo/index.html.twig', array(
            'tipos' => $tipos,
            'active' => 'tipo',
        ));
    }

    /**
     * Creates a new Tipo entity.
     *
     */
    public function newAction(Request $request)
    {
        $tipo = new Tipo();
        $form = $this->createForm('AppBundle\Form\TipoType', $tipo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tipo);
            $em->flush();
            $this->addFlash('info','Tipo de Empaque Creado Correctamente');

            return $this->redirectToRoute('tipo_index');
        }

        return $this->render('tipo/new.html.twig', array(
            'tipo' => $tipo,
            'active' => 'tipo',
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Tipo entity.
     *
     */
    public function showAction(Tipo $tipo)
    {
        $deleteForm = $this->createDeleteForm($tipo);

        return $this->render('tipo/show.html.twig', array(
            'tipo' => $tipo,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Tipo entity.
     *
     */
    public function editAction(Request $request, Tipo $tipo)
    {
        $deleteForm = $this->createDeleteForm($tipo);
        $editForm = $this->createForm('AppBundle\Form\TipoType', $tipo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tipo);
            $em->flush();
            $this->addFlash('info','Tipo de Empaque Editado Correctamente');

            return $this->redirectToRoute('tipo_index');
        }

        return $this->render('tipo/edit.html.twig', array(
            'tipo' => $tipo,
            'active' => 'tipo',
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Tipo entity.
     *
     */
    public function deleteAction(Request $request, Tipo $tipo)
    {
        $em = $this->getDoctrine()->getManager();
        $facturas = $em->getRepository('AppBundle:Factura')
            ->findBy(array('tipoid'=>$tipo));

        if($facturas==null)
        {
            $em->remove($tipo);
            $em->flush();
            $this->addFlash('info','Tipo de Empaque Eliminado Correctamente');

        }
        else
        {
            $this->addFlash('info','Error, Hay Facturas utilizando este Tipo de Empaque');

        }

        return $this->redirectToRoute('tipo_index');
    }

    /**
     * Creates a form to delete a Tipo entity.
     *
     * @param Tipo $tipo The Tipo entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Tipo $tipo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tipo_delete', array('id' => $tipo->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
