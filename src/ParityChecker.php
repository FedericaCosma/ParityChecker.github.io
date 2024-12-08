<?php declare(strict_types=1);

namespace Genioam\PariDispari;

class ParityChecker
{
    // Metodo per verificare se un numero è pari
    public function isEven(int $number): bool
    {
        return $number % 2 === 0;  // Restituisce true se pari, false se dispari
    }
}

