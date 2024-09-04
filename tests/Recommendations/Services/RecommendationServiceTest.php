<?php

namespace App\Tests\Recommendations\Services;

use App\Recommendations\Services\FirstWEvenNumberOfCharsStrategy;
use App\Recommendations\Services\RecommendationService;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class RecommendationServiceTest extends KernelTestCase
{
    public function testRecommendationParameter(){
        $strategies = [
            new FirstWEvenNumberOfCharsStrategy(),
            new RandomTitleStrategy(),
            new MoreThanOneWordStrategy(),
        ];

        $service = new RecommendationService($strategies);
        self::assertEquals(true, true);
    }
}
