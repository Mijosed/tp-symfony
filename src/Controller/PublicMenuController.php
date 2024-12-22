<?php

namespace App\Controller;

use App\Repository\MenuRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PublicMenuController extends AbstractController
{
    #[Route('/menus', name: 'app_menu_list', methods: ['GET'])]
    public function list(MenuRepository $menuRepository): Response
    {
        $menus = $menuRepository->findAll();

        return $this->render('menu/list.html.twig', [
            'menus' => $menus,
        ]);
    }
}
