<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'app_dashboard')]
    #[IsGranted('ROLE_USER')]
    public function index(): Response
    {
        // Access is enforced by the #[IsGranted] attribute. If the current user
        // is not granted ROLE_USER an AccessDeniedException will be thrown and
        // handled by Symfony (rendering a 403 page or redirect depending on
        // your security configuration).

        // Render the dashboard template which shows role-based messages.
        return $this->render('dashboard/index.html.twig');
    }
}
