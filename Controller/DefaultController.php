<?php

namespace Gfiguero\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GfigueroPageBundle:Default:index.html.twig');
    }
}
