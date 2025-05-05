<?php

namespace App\Model;

/**
 * Class BaseQueryDTO
 * @package App\Model
 */
abstract class BaseQueryDTO
{
    public function getCriteria(): array
    {
        return [];
    }

    public function getSort(): array
    {
        $sort = [];

        if (!empty($this->sort)) {
            $fields = explode(',', $this->sort);
            foreach ($fields as $field) {
                if (str_starts_with($field, '-')) {
                    $sort[substr($field, 1)] = 'DESC';
                } else {
                    $sort[$field] = 'ASC';
                }
            }
        }

        return $sort;
    }
}
