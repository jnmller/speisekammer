<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SpeisekammerController extends AbstractController
{
    /**
     * @Route("/speisekammer", name="speisekammer")
     */
    public function index()
    {
        return $this->render('speisekammer/index.html.twig', [
            'controller_name' => 'SpeisekammerController',
        ]);
    }
}
