<?php

namespace App\Entity;

use registration\src\Repository\LogCategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: LogCategoryRepository::class)]
class LogCategory
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['e_list', 'e_detail', 'e_internal_list'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['e_list', 'e_detail', 'e_internal_list'])]
    private ?string $title = null;


    public function __construct()
    {
        $this->title = 'test title';
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
