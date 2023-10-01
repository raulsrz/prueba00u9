<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }
    public function loginAction()
    {
        $authUtils = $this->get('security.authentication_utils');
        $em = $this->getDoctrine()->getManager();
        $usuarios = $em->getRepository('AppBundle:Usuario')->findAll();

        return $this->render(':default:login.html.twig', array('last_username' => $authUtils->getLastUsername(),
            'error' => $authUtils->getLastAuthenticationError(), 'entities' => $usuarios,));
        //return $this->render(':default:login.html.twig');
    }
    public function portadaAction()
    {

        return $this->render(':default:portada.html.twig',array(
            'active' => 'portada',
        ));
    }
    public function redireccionarAction()
    {

        if($this->isGranted('ROLE_ADMIN'))
        {
            return $this->redirectToRoute('usuario_index');
        }
        elseif($this->isGranted('ROLE_PROFESOR'))
        {
            return $this->redirectToRoute('documento_index');
        }

    }

}
