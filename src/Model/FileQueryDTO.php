<?php


namespace App\Model;

use microservices\eventuse Symfony\Component\Validator\Constraints as Assert;

/**
 * Class FileQueryDTO
 * @package App\Model
 */
class FileQueryDTO extends BaseQueryDTO
{
    public function __construct(
        public int|null $page = 1,

        public int|null $pageSize = 10,

        #[Assert\Regex(
            pattern: '/^(-?(title),)*-?(title)$/',
            message: "sort содержит не поддерживаемое значение",
        )]
        public ?string  $sort = null,
    )
    {
    }

}
