<?php

namespace App\Controller;

use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\ProductRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

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
    /**
     * @Route("/{id}", name="allproduct_show", methods={"GET"})
     */
    public function show(Product $product): Response
    {
        return $this->render('listed/show.html.twig', [
            'product' => $product,
        ]);
    }
}
