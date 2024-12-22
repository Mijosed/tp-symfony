<?php

namespace App\Controller;

use App\Repository\TableRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PublicTableController extends AbstractController
{
    #[Route('/tables', name: 'app_table_list', methods: ['GET'])]
    public function list(TableRepository $tableRepository): Response
    {
        $tables = $tableRepository->findAll();

        return $this->render('table/list.html.twig', [
            'tables' => $tables,
        ]);
    }
}
