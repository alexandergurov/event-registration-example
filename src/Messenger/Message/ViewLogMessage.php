<?php

namespace App\Messenger\Message;


class ViewLogMessage
{
    public function __construct(
        public string $entityType,
        public string $entityId,
        public string $userId,
    )
    {
    }
}