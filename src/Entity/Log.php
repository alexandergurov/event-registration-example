<?php

namespace App\Entity;

use registration\src\Repository\LogRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use microservices\eventuse microservices\eventuse microservices\eventuse Symfony\Component\Serializer\Annotation\Context;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Gedmo\Mapping\Annotation as Gedmo;

#[ORM\Entity(repositoryClass: LogRepository::class)]
class Log
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['e_list', 'e_detail', 'e_created', 'e_search_list', 'e_internal_list'])]
    private ?int $id = null;

    #[Gedmo\Timestampable(on: 'create')]
    #[Context(normalizationContext: [DateTimeNormalizer::FORMAT_KEY => 'Y-m-d\TH:i:sp'])]
    #[ORM\Column(type: Types::DATETIMETZ_MUTABLE)]
    #[Groups(['e_list', 'e_detail', 'e_created', 'e_search_list', 'e_internal_list'])]
    private ?\DateTimeInterface $createdAt = null;

    #[ORM\Column(length: 255)]
    #[Groups(['e_list', 'e_detail', 'e_internal_list'])]
    private ?string $userId = null;

    #[ORM\Column(length: 255)]
    #[Groups(['e_list', 'e_detail', 'e_internal_list'])]
    private ?string $roleCode = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Groups(['e_list', 'e_detail', 'e_internal_list'])]
    private ?string $url = null;

    #[ORM\Column(length: 255)]
    #[Groups(['e_list', 'e_detail', 'e_internal_list'])]
    private ?string $methodName = null;

    #[ORM\Column(length: 255)]
    #[Groups(['e_list', 'e_detail', 'e_internal_list'])]
    private ?string $httpStatus = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['e_list', 'e_detail', 'e_internal_list'])]
    private ?int $objectId = null;

    #[ORM\ManyToOne(inversedBy: 'logs')]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups(['e_list', 'e_detail', 'e_internal_list'])]
    private ?LogType $logType = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    #[Groups(['e_list', 'e_detail', 'e_search_list', 'e_internal_list'])]
    private ?string $searchContent = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['e_list', 'e_detail', 'e_internal_list'])]
    private ?string $username = null;


    /**
     * @var string[]|null
     */
    #[ORM\Column(type: Types::JSON, nullable: true)]
    #[Groups(['e_detail', 'e_internal_list'])]
    private ?array $data = null;

    #[Groups(['e_list', 'e_detail', 'e_search_list', 'e_internal_list'])]
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $digitalAssistant = null;


    public function __construct()
    {

    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUserId(): ?string
    {
        return $this->userId;
    }

    public function setUserId(string $userId): static
    {
        $this->userId = $userId;

        return $this;
    }

    public function getRoleCode(): ?string
    {
        return $this->roleCode;
    }

    public function setRoleCode(string $roleCode): static
    {
        $this->roleCode = $roleCode;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): static
    {
        $this->url = $url;

        return $this;
    }

    public function getMethodName(): ?string
    {
        return $this->methodName;
    }

    public function setMethodName(string $methodName): static
    {
        $this->methodName = $methodName;

        return $this;
    }

    public function getHttpStatus(): ?string
    {
        return $this->httpStatus;
    }

    public function setHttpStatus(string $httpStatus): static
    {
        $this->httpStatus = $httpStatus;

        return $this;
    }

    public function getObjectId(): ?int
    {
        return $this->objectId;
    }

    public function setObjectId(?int $objectId): static
    {
        $this->objectId = $objectId;

        return $this;
    }

    public function getLogType(): ?LogType
    {
        return $this->logType;
    }

    public function setLogType(?LogType $logType): static
    {
        $this->logType = $logType;

        return $this;
    }

    public function getSearchContent(): ?string
    {
        return $this->searchContent;
    }

    public function setSearchContent(?string $searchContent): static
    {
        $this->searchContent = $searchContent;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(?string $username): static
    {
        $this->username = $username;

        return $this;
    }

    public function getData(): ?array
    {
        return $this->data;
    }

    public function setData(?array $data): static
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
