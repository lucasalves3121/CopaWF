<?php

namespace App\Enums;

enum TeamModality: int
{
    case MascFootebal = 1;
    case FemFootebal = 2;
    case Voleybal = 3;
    case PingPong = 4;
    case Stamp = 5;

    public function toString(): string
    {
        return match ($this) {
            self::MascFootebal => 'Futebol Masculino',
            self::FemFootebal => 'Futebol Feminino',
            self::Voleybal => 'Vôlei',
            self::PingPong => 'Ping Pong',
            self::Stamp => 'Carimba',
        };
    }
}
