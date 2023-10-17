<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProductsRepository;

class ProductController extends AbstractController
{
    #[Route('/product', name: 'app_product')]
    public function index(ProductsRepository $productRepository): Response
    {
        // Utilisez le repository pour récupérer les données de la base de données.
        $products = $productRepository->findAll(); // Cela récupérera tous les produits.

        return $this->render('page/detail.html.twig', [
            'controller_name' => 'ProductController',
            'products' => $products, // Transmettez les produits au template.
        ]);
    }
}
