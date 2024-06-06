<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\Type\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route("/user/{id}", name: "get_user_info", methods: ["GET"])]
    public function get_info(int $id, Request $request): Response
    {
        return $this->render('user/view.html.twig', [
            'username' => "Jesus",
            'email' => "jmendezm@nauta.cu",
            'id' => $id
        ]);
    }

    #[Route("/user", name: "new_user", methods: ["GET", "POST"])]
    public function new(Request $request): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        if($request->isMethod("POST")) {
            $form->submit($request->request->all()[$form->getName()]);

            if($form->isSubmitted() && $form->isValid()) {
                return $this->render('success.html.twig', [
                    'message' => "User created"
                ]);
            }

            return $this->render('error.html.twig', [
                'message' => "Not valid data",
            ]);
        }       

        return $this->render('user/new.html.twig', [
            'form' => $form,
        ]);
    }
}