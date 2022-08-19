<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{
    #[Route('/movies', name: 'app_movies')]    
    /**
     * index
     *
     * @return JsonResponse
     */
    public function index($name=null): JsonResponse
    {
        return $this->json([
            'message' => $name,
            'path' => 'src/Controller/MoviesController.php',
        ]);
    }

    #[Route('/movies/tampilan', name: 'app_tampilan')]
    public function tampilan(): Response
    {
        $movies = ["Avengers: Endgame", "Inception", "Loki", "Black Widow"];
        return $this->render('index.html.twig', [
            'movies' => $movies
        ]);
    }
} 
