<?php

namespace ICGM2\MessageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MessageBundle:Default:index.html.twig', array('name' => $name));
    }
}
