<?php

namespace App\Model;

use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class FileDTO
 * @package App\Model
 */
class FileDTO
{
    public function __construct(

        public ?string $sort,

        public ?string $url,

        public ?string $status,

        /**
         * @var string[]
         */
        #[Groups(['create', 'update'])]
        public ?array $queryParams

    ) {
    }
}
