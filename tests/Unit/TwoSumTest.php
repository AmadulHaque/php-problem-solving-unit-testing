<?php

declare(strict_types=1);

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Leetcode\TwoSum;

class TwoSumTest extends TestCase
{
    public function test_two_sum(): void
    {
        $obj = new TwoSum();

        $result = $obj->solution([2, 5, 7, 11, 15], 18);
        
        // Assert that the result is an array
        $this->assertIsArray($result, 'The result should be an array.');

        // Assert that the returned indices are as expected
        $this->assertEquals([2, 3], $result, 'The indices returned should match [2, 3].');
    }
}
