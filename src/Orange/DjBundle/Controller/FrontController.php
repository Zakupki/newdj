<?php

namespace Orange\DjBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FrontController extends Controller
{
    public function getControllerName($request_attributes){
        $pattern = "/Controller\\\\([a-zA-Z]*)Controller/";
        $matches = array();
        preg_match($pattern, $request_attributes->get("_controller"), $matches);

        return $matches[1];
    }

}
