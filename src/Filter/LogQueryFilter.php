<?php

namespace App\Filter;

use registration\src\Model\LogQueryDTO;

class LogQueryFilter
{
    /**
     * LogQueryFilter constructor.
     * @param registration\src\Model\LogQueryDTO $dto
     */
    public function __construct(
        protected LogQueryDTO $dto
    ){
    }

    /**
     * @return array
     */
    public function getCriteria(): array
    {
        $criteria = [];
        if ($this->dto->user) {
            $criteria['user'] = $this->dto->user;
        }
        if ($this->dto->logCategory) {
            $criteria['logCategory'] = $this->dto->logCategory;
        }
        if ($this->dto->logObject) {
            $criteria['logObject'] = $this->dto->logObject;
        }
        if ($this->dto->subsystemCode) {
            $criteria['subsystemCode'] = $this->dto->subsystemCode;
        }
        if ($this->dto->createdAtFrom) {
            $criteria['createdAtFrom'] = $this->dto->createdAtFrom;
        }
        if ($this->dto->createdAtTo) {
            $criteria['createdAtTo'] = $this->dto->createdAtTo;
        }
        if ($this->dto->itemsNotReturned) {
            $criteria['itemsNotReturned'] = $this->dto->itemsNotReturned;
        }
        if ($this->dto->digitalAssistant) {
            $criteria['digitalAssistant'] = $this->dto->digitalAssistant;
        }
        return $criteria;
    }
}