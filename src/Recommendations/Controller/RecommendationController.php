<?php

namespace App\Recommendations\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class RecommendationController extends AbstractController
{
    #[Route(path:'/recommend', name: 'recommendat')]
    public function recommend() {
        return new Response('ok');
    }
}
