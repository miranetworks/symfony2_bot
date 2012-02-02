<?php

namespace Mira\FaceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('MiraFaceBundle:Default:index.html.twig', array('name' => $name));
    }
}
