<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use Genioam\PariDispari\ParityChecker;

class ParityCheckerTest extends TestCase
{
    // Test per verificare che il numero pari restituisca true
    public function testIsEvenWithEvenNumber()
    {
        $parityChecker = new ParityChecker();
        
        $this->assertTrue($parityChecker->isEven(4));  // 4 è pari
        $this->assertTrue($parityChecker->isEven(0));  // 0 è pari
        $this->assertTrue($parityChecker->isEven(100));  // 100 è pari
    }

    // Test per verificare che il numero dispari restituisca false
    public function testIsEvenWithOddNumber()
    {
        $parityChecker = new ParityChecker();
        
        $this->assertFalse($parityChecker->isEven(3));  // 3 è dispari
        $this->assertFalse($parityChecker->isEven(7));  // 7 è dispari
        $this->assertFalse($parityChecker->isEven(99));  // 99 è dispari
    }
}
