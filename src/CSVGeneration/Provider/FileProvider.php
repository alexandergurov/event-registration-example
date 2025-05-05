<?php

namespace App\CSVGeneration\Provider;

use registration\src\Enum\FileRequestStatus;
use registration\src\Repository\FileRequestRepository;
use registration\src\Repository\LogRepository;

class FileProvider
{

    public function __construct(
        protected LogRepository $logRepository,
        protected FileRequestRepository $fileRequestRepository
    )
    {
    }

    public function prepareFile($data): false|string
    {
        $csvTitles = [
            "Идентификатор типа действия", "Тип действия над объектом", "Описание типа действия",
            "Идентификатор категории события", "Название категории события", "Дата и время регистрации", "Id пользователя",
            "Роль пользователя", "Код источника информации",  "Идентификатор типа объекта события",
            "Тип объекта события", "Идентификатор объекта"
        ];

        $queryParams = $data->getQueryParams();
        $logs = $this->logRepository->findLogEntries($queryParams);
        if (empty($logs)) {
            $data->setStatus(FileRequestStatus::FAILURE->value);
            $this->fileRequestRepository->save($data);
        }

        $tempCSV = tempnam('/tmp', 'csv_');
        $fileHandler = fopen($tempCSV.'.csv', 'w');
        fputcsv($fileHandler, $csvTitles);
        foreach($logs as $log) {
            $log["createdAt"] = $log["createdAt"]->format('Y-m-d h:i');
            fputcsv($fileHandler, $log);
        }
        fclose($fileHandler);

        return $tempCSV;
    }
}