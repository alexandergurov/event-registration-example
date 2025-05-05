<?php

namespace App\Model;

use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class LogDTO
 * @package App\Model
 */
class LogDTO
{
    public function __construct(

        #[Assert\NotBlank(message: 'Поле "Категория события" не может быть пустым.', groups: ['create', 'update'])]
        #[Groups(['create', 'update'])]
        public ?string $logCategory,

        #[Assert\NotBlank(message: 'Поле "Объект события" не может быть пустым.', groups: ['create', 'update'])]
        #[Groups(['create', 'update'])]
        public ?string $logObject,

        #[Assert\NotBlank(message: 'Поле "Ссылка" не может быть пустым.', groups: ['create', 'update'])]
        #[Groups(['create', 'update'])]
        public ?string $url,

        #[Assert\NotBlank(message: 'Поле "Метод" не может быть пустым.', groups: ['create', 'update'])]
        #[Groups(['create', 'update'])]
        public ?string $methodName,

        #[Assert\NotBlank(message: 'Поле "Статус" не может быть пустым.', groups: ['create', 'update'])]
        #[Groups(['create', 'update'])]
        public ?string $httpStatus,

        #[Groups(['create', 'update'])]
        public ?int $objectId,

        #[Groups(['create', 'update'])]
        public ?string $searchContent,

        /**
         * @var string[]
         */
        #[Groups(['create', 'update'])]
        public ?array $data,

        #[Groups(['create', 'update'])]
        public ?string $digitalAssistant,

        public ?int $logTypeId,

        public ?string $roleCode,

        public ?string $userId,
        public ?string $username
    ) {
    }
}
