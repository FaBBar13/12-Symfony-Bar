<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/profile', name: 'app_profile_')]
class ProfileController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('profile/index.html.twig', [
            'controller_name' => 'Profil Utilisateur',
        ]);
    }

    #[Route('/historique', name: 'histo')]
    public function histo(): Response
    {
        return $this->render('profile/index.html.twig', [
            'controller_name' => 'Historique Utilisateur',
        ]);
    }
}