<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\Factura;
use AppBundle\Entity\Producto;
use AppBundle\Entity\Codigo;
use AppBundle\Form\FacturaType;
use AppBundle\Entity\Tipo;
use AppBundle\Entity\Size;

/**
 * Factura controller.
 *
 */
class FacturaController extends Controller
{
    /**
     * Lists all Factura entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $facturas = $em->getRepository('AppBundle:Factura')
            ->findBy(array(), array('id' => 'DESC'));
        $productos = $em->getRepository('AppBundle:Producto')->findAll();

        return $this->render('factura/index.html.twig', array(
            'facturas' => $facturas,
            'productos' => $productos,
            'active' => 'factura',
        ));
    }

    /**
     * Creates a new Factura entity.
     *
     */
    public function newAction(Request $request)
    {
        $factura = new Factura();
        $form = $this->createForm('AppBundle\Form\FacturaType', $factura);
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();
        $peticion = $request;
        $prod = $peticion->request->get('prod');
        $productos = $em->getRepository('AppBundle:Producto')->findAll();
        $tipos = $em->getRepository('AppBundle:Tipo')->findAll();
        $sizes = $em->getRepository('AppBundle:Size')->findAll();
        $produc = $em->getRepository('AppBundle:Producto')->findOneBy(array('id'=>$prod));

        return $this->render('factura/new.html.twig', array(
            'factura' => $factura,
            'form' => $form->createView(),
            'productos' => $productos,
            'tipos'=>$tipos,
            'sizes'=>$sizes,
            'prod'=>$produc,
            'active' => 'factura',
        ));
    }


    public function nuevoAction(Request $request)
    {
        $productosData = $request->request->get('tallasData');

        $productosSeleccionados = json_decode($productosData, true);
        $productos = [];
        foreach ($productosSeleccionados as $productoSeleccionado) {
            $producto = $this->getDoctrine()->getRepository(Size::class)->find($productoSeleccionado['id']);
            if ($producto) {
                $productos[] = [
                    'producto' => $producto,
                    'cantidad' => $productoSeleccionado['cantidad'],
                ];
            }
        }
        $em = $this->getDoctrine()->getManager();
        $fecha=new \DateTime('now');
        if($productos)
        {
            $factura = new Factura();
            $peticion = $request;

            $nombcliente = $peticion->request->get('nombcliente');
            $nombempresa = $peticion->request->get('nombempresa');
            $nombvendedor = $peticion->request->get('nombvendedor');
            $direcempresa = $peticion->request->get('direcempresa');
            $telempresa = $peticion->request->get('telempresa');
            $nota = $peticion->request->get('nota');
            $idioma = $peticion->request->get('idioma');
            $tipo = $peticion->request->get('tipo');
            $size = $peticion->request->get('prod');
            $moneda = $peticion->request->get('moneda');

            $siz= $em->getRepository('AppBundle:Producto')->findOneBy(array('nombre'=>$size));
            $tip= $em->getRepository('AppBundle:Tipo')->findOneBy(array('id'=>$tipo));
            //$t = $em->getRepository('AppBundle:Trabajador')->findOneBy(array('nombre'=>$trab));

                $factura->setFecha($fecha);
                $factura->setNombcliente($nombcliente);
                $factura->setNombempresa($nombempresa);
                $factura->setNombvendedor($nombvendedor);
                $factura->setDirecmpresa($direcempresa);
                $factura->setTelecmpresa($telempresa);
                $factura->setNota($nota);
                $factura->setIdioma($idioma);
                $factura->setTipoid($tip);
                $factura->setProductoid($siz);
                $factura->setMoneda($moneda);
                $serializedProd = serialize($productos);
                $factura->setListSize($serializedProd);
                $em->persist($factura);
                $em->flush();

            $codigos = $em->getRepository('AppBundle:Codigo')->findAll();

            return $this->redirectToRoute('factura_show', array('id' => $factura->getId()));
        }
        else{
            $peticion = $request;
            $size = $peticion->request->get('prod');
            $produc = $em->getRepository('AppBundle:Producto')->findOneBy(array('id'=>$size));
            $tipos = $em->getRepository('AppBundle:Tipo')->findAll();
            return $this->render('factura/new.html.twig', array(

                'productos' => $productos,
                'prod'=>$produc,
                'active' => 'factura',
            ));
        }

    }

    /**
     * Finds and displays a Factura entity.
     *
     */
    public function showAction(Request $request,  Factura $factura)
    {
        $productos = unserialize($factura->getListsize());
        $em = $this->getDoctrine()->getManager();
        $codigos = $em->getRepository('AppBundle:Codigo')->findAll();
        $tipos= $em->getRepository('AppBundle:Tipo')->findAll();
        $size = $em->getRepository('AppBundle:Size')->findAll();
        $dato = $em->getRepository('AppBundle:Dato')->findOneBy(array('id'=>'1'));

        return $this->render('factura/show.html.twig', array(
            'factura' => $factura,
            'productos' => $productos,
            'codigos' => $codigos,
             'dato' => $dato,
            'active' => 'factura',
        ));
    }

    /**
     * Displays a form to edit an existing Factura entity.
     *
     */
    public function editAction(Request $request, Factura $factura)
    {
        $deleteForm = $this->createDeleteForm($factura);
        $editForm = $this->createForm('AppBundle\Form\FacturaType', $factura);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($factura);
            $em->flush();

            return $this->redirectToRoute('factura_edit', array('id' => $factura->getId()));
        }

        return $this->render('factura/edit.html.twig', array(
            'factura' => $factura,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'active' => 'factura',
        ));
    }

    /**
     * Deletes a Factura entity.
     *
     */
    public function deleteAction(Request $request, Factura $factura)
    {
        $em = $this->getDoctrine()->getManager();

        $em->remove($factura);
        $em->flush();

        $this->addFlash('info','Factura Eliminada Correctamente');


        return $this->redirectToRoute('factura_index');
    }

    /**
     * Creates a form to delete a Factura entity.
     *
     * @param Factura $factura The Factura entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Factura $factura)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('factura_delete', array('id' => $factura->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
