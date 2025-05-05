<?php

namespace App\CSVGeneration\Service;

use registration\src\CSVGeneration\Exception\QueueException;
use registration\src\CSVGeneration\Provider\FileProvider;
use registration\src\CSVGeneration\Resolver\FileResolver;
use registration\src\Entity\FileRequest;
use registration\src\Enum\FileRequestStatus;
use registration\src\Repository\FileRequestRepository;
use registration\src\Service\FileManager;
use registration\src\Service\UserProfile;

class CSVGenerationService
{
    public function __construct(
        protected registration\src\Service\UserProfile $userProfile,
        protected FileRequestRepository                $fileRequestRepository,
        protected FileProvider                         $fileProvider,
        protected FileResolver                         $fileResolver,
        protected registration\src\Service\FileManager $fileManager
    )
    {
    }

    public function start(): void
    {
        $queues = $this->fileRequestRepository->getPendingFileRequests();
        foreach ($queues as $queue) {
            try {
                $this->setStatus($queue, FileRequestStatus::PROCESSING->value);
                $filePath = $this->fileProvider->prepareFile($queue);
                if ($filePath) {
                    $fileUrl = $this->fileResolver->resolveFile($filePath);
                    $this->fileManager->updateFileGenerationResult($queue, $fileUrl, FileRequestStatus::FINISHED->value);
                }
            } catch (QueueException $exception) {
                $this->setStatus($queue, FileRequestStatus::FAILURE->value);
            }

        }
    }

    protected function setStatus(
        FileRequest $queue,
        string $status,
    ): void
    {
        $queue->setStatus($status);
        $this->fileRequestRepository->save($queue);
    }

}