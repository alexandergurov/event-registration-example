<?php

namespace App\DataFixtures\LogTypes;

use registration\src\DataFixtures\LogTypePropertiesFixtures;
use registration\src\Entity\LogType;
use registration\src\Enum\LogTypeState;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class LogTypeDictionaryFieldFixtures extends Fixture
{

    public function load(ObjectManager $manager): void
    {
        $logTypeDictionaryCreate = new LogType();
        $logTypeDictionaryCreate->setTitle('Добавление записи в справочник "Предметная область"');
        $logTypeDictionaryCreate->setDescription('Добавление записи в справочник "Предметная область"');
        $logTypeDictionaryCreate->setState(LogTypeState::SUCCESS->value);
        $logTypeDictionaryCreate->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_CREATE_REFERENCE));
        $logTypeDictionaryCreate->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_DICTIONARY_FIELD_REFERENCE));
        $logTypeDictionaryCreate->setSubsystemCode('dictionary');
        $manager->persist($logTypeDictionaryCreate);

        $logTypeDictionaryCreateFail = new LogType();
        $logTypeDictionaryCreateFail->setTitle('Ошибка добавления записи в справочник "Предметная область"');
        $logTypeDictionaryCreateFail->setDescription('Ошибка добавления записи в справочник "Предметная область"');
        $logTypeDictionaryCreateFail->setState(LogTypeState::FAILURE->value);
        $logTypeDictionaryCreateFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_CREATE_REFERENCE));
        $logTypeDictionaryCreateFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_DICTIONARY_FIELD_REFERENCE));
        $logTypeDictionaryCreateFail->setSubsystemCode('dictionary');
        $manager->persist($logTypeDictionaryCreateFail);

        $logTypeDictionaryUpdate = new LogType();
        $logTypeDictionaryUpdate->setTitle('Редактирование записи в справочнике "Предметная область"');
        $logTypeDictionaryUpdate->setDescription('Редактирование записи в справочнике "Предметная область"');
        $logTypeDictionaryUpdate->setState(LogTypeState::SUCCESS->value);
        $logTypeDictionaryUpdate->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_UPDATE_REFERENCE));
        $logTypeDictionaryUpdate->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_DICTIONARY_FIELD_REFERENCE));
        $logTypeDictionaryUpdate->setSubsystemCode('dictionary');
        $manager->persist($logTypeDictionaryUpdate);

        $logTypeDictionaryUpdateFail = new LogType();
        $logTypeDictionaryUpdateFail->setTitle('Ошибка редактирования в справочнике "Предметная область"');
        $logTypeDictionaryUpdateFail->setDescription('Ошибка редактирования в справочнике "Предметная область"');
        $logTypeDictionaryUpdateFail->setState(LogTypeState::FAILURE->value);
        $logTypeDictionaryUpdateFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_UPDATE_REFERENCE));
        $logTypeDictionaryUpdateFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_DICTIONARY_FIELD_REFERENCE));
        $logTypeDictionaryUpdateFail->setSubsystemCode('dictionary');
        $manager->persist($logTypeDictionaryUpdateFail);

        $logTypeDictionaryDelete = new LogType();
        $logTypeDictionaryDelete->setTitle('Удаление записи из справочника "Предметная область"');
        $logTypeDictionaryDelete->setDescription('Удаление записи из справочника "Предметная область"');
        $logTypeDictionaryDelete->setState(LogTypeState::SUCCESS->value);
        $logTypeDictionaryDelete->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_DELETE_REFERENCE));
        $logTypeDictionaryDelete->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_DICTIONARY_FIELD_REFERENCE));
        $logTypeDictionaryDelete->setSubsystemCode('dictionary');
        $manager->persist($logTypeDictionaryDelete);

        $logTypeDictionaryDeleteFail = new LogType();
        $logTypeDictionaryDeleteFail->setTitle('Ошибка удаления записи из справочника "Предметная область"');
        $logTypeDictionaryDeleteFail->setDescription('Ошибка удаления записи из справочника "Предметная область"');
        $logTypeDictionaryDeleteFail->setState(LogTypeState::FAILURE->value);
        $logTypeDictionaryDeleteFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_DELETE_REFERENCE));
        $logTypeDictionaryDeleteFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_DICTIONARY_FIELD_REFERENCE));
        $logTypeDictionaryDeleteFail->setSubsystemCode('dictionary');
        $manager->persist($logTypeDictionaryDeleteFail);

        $manager->flush();
    }
}