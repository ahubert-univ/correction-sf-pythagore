<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Service\PythagoreUtility;

class PythagoreUController extends AbstractController
{
    public function __construct(private readonly PythagoreUtility $pythagoreUtility)
    {
    }

    #[Route('/pythagore/view', name: 'pythagore_view_index')]
    public function index(): Response
    {
        return $this->render('pythagore/index.html.twig', [
            'controller_name' => $this->pythagoreUtility->display(),
            'my_name' => ' My Name is John Doe'
        ]);
    }
}
