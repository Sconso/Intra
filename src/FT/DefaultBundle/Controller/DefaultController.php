<?php

namespace FT\DefaultBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FTDefaultBundle:Default:index.html.twig');
    }
}
