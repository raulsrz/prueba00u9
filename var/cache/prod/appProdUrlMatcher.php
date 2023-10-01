<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/usuario')) {
            // usuario_index
            if (rtrim($pathinfo, '/') === '/usuario') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_usuario_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'usuario_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::indexAction',  '_route' => 'usuario_index',);
            }
            not_usuario_index:

            // usuario_show
            if (preg_match('#^/usuario/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_usuario_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_show')), array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::showAction',));
            }
            not_usuario_show:

            // usuario_new
            if ($pathinfo === '/usuario/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_usuario_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::newAction',  '_route' => 'usuario_new',);
            }
            not_usuario_new:

            // usuario_edit
            if (preg_match('#^/usuario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_usuario_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_edit')), array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::editAction',));
            }
            not_usuario_edit:

            // usuario_delete
            if (preg_match('#^/usuario/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_delete')), array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/factura')) {
            // factura_index
            if (rtrim($pathinfo, '/') === '/factura') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_factura_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'factura_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\FacturaController::indexAction',  '_route' => 'factura_index',);
            }
            not_factura_index:

            // factura_show
            if (preg_match('#^/factura/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'factura_show')), array (  '_controller' => 'AppBundle\\Controller\\FacturaController::showAction',));
            }

            // factura_new
            if ($pathinfo === '/factura/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_factura_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\FacturaController::newAction',  '_route' => 'factura_new',);
            }
            not_factura_new:

            // factura_edit
            if (preg_match('#^/factura/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_factura_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'factura_edit')), array (  '_controller' => 'AppBundle\\Controller\\FacturaController::editAction',));
            }
            not_factura_edit:

            // factura_delete
            if (preg_match('#^/factura/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'factura_delete')), array (  '_controller' => 'AppBundle\\Controller\\FacturaController::deleteAction',));
            }

            // factura_nuevo
            if ($pathinfo === '/factura/nuevo') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_factura_nuevo;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\FacturaController::nuevoAction',  '_route' => 'factura_nuevo',);
            }
            not_factura_nuevo:

        }

        if (0 === strpos($pathinfo, '/producto')) {
            // producto_index
            if (rtrim($pathinfo, '/') === '/producto') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_producto_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'producto_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ProductoController::indexAction',  '_route' => 'producto_index',);
            }
            not_producto_index:

            // producto_show
            if (preg_match('#^/producto/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_producto_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'producto_show')), array (  '_controller' => 'AppBundle\\Controller\\ProductoController::showAction',));
            }
            not_producto_show:

            // producto_new
            if ($pathinfo === '/producto/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_producto_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ProductoController::newAction',  '_route' => 'producto_new',);
            }
            not_producto_new:

            // producto_edit
            if (preg_match('#^/producto/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_producto_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'producto_edit')), array (  '_controller' => 'AppBundle\\Controller\\ProductoController::editAction',));
            }
            not_producto_edit:

            // producto_delete
            if (preg_match('#^/producto/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'producto_delete')), array (  '_controller' => 'AppBundle\\Controller\\ProductoController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/codigo')) {
            // codigo_index
            if (rtrim($pathinfo, '/') === '/codigo') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_codigo_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'codigo_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\CodigoController::indexAction',  '_route' => 'codigo_index',);
            }
            not_codigo_index:

            // codigo_show
            if (preg_match('#^/codigo/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_codigo_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'codigo_show')), array (  '_controller' => 'AppBundle\\Controller\\CodigoController::showAction',));
            }
            not_codigo_show:

            // codigo_new
            if ($pathinfo === '/codigo/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_codigo_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\CodigoController::newAction',  '_route' => 'codigo_new',);
            }
            not_codigo_new:

            // codigo_edit
            if (preg_match('#^/codigo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_codigo_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'codigo_edit')), array (  '_controller' => 'AppBundle\\Controller\\CodigoController::editAction',));
            }
            not_codigo_edit:

            // codigo_delete
            if (preg_match('#^/codigo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'codigo_delete')), array (  '_controller' => 'AppBundle\\Controller\\CodigoController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/size')) {
            // size_index
            if (rtrim($pathinfo, '/') === '/size') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_size_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'size_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\SizeController::indexAction',  '_route' => 'size_index',);
            }
            not_size_index:

            // size_show
            if (preg_match('#^/size/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_size_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'size_show')), array (  '_controller' => 'AppBundle\\Controller\\SizeController::showAction',));
            }
            not_size_show:

            // size_new
            if ($pathinfo === '/size/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_size_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\SizeController::newAction',  '_route' => 'size_new',);
            }
            not_size_new:

            // size_edit
            if (preg_match('#^/size/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_size_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'size_edit')), array (  '_controller' => 'AppBundle\\Controller\\SizeController::editAction',));
            }
            not_size_edit:

            // size_delete
            if (preg_match('#^/size/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'size_delete')), array (  '_controller' => 'AppBundle\\Controller\\SizeController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/tipo')) {
            // tipo_index
            if (rtrim($pathinfo, '/') === '/tipo') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tipo_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tipo_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\TipoController::indexAction',  '_route' => 'tipo_index',);
            }
            not_tipo_index:

            // tipo_show
            if (preg_match('#^/tipo/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tipo_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipo_show')), array (  '_controller' => 'AppBundle\\Controller\\TipoController::showAction',));
            }
            not_tipo_show:

            // tipo_new
            if ($pathinfo === '/tipo/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_tipo_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\TipoController::newAction',  '_route' => 'tipo_new',);
            }
            not_tipo_new:

            // tipo_edit
            if (preg_match('#^/tipo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_tipo_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipo_edit')), array (  '_controller' => 'AppBundle\\Controller\\TipoController::editAction',));
            }
            not_tipo_edit:

            // tipo_delete
            if (preg_match('#^/tipo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipo_delete')), array (  '_controller' => 'AppBundle\\Controller\\TipoController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/dato')) {
            // dato_index
            if (rtrim($pathinfo, '/') === '/dato') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_dato_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'dato_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\DatoController::indexAction',  '_route' => 'dato_index',);
            }
            not_dato_index:

            // dato_show
            if (preg_match('#^/dato/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_dato_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dato_show')), array (  '_controller' => 'AppBundle\\Controller\\DatoController::showAction',));
            }
            not_dato_show:

            // dato_new
            if ($pathinfo === '/dato/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_dato_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\DatoController::newAction',  '_route' => 'dato_new',);
            }
            not_dato_new:

            // dato_edit
            if (preg_match('#^/dato/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_dato_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dato_edit')), array (  '_controller' => 'AppBundle\\Controller\\DatoController::editAction',));
            }
            not_dato_edit:

            // dato_delete
            if (preg_match('#^/dato/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_dato_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dato_delete')), array (  '_controller' => 'AppBundle\\Controller\\DatoController::deleteAction',));
            }
            not_dato_delete:

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        // portada
        if ($pathinfo === '/portada') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::portadaAction',  '_route' => 'portada',);
        }

        // redireccionar
        if ($pathinfo === '/redireccionar') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::redireccionarAction',  '_route' => 'redireccionar',);
        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::loginAction',  '_route' => '_welcome',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
