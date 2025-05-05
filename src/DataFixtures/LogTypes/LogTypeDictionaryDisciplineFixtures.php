<?php

namespace App\DataFixtures\LogTypes;

use registration\src\DataFixtures\LogTypePropertiesFixtures;
use registration\src\Entity\LogType;
use registration\src\Enum\LogTypeState;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class LogTypeDictionaryDisciplineFixtures extends Fixture
{

    public function load(ObjectManager $manager): void
    {
        $logTypeDictionaryCreate = new LogType();
        $logTypeDictionaryCreate->setTitle('Добавление записи в справочник "Дисциплины"');
        $logTypeDictionaryCreate->setDescription('Добавление записи в справочник "Дисциплины"');
        $logTypeDictionaryCreate->setState(LogTypeState::SUCCESS->value);
        $logTypeDictionaryCreate->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_CREATE_REFERENCE));
        $logTypeDictionaryCreate->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_DICTIONARY_DISCIPLINE_REFERENCE));
        $logTypeDictionaryCreate->setSubsystemCode('dictionary');
        $manager->persist($logTypeDictionaryCreate);

        $logTypeDictionaryCreateFail = new LogType();
        $logTypeDictionaryCreateFail->setTitle('Ошибка добавления записи в справочник "Дисциплины"');
        $logTypeDictionaryCreateFail->setDescription('Ошибка добавления записи в справочник "Дисциплины"');
        $logTypeDictionaryCreateFail->setState(LogTypeState::FAILURE->value);
        $logTypeDictionaryCreateFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_CREATE_REFERENCE));
        $logTypeDictionaryCreateFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_DICTIONARY_DISCIPLINE_REFERENCE));
        $logTypeDictionaryCreateFail->setSubsystemCode('dictionary');
        $manager->persist($logTypeDictionaryCreateFail);

        $logTypeDictionaryUpdate = new LogType();
        $logTypeDictionaryUpdate->setTitle('Редактирование записи в справочнике "Дисциплины"');
        $logTypeDictionaryUpdate->setDescription('Редактирование записи в справочнике "Дисциплины"');
        $logTypeDictionaryUpdate->setState(LogTypeState::SUCCESS->value);
        $logTypeDictionaryUpdate->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_UPDATE_REFERENCE));
        $logTypeDictionaryUpdate->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_DICTIONARY_DISCIPLINE_REFERENCE));
        $logTypeDictionaryUpdate->setSubsystemCode('dictionary');
        $manager->persist($logTypeDictionaryUpdate);

        $logTypeDictionaryUpdateFail = new LogType();
        $logTypeDictionaryUpdateFail->setTitle('Ошибка редактирования записи в справочнике "Дисциплины"');
        $logTypeDictionaryUpdateFail->setDescription('Ошибка редактирования записи в справочнике "Дисциплины"');
        $logTypeDictionaryUpdateFail->setState(LogTypeState::FAILURE->value);
        $logTypeDictionaryUpdateFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_UPDATE_REFERENCE));
        $logTypeDictionaryUpdateFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_DICTIONARY_DISCIPLINE_REFERENCE));
        $logTypeDictionaryUpdateFail->setSubsystemCode('dictionary');
        $manager->persist($logTypeDictionaryUpdateFail);

        $logTypeDictionaryDelete = new LogType();
        $logTypeDictionaryDelete->setTitle('Удаление записи из справочника "Дисциплины"');
        $logTypeDictionaryDelete->setDescription('Удаление записи из справочника "Дисциплины"');
        $logTypeDictionaryDelete->setState(LogTypeState::SUCCESS->value);
        $logTypeDictionaryDelete->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_DELETE_REFERENCE));
        $logTypeDictionaryDelete->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_DICTIONARY_DISCIPLINE_REFERENCE));
        $logTypeDictionaryDelete->setSubsystemCode('dictionary');
        $manager->persist($logTypeDictionaryDelete);

        $logTypeDictionaryDeleteFail = new LogType();
        $logTypeDictionaryDeleteFail->setTitle('Ошибка удаления записи из справочника "Дисциплины"');
        $logTypeDictionaryDeleteFail->setDescription('Ошибка удаления записи из справочника "Дисциплины"');
        $logTypeDictionaryDeleteFail->setState(LogTypeState::FAILURE->value);
        $logTypeDictionaryDeleteFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_DELETE_REFERENCE));
        $logTypeDictionaryDeleteFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_DICTIONARY_DISCIPLINE_REFERENCE));
        $logTypeDictionaryDeleteFail->setSubsystemCode('dictionary');
        $manager->persist($logTypeDictionaryDeleteFail);

        $manager->flush();
    }
}