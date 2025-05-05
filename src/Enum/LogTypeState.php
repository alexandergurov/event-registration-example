<?php

namespace App\Enum;

use microservices\eventenum LogTypeState : string
{
    case FAILURE = 'FAILURE';
    case SUCCESS = 'SUCCESS';
    case WARNING = 'WARNING';

    public static function values(): array
    {
        return array_column(FileRequestStatus::cases(), 'value');
    }

}