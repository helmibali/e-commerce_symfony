<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[Route('/test', name: 'app_test')]
    public function index(): Response
    {
        $firstname = "Helmi";
        $lastname = "Bali";

        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',[
            ],
            'firstname'=>$firstname,
            'lastname'=>$lastname
        ]);
    }
}
