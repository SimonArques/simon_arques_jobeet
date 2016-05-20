<?php

namespace Ens\SimonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EnsSimonBundle:Default:index.html.twig');
    }
}
