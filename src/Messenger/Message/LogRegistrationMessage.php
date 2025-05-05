<?php

namespace App\Messenger\Message;

use registration\src\Model\LogDTO;

class LogRegistrationMessage extends registration\src\Model\LogDTO
{
    public ?string $userId;
    public ?string $roleCode;

    public ?string $username;
    public ?int $logTypeId;

    public ?string $url;

    public ?string $methodName;
    public ?string $httpStatus;

    public ?int $objectId;
    public ?string $searchContent;

    public ?array $data;
    public ?string $digitalAssistant;

    public function __construct(LogDTO $dto = null)
    {
        $this->userId = $dto?->userId;
        $this->roleCode = $dto?->roleCode;
        $this->username = $dto?->username;
        $this->logTypeId = $dto?->logTypeId;
        $this->url = $dto?->url;
        $this->methodName = $dto?->methodName;
        $this->httpStatus = $dto?->httpStatus;
        $this->objectId = $dto?->objectId;
        $this->searchContent = $dto?->searchContent;
        $this->data = $dto?->data;
        $this->digitalAssistant = $dto?->digitalAssistant;
    }

    public function getUserId(): ?string
    {
        return $this->userId;
    }

    public function setUserId($id): static
    {
        $this->userId = $id;
        return $this;
    }

    public function getRoleCode(): ?string
    {
        return $this->roleCode;
    }

    public function setRoleCode($roleCode): static
    {
        $this->roleCode = $roleCode;
        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername($username): static
    {
        $this->username = $username;
        return $this;
    }

    public function getLogTypeId(): ?string
    {
        return $this->logTypeId;
    }

    public function setLogTypeId($id): static
    {
        $this->logTypeId = $id;
        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl($url): static
    {
        $this->url = $url;
        return $this;
    }

    public function getMethodName(): ?string
    {
        return $this->methodName;
    }

    public function setMethodName($methodName): static
    {
        $this->methodName = $methodName;
        return $this;
    }

    public function getHttpStatus(): ?string
    {
        return $this->httpStatus;
    }

    public function setHttpStatus($httpStatus): static
    {
        $this->httpStatus = $httpStatus;
        return $this;
    }

    public function getObjectId(): ?string
    {
        return $this->objectId;
    }

    public function setObjectId($id): static
    {
        $this->objectId = $id;
        return $this;
    }

    public function getSearchContent(): ?string
    {
        return $this->searchContent;
    }

    public function setSearchContent($searchContent): static
    {
        $this->searchContent = $searchContent;
        return $this;
    }

    public function getData(): ?array
    {
        return $this->data;
    }

    public function setData($data): static
    {
        $this->data = $data;
        return $this;
    }

    public function getDigitalAssistant(): ?string
    {
        return $this->digitalAssistant;
    }

    public function setDigitalAssistant(?string $digitalAssistant): static
    {
        $this->digitalAssistant = $digitalAssistant;

        return $this;
    }
}
