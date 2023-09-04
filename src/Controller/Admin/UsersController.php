<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\ComponentHttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/users', 'admin_users_')]

class UsersController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('admin/users/index.html.twig');
    }

}