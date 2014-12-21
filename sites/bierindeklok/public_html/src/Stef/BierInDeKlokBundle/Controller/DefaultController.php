<?php

namespace Stef\BierInDeKlokBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('StefBierInDeKlokBundle:Default:index.html.twig', array('name' => $name));
    }
}
