<?php

namespace App\Model;

use registration\src\Model\BaseQueryDTO;
use Symfony\Component\Serializer\Annotation\Context;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class LogQueryDTO
 * @package App\Model
 */
class LogQueryDTO extends registration\src\Model\BaseQueryDTO
{
    public function __construct(
        public int|null $page = 1,

        public int|null $pageSize = 10,

        #[Assert\Regex(
            pattern: '/^(-?(createdAt),)*-?(createdAt)$/',
            message: "sort содержит не поддерживаемое значение",
        )]
        public ?string $sort = null,
        public ?string $user = null,
        public ?string $logCategory = null,
        public ?string $subsystemCode = null,
        public ?string $logObject = null,
        #[Context(denormalizationContext: [DateTimeNormalizer::FORMAT_KEY => 'Y-m-d'])]
        public ?string $createdAtFrom = null,
        #[Context(denormalizationContext: [DateTimeNormalizer::FORMAT_KEY => 'Y-m-d'])]
        public ?string $createdAtTo = null,
        public ?bool $itemsNotReturned = null,
        public ?string $digitalAssistant = null
    ) {
    }

}
