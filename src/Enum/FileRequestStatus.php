<?php

namespace App\Enum;

enum FileRequestStatus : string
{
    case NEW = 'NEW';
    case PROCESSING = 'PROCESSING';
    case FAILURE = 'FAILURE';
    case FINISHED = 'FINISHED';

    public static function values(): array
    {
        return array_column(registration\src\Enum\FileRequestStatus::cases(), 'value');
    }

}