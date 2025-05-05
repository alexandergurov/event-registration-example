<?php

namespace App\Messenger\Message;

class SearchMessage
{
    public function __construct(
        public string $userId,
        public string $search,
    )
    {
    }
}