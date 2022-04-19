<?php

namespace App\Controller;

use App\Repository\FormationRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CatalogueController extends AbstractController
{
    #[Route('/catalogue', name: 'app_catalogue')]
    public function index(
        FormationRepository $formationeRepository,
        PaginatorInterface $paginator,
        Request $request

    ): Response
    {
       $data = $formationeRepository->findAll();
       
       $formations = $paginator->paginate(
           $data,
           $request->query->getInt('page', 1),
           6
       );
        
        return $this->render('catalogue/index.html.twig', [
            'formations' => $formations,
        ]);
    }
}
