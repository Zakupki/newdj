<?php

namespace Orange\DjBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends FrontController
{
    public function indexAction()
    {
        return $this->render('OrangeDjBundle:Default:index.html.twig', array('name' => 123));
    }
}
