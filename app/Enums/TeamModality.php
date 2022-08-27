<?php

namespace App\Enums;

enum TeamModality: int
{
    case MascFootsal = 1;
    case FemFootsal = 2;
    case Voleybal = 3;
    case PingPong = 4;
    case Stamp = 5;
    case FootDesk = 6;

    public function toString(): string
    {
        return match ($this) {
            self::MascFootsal => 'Futsal Masculino',
            self::FemFootsal => 'Futsal Feminino',
            self::Voleybal => 'Vôlei',
            self::PingPong => 'Ping Pong',
            self::Stamp => 'Carimba',
            self::FootDesk => 'Futmesa',
        };
    }
}
