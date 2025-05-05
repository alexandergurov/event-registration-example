<?php

namespace App\Model;

use microservices\eventuse Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class FileRequestDTO
 * @package App\Model
 */
class FileRequestDTO
{
    public function __construct(
        #[Assert\NotBlank(message: 'Поле data не может быть пустым.', groups: ['create', 'update'])]
        #[Assert\Valid(groups: ['create', 'update'])]
        #[Groups(['create', 'update'])]
        public FileDTO $data,
    ) {
    }
}
