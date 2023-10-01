<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\Producto;
use AppBundle\Form\ProductoType;

/**
 * Producto controller.
 *
 */
class ProductoController extends Controller
{
    /**
     * Lists all Producto entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $productos = $em->getRepository('AppBundle:Producto')->findAll();

        return $this->render('producto/index.html.twig', array(
            'productos' => $productos,
            'active' => 'productos',
        ));
    }

    /**
     * Creates a new Producto entity.
     *
     */
    public function newAction(Request $request)
    {
        $producto = new Producto();
        $form = $this->createForm('AppBundle\Form\ProductoType', $producto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($producto);
            $em->flush();
            $this->addFlash('info','Pruducto Creado Correctamente');

            return $this->redirectToRoute('producto_index');
        }

        return $this->render('producto/new.html.twig', array(
            'producto' => $producto,
            'form' => $form->createView(),
            'active' => 'productos',
        ));
    }

    /**
     * Finds and displays a Producto entity.
     *
     */
    public function showAction(Producto $producto)
    {
        $deleteForm = $this->createDeleteForm($producto);

        return $this->render('producto/show.html.twig', array(
            'producto' => $producto,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Producto entity.
     *
     */
    public function editAction(Request $request, Producto $producto)
    {
        $deleteForm = $this->createDeleteForm($producto);
        $editForm = $this->createForm('AppBundle\Form\ProductoType', $producto);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($producto);
            $em->flush();
            $this->addFlash('info','Pruducto Editado Correctamente');

            return $this->redirectToRoute('producto_index');
        }

        return $this->render('producto/edit.html.twig', array(
            'producto' => $producto,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'active' => 'productos',
        ));
    }

    /**
     * Deletes a Producto entity.
     *
     */
    public function deleteAction(Request $request, Producto $producto)
    {

            $em = $this->getDoctrine()->getManager();
            $em->remove($producto);
            $em->flush();

        $this->addFlash('info','Pruducto Eliminado Correctamente');

        return $this->redirectToRoute('producto_index');
    }

    /**
     * Creates a form to delete a Producto entity.
     *
     * @param Producto $producto The Producto entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Producto $producto)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('producto_delete', array('id' => $producto->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
