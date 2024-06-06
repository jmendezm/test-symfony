<?php

namespace App\Services;

use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;

class ProductService
{
    public function __construct(private EntityManagerInterface $em){}

    public function GetByPriceGreaterThan(float $price): array
    {
        return $this->em->getRepository(Product::class)->priceGreaterThan($price);
    }
}