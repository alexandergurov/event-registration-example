<?php

namespace App\DataFixtures\LogTypes;

use registration\src\DataFixtures\LogTypePropertiesFixtures;
use registration\src\Entity\LogType;
use registration\src\Enum\LogTypeState;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class LogTypeSearchFixtures extends Fixture
{

    public function load(ObjectManager $manager): void
    {
        $logTypeSearch = new LogType();
        $logTypeSearch->setTitle('Сквозной поиск');
        $logTypeSearch->setDescription('Сквозной поиск');
        $logTypeSearch->setState(LogTypeState::SUCCESS->value);
        $logTypeSearch->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_SEARCH_REFERENCE));
        $logTypeSearch->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_SEARCH_REFERENCE));
        $logTypeSearch->setSubsystemCode('search-engine');
        $manager->persist($logTypeSearch);

        $logTypeSearchFail = new LogType();
        $logTypeSearchFail->setTitle('Ошибка сквозного поиска');
        $logTypeSearchFail->setDescription('Ошибка сквозного поиска');
        $logTypeSearchFail->setState(LogTypeState::FAILURE->value);
        $logTypeSearchFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_SEARCH_REFERENCE));
        $logTypeSearchFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_SEARCH_REFERENCE));
        $logTypeSearchFail->setSubsystemCode('search-engine');
        $manager->persist($logTypeSearchFail);

        $manager->flush();
    }
}