<?php

namespace App\Enums;

enum TeamGender: string
{
    case Masculine = 'M';
    case Feminine = 'F';
    case Mist = 'O';

    public function toString(): string
    {
        return match ($this) {
            self::Masculine => 'Masculino',
            self::Feminine => 'Feminino',
            self::Mist => 'Misto',
        };
    }
}
