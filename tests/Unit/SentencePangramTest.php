<?php

declare(strict_types=1);

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Leetcode\SentencePangram;

class SentencePangramTest extends TestCase
{
    public function test_sentence_pangram_true(): void
    {
        $obj = new SentencePangram();

        $result = $obj->solution('thequickbrownfoxjumpsoverthelazydog');
        
        $this->assertTrue($result,'pangram return true .');

    }

    public function test_sentence_pangram_false(): void
    {
        $obj = new SentencePangram();

        $result = $obj->solution('abcdefg');
        
        $this->assertNotTrue($result,'Pangram return false');

    }
}
