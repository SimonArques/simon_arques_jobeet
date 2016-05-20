<?php

namespace Ens\SimonArquesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EnsSimonArquesBundle:Default:index.html.twig');
    }
}
