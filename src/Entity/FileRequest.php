<?php

namespace App\Entity;

use registration\src\Repository\FileRequestRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Serializer\Annotation\Context;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;

#[ORM\Entity(repositoryClass: FileRequestRepository::class)]
class FileRequest
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['f_list', 'f_created'])]
    private ?int $id = null;

    #[Gedmo\Timestampable(on: 'create')]
    #[Context(normalizationContext: [DateTimeNormalizer::FORMAT_KEY => 'Y-m-d\TH:i:sp'])]
    #[ORM\Column(type: Types::DATETIMETZ_MUTABLE)]
    #[Groups(['f_list', 'f_created'])]
    private ?\DateTimeInterface $createdAt = null;

    #[Gedmo\Timestampable(on: 'update')]
    #[Context(normalizationContext: [DateTimeNormalizer::FORMAT_KEY => 'Y-m-d\TH:i:sp'])]
    #[ORM\Column(type: Types::DATETIMETZ_MUTABLE)]
    #[Groups(['f_list', 'f_created'])]
    private ?\DateTimeInterface $updatedAt = null;

    #[ORM\Column(length: 255)]
    #[Groups(['f_list'])]
    private ?string $userId = null;

    #[ORM\Column(length: 255)]
    #[Groups(['f_list', 'f_created'])]
    private ?string $status = null;

    /**
     * @var string[]|null
     */
    #[ORM\Column(type: Types::JSON)]
    #[Groups(['f_list'])]
    private ?array $queryParams = [];

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['f_list'])]
    private ?string $url = null;

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

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

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

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getQueryParams(): ?array
    {
        return $this->queryParams;
    }

    public function setQueryParams(?array $queryParams): static
    {
        $this->queryParams = $queryParams;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): static
    {
        $this->url = $url;

        return $this;
    }
}
