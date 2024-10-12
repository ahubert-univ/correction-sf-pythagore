<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Service\Utility;

class TestController extends AbstractController
{
    #[Route('/test', name: 'app_test')]
    public function index(Utility $utility): Response
    {
        return $this->render('test/index.html.twig', [
            'controller_name' => $utility->renderToto(),
        ]);
    }
}
