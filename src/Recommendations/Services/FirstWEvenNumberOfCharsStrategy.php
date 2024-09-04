<?php

namespace App\Recommendations\Services;

class FirstWEvenNumberOfCharsStrategy implements RecommendationStrategyInterface
{

    public function getRecommendationType(): string
    {
        // TODO: Implement getRecommendationType() method.
        return 'firstW';
    }

    public function recommend()
    {
        
    }

    
}
