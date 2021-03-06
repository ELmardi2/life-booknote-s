<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends AbstractController
{
    /**
     * @Route("/pages", name="pages")
     */
    public function index()
    {
        return $this->render('pages/index.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }
    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('/pages/home.html.twig');
    }
    /**
     * @route("/pages/about", name="about_us")
     */
    public function about()
    {
        return $this->render('/pages/about.html.twig');
    }
     /**
     * @route("/pages/contact", name="contact_us")
     */
    public function contact()
    {
        return $this->render('/pages/contact.html.twig');
    }
}


