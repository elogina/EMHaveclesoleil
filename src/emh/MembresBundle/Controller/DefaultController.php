<?php

namespace emh\MembresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('emhMembresBundle:Default:index.html.twig', array('name' => $name));
    }
}
