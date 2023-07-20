<?php

namespace App\Controller;

use function Symfony\Component\String\u;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VinylController
{
    // home route
    #[Route('/')]
    public function homepage(): Response
    {
        return new Response('Title: PB and Jams');
    }

    // Wildcard rout
     #[Route('/browse/{slug}')]
    public function browse(string $slug = null) : Response 
    {
        if($slug) {
             $title ='Genre: ' . u(str_replace('-', ' ', $slug))->title(true);
        } else {
            $title = 'All Genres';
        }
       
        return new Response($title);
    }
}