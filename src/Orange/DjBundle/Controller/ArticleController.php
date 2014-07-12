<?php

namespace Orange\DjBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ArticleController extends Controller
{
    public function indexAction()
    {
        return $this->render('OrangeDjBundle:Article:index.html.twig', array('name' => 123));
    }
}
