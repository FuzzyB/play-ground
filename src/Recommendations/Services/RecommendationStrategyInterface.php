<?php

namespace App\Recommendations\Services;

interface RecommendationStrategyInterface
{
    public function getRecommendationType(): string;
}
