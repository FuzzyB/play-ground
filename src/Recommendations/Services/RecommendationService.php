<?php

namespace App\Recommendations\Services;

class RecommendationService
{
    /**
     * @var array|iterable
     */
    private iterable $strategies;

    public function __construct(iterable $strategies )
    {
        $this->strategies = $strategies instanceof \Traversable ? iterator_to_array($strategies) : $strategies;
    }
}
