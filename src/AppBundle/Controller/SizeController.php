<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\Size;
use AppBundle\Form\SizeType;

/**
 * Size controller.
 *
 */
class SizeController extends Controller
{
    /**
     * Lists all Size entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $sizes = $em->getRepository('AppBundle:Size')->findAll();

        return $this->render('size/index.html.twig', array(
            'sizes' => $sizes,
            'active' => 'size',
        ));
    }

    /**
     * Creates a new Size entity.
     *
     */
    public function newAction(Request $request)
    {
        $size = new Size();
        $form = $this->createForm('AppBundle\Form\SizeType', $size);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($size);
            $em->flush();
            $this->addFlash('info','Size Creado Correctamente');

            return $this->redirectToRoute('size_index');
        }

        return $this->render('size/new.html.twig', array(
            'size' => $size,
            'active' => 'size',
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Size entity.
     *
     */
    public function showAction(Size $size)
    {
        $deleteForm = $this->createDeleteForm($size);

        return $this->render('size/show.html.twig', array(
            'size' => $size,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Size entity.
     *
     */
    public function editAction(Request $request, Size $size)
    {
        $deleteForm = $this->createDeleteForm($size);
        $editForm = $this->createForm('AppBundle\Form\SizeType', $size);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($size);
            $em->flush();
            $this->addFlash('info','Size Editado Correctamente');

            return $this->redirectToRoute('size_index');
        }

        return $this->render('size/edit.html.twig', array(
            'size' => $size,
            'active' => 'size',
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Size entity.
     *
     */
    public function deleteAction(Request $request, Size $size)
    {
        $em = $this->getDoctrine()->getManager();
        $facturas = $em->getRepository('AppBundle:Factura')->findBy(array('sizeid'=>$size));
        if ($facturas==null) {

            $em->remove($size);
            $em->flush();
            $this->addFlash('info','Size Eliminado Correctamente');
        }
        else
        {
            $this->addFlash('info','Error, Hay Facturas utilizando este Size');
        }

        return $this->redirectToRoute('size_index');

    }

    /**
     * Creates a form to delete a Size entity.
     *
     * @param Size $size The Size entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Size $size)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('size_delete', array('id' => $size->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
