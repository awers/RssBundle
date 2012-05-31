<?php

namespace OS\RssBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class FluxController extends Controller
{
    /**
     * @Route("/rss", name="_rss")
     */
    public function generateAction()
    {
        $generator  = $this->get('rss.generator');

        return new Response($generator->getContent());
    }
}
