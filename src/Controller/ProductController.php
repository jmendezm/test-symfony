<?php

namespace App\Controller;

use App\Services\ProductService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route("/product/price_over/{price}", name: "get_products_price_greater_than", methods: ["GET"])]
    public function price_over(float $price, Request $request, ProductService $prodService): Response
    {
        $prods = $prodService->GetByPriceGreaterThan($price);
        return $this->render('product/view.html.twig', [
            'products' => $prods
        ]);
    }
}