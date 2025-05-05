<?php

namespace App\Entity;

use registration\src\Repository\LogObjectRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: LogObjectRepository::class)]
class LogObject
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['e_list', 'e_detail', 'log_object_list', 'e_internal_list'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['e_list', 'e_detail', 'log_object_list', 'e_internal_list'])]
    private ?string $title = null;

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
}
