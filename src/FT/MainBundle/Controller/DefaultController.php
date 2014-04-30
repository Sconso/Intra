<?php

namespace FT\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FTMainBundle:Default:index.html.twig');
    }
}
