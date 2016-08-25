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

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // ajoutContact
        if ($pathinfo === '/AjouterUnContact') {
            return array (  '_controller' => 'AppBundle\\Controller\\GestionContactController::indexAction',  '_route' => 'ajoutContact',);
        }

        // suppressionContact
        if (0 === strpos($pathinfo, '/Suppression') && preg_match('#^/Suppression/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'suppressionContact')), array (  '_controller' => 'AppBundle\\Controller\\GestionContactController::suppressionAction',));
        }

        if (0 === strpos($pathinfo, '/gestion')) {
            // gestion_index
            if (rtrim($pathinfo, '/') === '/gestion') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_gestion_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'gestion_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\TypeCoordonneeController::indexAction',  '_route' => 'gestion_index',);
            }
            not_gestion_index:

            // gestion_new
            if ($pathinfo === '/gestion/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_gestion_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\TypeCoordonneeController::newAction',  '_route' => 'gestion_new',);
            }
            not_gestion_new:

            // gestion_edit
            if (preg_match('#^/gestion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_gestion_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gestion_edit')), array (  '_controller' => 'AppBundle\\Controller\\TypeCoordonneeController::editAction',));
            }
            not_gestion_edit:

            // gestion_delete
            if (preg_match('#^/gestion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_gestion_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gestion_delete')), array (  '_controller' => 'AppBundle\\Controller\\TypeCoordonneeController::deleteAction',));
            }
            not_gestion_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
