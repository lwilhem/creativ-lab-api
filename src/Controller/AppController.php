<?php

namespace App\Controller;

use App\Repository\TicketRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    #[Route('/', name: 'app_app')]
    public function index(TicketRepository $ticketRepository): Response
    {

        return $this->render('app/index.html.twig', [
            'controller_name' => 'AppController',
            'tickets_list' => $ticketRepository->findAll()
        ]);
    }
}

// Voir la Liste des Tickets en cours
// Pouvoir Téléchager le fichier associé à un tikcet
// Valider les tickets
// envoyer un mail de confirmation
