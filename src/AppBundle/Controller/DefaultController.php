<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/index.html", name="Inicio")
       @Route("/", name="Inicio2")
     */

    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/contacto.html", name="Contacto")
     */
    public function ContactoAction()
    {
        return $this->render('default/contacto.html.twig');
    }

    /**
     * @Route("/donde_estamos.html", name="Donde_estamos")
     */
    public function DondeEstamosAction()
    {
        return $this->render('default/donde_estamos.html.twig');
    }

    /**
     * @Route("/sobre_nosotros.html", name="Sobre_nosotros")
     */
    public function SobreNosotrosAction()
    {
        // replace this example code with whatever you need
        return $this->render('default/sobre_nosotros.html.twig');
    }    
}
