<?php

namespace Alura\Solid\Model;

class Feedback 
{
    private int $nota ;
    private string $feedback;

    public function __construct(int $nota, ?string $feedback)
    {
        if ($nota < 9 && empty($depoimento)) {
            throw new \DomainException('Depoimento obrigatório');
        }

        $this->$nota = $nota;
        $this->feedback = $feedback;
    }

    public function getNota(): int
    {
        return $this->nota;
    }

    public function getDepoimento(): string
    {
        return $this->feedback;
    }
    

}