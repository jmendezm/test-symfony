<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class GreetingController
{
    #[Route('/hello/{name}', name: 'greeting')]
    public function hello(string $name = "World"): Response
    {
        return new Response(
            '<html><body><h2>Hello '.$name.'</h2></html>'
        );
    }
}