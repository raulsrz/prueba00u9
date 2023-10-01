<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use AppBundle\Entity\Usuario;
use AppBundle\Form\UsuarioType;

/**
 * Usuario controller.
 *
 */
class UsuarioController extends Controller
{
    /**
     * Lists all Usuario entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $usuarios = $em->getRepository('AppBundle:Usuario')->findAll();

        return $this->render('usuario/index.html.twig', array(
            'usuarios' => $usuarios,
            'active' => 'usuario',
        ));
    }

    /**
     * Creates a new Usuario entity.
     *
     */
    public function newAction(Request $request)
    {
        $usuario = new Usuario();
        $form = $this->createForm('AppBundle\Form\UsuarioType', $usuario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $encoder=$this->get('security.encoder_factory')->getEncoder($usuario);
            $password=$encoder->encodePassword($usuario->getPassword(),null);
            $usuario->setPassword($password);


            $em->persist($usuario);
            $em->flush();
            $this->addFlash('info','Usuario Creado Correctamente');
            return $this->redirectToRoute('usuario_index');
        }

        return $this->render('usuario/new.html.twig', array(
            'active' => 'usuario',
            'usuario' => $usuario,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Usuario entity.
     *
     */
    public function showAction(Usuario $usuario)
    {
        $deleteForm = $this->createDeleteForm($usuario);

        return $this->render('usuario/show.html.twig', array(
            'active' => 'usuario',
            'usuario' => $usuario,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Usuario entity.
     *
     */
    public function editAction(Request $request, Usuario $usuario)
    {

        $deleteForm = $this->createDeleteForm($usuario);
        $editForm = $this->createForm('AppBundle\Form\UsuarioType', $usuario);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $encoder=$this->get('security.encoder_factory')->getEncoder($usuario);
            $password=$encoder->encodePassword($usuario->getPassword(),null);
            $usuario->setPassword($password);


            $em->persist($usuario);
            $em->flush();


            $this->addFlash('info','Usuario Editado Correctamente');
            return $this->redirectToRoute('usuario_index');
        }

        return $this->render('usuario/edit.html.twig', array(
            'active' => 'usuario',
            'usuario' => $usuario,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Usuario entity.
     *
     */
    public function deleteAction(Request $request, Usuario $usuario)
    {
        $em = $this->getDoctrine()->getManager();



                $em->remove($usuario);
                $em->flush();

            $this->addFlash('info','Usuario Eliminado Correctamente');


        return $this->redirectToRoute('usuario_index');

    }

    /**
     * Creates a form to delete a Usuario entity.
     *
     * @param Usuario $usuario The Usuario entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Usuario $usuario)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('usuario_delete', array('id' => $usuario->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
