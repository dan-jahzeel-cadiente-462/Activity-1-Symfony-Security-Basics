<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AccessDeniedController extends AbstractController
{
    #[Route('/access-denied', name: 'app_access_denied')]
    public function index(): Response
    {
        // Render a friendly access denied page and return a 403 status.
        $response = new Response();
        $response->setStatusCode(Response::HTTP_FORBIDDEN);

        return $this->render('security/access_denied.html.twig', [], $response);
    }
}
