<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $this->get('session')->set('foo', 'bar');

        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/esi")
     * @Cache(smaxage=30)
     */
    public function esiAction()
    {
        return new Response(uniqid());
    }
}
