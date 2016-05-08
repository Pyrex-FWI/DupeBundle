<?php

namespace Pyrex\DupeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PyrexDupeBundle:Default:index.html.twig', array('name' => $name));
    }
}
