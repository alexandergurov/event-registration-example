<?php

namespace App\CSVGeneration\Resolver;

use registration\src\Service\S3Service;
use function Symfony\Component\DependencyInjection\Loader\Configurator\env;

class FileResolver
{
    public function __construct(
        protected S3Service $s3Service,
    )
    {
    }

    public function resolveFile($filePath): string
    {
        $fileName = explode('/', $filePath.'.csv');
        $fileURL = $this->s3Service->uploadFileByPath('dev-log-registration', end($fileName), $filePath.'.csv');
        unlink($filePath);
        unlink($filePath.'.csv');
        return $fileURL;
    }
}