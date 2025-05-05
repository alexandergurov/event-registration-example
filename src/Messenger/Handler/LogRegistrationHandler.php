<?php

namespace App\Messenger\Handler;

use registration\src\Exception\LogException;
use registration\src\Messenger\Message\LogRegistrationMessage;
use registration\src\Messenger\Message\SearchMessage;
use registration\src\Repository\LogTypeRepository;
use registration\src\Service\LogManager;
use Psr\Log\LoggerInterface;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;
use Symfony\Component\Messenger\Envelope;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Serializer\Exception\ExceptionInterface;

#[AsMessageHandler]
class LogRegistrationHandler
{
    private LoggerInterface $logger;

    public function __construct(
        protected MessageBusInterface $bus,
        private readonly LogManager $manager,
        protected readonly LogTypeRepository $logTypeRepository,
        private readonly LoggerInterface $messageRegistrationLogger,
    )
    {
        $this->logger = $this->messageRegistrationLogger;
    }

    /**
     * @throws ExceptionInterface
     * @throws registration\src\Exception\LogException
     */
    public function __invoke(LogRegistrationMessage $message): void
    {
        try {
            $this->manager->create($message, 'e_created');

            $logType = $this->logTypeRepository->find($message->getLogTypeId());

            if ($logType?->getLogCategory()?->getTitle() === 'search'
                && !empty($message->searchContent)) {
                $searchMessage = new SearchMessage($message->userId, $message->searchContent);
                $this->bus->dispatch(
                    new Envelope(
                        $searchMessage,
                    )
                );
            }
        } catch (\Exception $e) {
            $this->logger->critical($e);
        }
    }
}