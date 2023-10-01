<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\Codigo;
use AppBundle\Form\CodigoType;

/**
 * Codigo controller.
 *
 */
class CodigoController extends Controller
{
    /**
     * Lists all Codigo entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $codigos = $em->getRepository('AppBundle:Codigo')->findAll();

        return $this->render('codigo/index.html.twig', array(
            'codigos' => $codigos,
            'active' => 'codigo',
        ));
    }

    /**
     * Creates a new Codigo entity.
     *
     */
    public function newAction(Request $request)
    {
        $codigo = new Codigo();
        $form = $this->createForm('AppBundle\Form\CodigoType', $codigo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($codigo);
            $em->flush();
            $this->addFlash('info','Codigo Creado Correctamente');

            return $this->redirectToRoute('codigo_index');
        }

        return $this->render('codigo/new.html.twig', array(
            'codigo' => $codigo,
            'active' => 'codigo',
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Codigo entity.
     *
     */
    public function showAction(Codigo $codigo)
    {
        $deleteForm = $this->createDeleteForm($codigo);

        return $this->render('codigo/show.html.twig', array(
            'codigo' => $codigo,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Codigo entity.
     *
     */
    public function editAction(Request $request, Codigo $codigo)
    {
        $deleteForm = $this->createDeleteForm($codigo);
        $editForm = $this->createForm('AppBundle\Form\CodigoType', $codigo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($codigo);
            $em->flush();

            return $this->redirectToRoute('codigo_edit', array('id' => $codigo->getId()));
        }

        return $this->render('codigo/edit.html.twig', array(
            'codigo' => $codigo,
            'active' => 'codigo',
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Codigo entity.
     *
     */
    public function deleteAction(Request $request, Codigo $codigo)
    {
        $em = $this->getDoctrine()->getManager();
        $produtos = $em->getRepository('AppBundle:Producto')->findBy(array('codigoid'=>$codigo));
        if ($produtos==null) {

            $em->remove($codigo);
            $em->flush();
            $this->addFlash('info','Codigo Eliminado Correctamente');
        }
        else
        {
            $this->addFlash('info','Error, Hay Productos utilizando esta Codigo');
        }

        return $this->redirectToRoute('codigo_index');

    }

    /**
     * Creates a form to delete a Codigo entity.
     *
     * @param Codigo $codigo The Codigo entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Codigo $codigo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('codigo_delete', array('id' => $codigo->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
