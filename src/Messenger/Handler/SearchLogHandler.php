<?php

namespace App\Messenger\Handler;

use registration\src\Messenger\Message\SearchMessage;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;
use Symfony\Component\Messenger\MessageBusInterface;

#[AsMessageHandler]
class SearchLogHandler
{
    public function __construct(protected MessageBusInterface $bus)
    {
    }

    public function __invoke(SearchMessage $message): void
    {

    }
}