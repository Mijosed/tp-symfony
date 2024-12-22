<?php

namespace App\Controller;

use App\Repository\ReservationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PublicReservationController extends AbstractController
{
    #[Route('/reservations', name: 'app_reservation_list', methods: ['GET'])]
    public function list(ReservationRepository $reservationRepository): Response
    {
        $reservations = $reservationRepository->findAll();

        return $this->render('reservation/list.html.twig', [
            'reservations' => $reservations,
        ]);
    }
}
