<?php

namespace App\Messenger\Handler;

use registration\src\Messenger\Message\ViewLogMessage;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;
use Symfony\Component\Messenger\MessageBusInterface;

#[AsMessageHandler]
class ViewLogHandler
{
    public function __construct(protected MessageBusInterface $bus)
    {
    }

    public function __invoke(ViewLogMessage $message): void
    {

    }
}