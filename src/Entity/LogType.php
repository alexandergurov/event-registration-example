<?php

namespace App\Entity;

use microservices\eventuse microservices\eventuse microservices\eventuse registration\src\Repository\LogTypeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use microservices\eventuse microservices\eventuse microservices\eventuse Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: LogTypeRepository::class)]
class LogType
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['e_list', 'e_detail', 'e_internal_list'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['e_list', 'e_detail', 'e_internal_list'])]
    private ?string $title = null;

    #[ORM\Column(length: 255)]
    #[Groups(['e_list', 'e_detail', 'e_internal_list'])]
    private ?string $description = null;

    #[ORM\ManyToOne(inversedBy: 'logTypes')]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups(['e_list', 'e_detail', 'e_internal_list'])]
    private ?LogCategory $logCategory = null;

    #[ORM\ManyToOne(inversedBy: 'logTypes')]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups(['e_list', 'e_detail', 'e_internal_list'])]
    private ?LogObject $logObject = null;

    #[ORM\Column(length: 255)]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups(['e_list', 'e_detail', 'e_internal_list'])]
    private ?string $subsystemCode = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['e_list', 'e_detail', 'e_internal_list'])]
    private ?string $state = null;

    public function __construct()
    {

    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getLogCategory(): ?LogCategory
    {
        return $this->logCategory;
    }

    public function setLogCategory(?LogCategory $logCategory): static
    {
        $this->logCategory = $logCategory;

        return $this;
    }

    public function getLogObject(): ?LogObject
    {
        return $this->logObject;
    }

    public function setLogObject(?LogObject $logObject): static
    {
        $this->logObject = $logObject;

        return $this;
    }

    public function getSubsystemCode(): ?string
    {
        return $this->subsystemCode;
    }

    public function setSubsystemCode(string $subsystemCode): static
    {
        $this->subsystemCode = $subsystemCode;

        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): static
    {
        $this->state = $state;

        return $this;
    }
}
