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
     * @Route("/", name="allproduct_index", methods={"GET"})
     */
    public function index(ProductRepository $productRepository): Response
{
    return $this->render('all_product/index.html.twig', [
        'products' => $productRepository->findAll(),
    ]);
}
    /**
     * @Route("/show/{id}", name="listed_show", methods={"GET"})
     */
    public function show(Product $product): Response
    {
        return $this->render('listed/show.html.twig', [
            'product' => $product,
        ]);
    }
}
