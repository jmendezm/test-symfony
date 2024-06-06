<?php

namespace App\Controller;

use App\Services\CalculatorService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CalculatorController extends AbstractController
{
    #[Route('/calc/sum/{a}/{b}', name: 'sum')]
    public function sum(CalculatorService $calculatorService, int $a, int $b): Response
    {
        $res = $calculatorService->sum($a,$b);
        return new Response(
            '<html><body><h2> '. $a . ' + ' . $b . ' = ' . $res . ' </h2></html>'
        );
    }
}