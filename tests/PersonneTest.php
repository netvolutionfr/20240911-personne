<?php

use App\Personne;
use PHPUnit\Framework\TestCase;

class PersonneTest extends TestCase {
    public function testImc() {
        $personne = new Personne("Doe", "John", new DateTime("2000-01-01"), 180, 80, "brun");
        $this->assertEqualsWithDelta(24.69, $personne->imc(), 0.01, "L'IMC de John Doe est incorrect");
    }
}