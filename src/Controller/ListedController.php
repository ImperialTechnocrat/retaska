<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ListedController extends AbstractController
{
    /**
     * @Route("/listed", name="listed")
     */
    public function index()
    {
        return $this->render('listed/index.html.twig', [
            'controller_name' => 'ListedController',
        ]);
    }
}
