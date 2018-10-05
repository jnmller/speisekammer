<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LagerorteController extends AbstractController
{
    /**
     * @Route("/lagerorte", name="lagerorte")
     */
    public function index()
    {
        return $this->render('lagerorte/index.html.twig', [
            'controller_name' => 'LagerorteController',
        ]);
    }
}
