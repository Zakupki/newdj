<?php

namespace Orange\DjBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('OrangeDjBundle:Default:index.html.twig', array('name' => 123));
    }
    public function contactsAction()
    {
        return $this->render('OrangeDjBundle:Default:contacts.html.twig');
    }
}
