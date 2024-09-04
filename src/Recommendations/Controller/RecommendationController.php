<?php

namespace App\Recommendations\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class RecommendationController extends AbstractController
{
    #[Route(path:'/recommendations', name: 'recommendations')]
    public function recommendations(RecommendationType $type, RecommendationService $recommendationService) {

        $recommendations = $recommendationService->getRecommendations();
        return new JsonResponse($recommendations);
    }
}
