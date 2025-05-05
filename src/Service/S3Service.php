<?php

namespace App\Service;

use Aws\ResultInterface;
use Aws\S3\S3Client;

class S3Service
{
    public function __construct(
        private string $bucket,
        private S3Client $client
    ) {
    }

    /**
     * @param array<string,mixed> $meta
     */
    public function upload(
        string $fileName,
        string $content,
        string $contentType = 'application/octet-stream',
        array $meta = [],
        string $privacy = 'public-read'
    ): string {
        $result = $this->client->putObject([
            'Bucket' => $this->bucket,
            'Key' => $fileName,
            'Body' => $content,
            'Metadata' => $meta,
            'ACL' => $privacy,
            'ContentType' => $contentType,
        ]);

        return $result['ObjectURL'];
    }

    /**
     * @param array<string, mixed> $meta
     */
    public function uploadFile(
        string $fileName,
        string $content,
        string $contentType,
        array $meta = [],
        string $privacy = 'public-read'
    ): string {
        return $this->upload($fileName, $content, $contentType, $meta, $privacy);
    }

    public function uploadFileByPath(string $bucket, string $s3_key, string $filePath): string
    {
        $result = $this->client->putObject([
            'Bucket' => $bucket,
            'Key' => $s3_key,
            'SourceFile' => $filePath,
        ]);

        return $result['ObjectURL'];
    }

    public function getBucket(): string
    {
        return $this->bucket;
    }

    public function fileExist(string $fileName): bool
    {
        return $this->doesObjectExist($this->bucket, $fileName);
    }

    public function doesObjectExist(string $bucket, string $key): bool
    {
        return $this->client->doesObjectExist($bucket, $key);
    }

    public function getObject(string $bucket, string $key): ResultInterface
    {
        return $this->client->getObject(['Bucket' => $bucket, 'Key' => $key]);
    }
}
