<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\RestaurantRepository;
use Symfony\Component\Routing\Attribute\Route;

class PublicRestaurantController extends AbstractController
{
    #[Route('/restaurants', name: 'app_restaurant_list')]
    public function list(RestaurantRepository $restaurantRepository): Response
    {
        $restaurants = $restaurantRepository->findAll();

        return $this->render('restaurant/list.html.twig', [
            'restaurants' => $restaurants,
        ]);
    }
}
