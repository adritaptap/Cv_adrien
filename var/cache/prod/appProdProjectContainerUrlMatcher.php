<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // scv_cv_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'scv_cv_homepage');
            }

            return array (  '_controller' => 'Cv\\CVBundle\\Controller\\HomeController::indexAction',  '_route' => 'scv_cv_homepage',);
        }

        // scv_cv_hobbypage
        if ($pathinfo === '/hobby') {
            return array (  '_controller' => 'Cv\\CVBundle\\Controller\\HomeController::hobbyAction',  '_route' => 'scv_cv_hobbypage',);
        }

        // scv_cv_videopage
        if ($pathinfo === '/videopitch') {
            return array (  '_controller' => 'Cv\\CVBundle\\Controller\\HomeController::videopitchAction',  '_route' => 'scv_cv_videopage',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
