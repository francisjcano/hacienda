<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{


 /**
     * @Route("/hacienda", name="hacienda")
     * @Route("/", name="hacienda")
     */
    public function haciendaAction()
    {
        return $this->render('default/hacienda.html.twig');
    }

     /**
     * @Route("/sobre_nosotros", name="sobre_nosotros")
     */
    public function sobreNosotrosAction()
    {
        return $this->render('default/sobre_nosotros.html.twig');
    }

     /**
     * @Route("/contacto", name="contacto")
     */
    public function contactoAction()
    {
        return $this->render('default/contacto.html.twig');
    }

     /**
     * @Route("/donde_estamos", name="donde_estamos")
     */
    public function dondeEstamosAction()
    {
        return $this->render('default/donde_estamos.html.twig');
    }

}
