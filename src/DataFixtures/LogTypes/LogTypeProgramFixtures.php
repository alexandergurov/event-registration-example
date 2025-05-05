<?php

namespace App\DataFixtures\LogTypes;

use registration\src\DataFixtures\LogTypePropertiesFixtures;
use registration\src\Entity\LogType;
use registration\src\Enum\LogTypeState;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class LogTypeProgramFixtures extends Fixture
{

    public function load(ObjectManager $manager): void
    {
        $logTypeProgramCreate = new LogType();
        $logTypeProgramCreate->setTitle('Создание программы ДППО');
        $logTypeProgramCreate->setDescription('Создание программы ДППО');
        $logTypeProgramCreate->setState(LogTypeState::SUCCESS->value);
        $logTypeProgramCreate->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_CREATE_REFERENCE));
        $logTypeProgramCreate->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_PROGRAM_REFERENCE));
        $logTypeProgramCreate->setSubsystemCode('program');
        $manager->persist($logTypeProgramCreate);

        $logTypeProgramCreateFail = new LogType();
        $logTypeProgramCreateFail->setTitle('Ошибка создания программы ДППО');
        $logTypeProgramCreateFail->setDescription('Ошибка создания программы ДППО');
        $logTypeProgramCreateFail->setState(LogTypeState::FAILURE->value);
        $logTypeProgramCreateFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_CREATE_REFERENCE));
        $logTypeProgramCreateFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_PROGRAM_REFERENCE));
        $logTypeProgramCreateFail->setSubsystemCode('program');
        $manager->persist($logTypeProgramCreateFail);

        $logTypeProgramUpdate = new LogType();
        $logTypeProgramUpdate->setTitle('Редактирование программы ДППО');
        $logTypeProgramUpdate->setDescription('Редактирование программы ДППО');
        $logTypeProgramUpdate->setState(LogTypeState::SUCCESS->value);
        $logTypeProgramUpdate->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_UPDATE_REFERENCE));
        $logTypeProgramUpdate->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_PROGRAM_REFERENCE));
        $logTypeProgramUpdate->setSubsystemCode('program');
        $manager->persist($logTypeProgramUpdate);

        $logTypeProgramUpdateFail = new LogType();
        $logTypeProgramUpdateFail->setTitle('Ошибка редактирования программы ДППО');
        $logTypeProgramUpdateFail->setDescription('Ошибка редактирования программы ДППО');
        $logTypeProgramUpdateFail->setState(LogTypeState::FAILURE->value);
        $logTypeProgramUpdateFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_UPDATE_REFERENCE));
        $logTypeProgramUpdateFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_PROGRAM_REFERENCE));
        $logTypeProgramUpdateFail->setSubsystemCode('program');
        $manager->persist($logTypeProgramUpdateFail);

        $logTypeProgramDelete = new LogType();
        $logTypeProgramDelete->setTitle('Удаление программы ДППО');
        $logTypeProgramDelete->setDescription('Удаление программы ДППО');
        $logTypeProgramDelete->setState(LogTypeState::SUCCESS->value);
        $logTypeProgramDelete->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_DELETE_REFERENCE));
        $logTypeProgramDelete->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_PROGRAM_REFERENCE));
        $logTypeProgramDelete->setSubsystemCode('program');
        $manager->persist($logTypeProgramDelete);

        $logTypeProgramDeleteFail = new LogType();
        $logTypeProgramDeleteFail->setTitle('Ошибка удаления программы ДППО');
        $logTypeProgramDeleteFail->setDescription('Ошибка удаления программы ДППО');
        $logTypeProgramDeleteFail->setState(LogTypeState::FAILURE->value);
        $logTypeProgramDeleteFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_DELETE_REFERENCE));
        $logTypeProgramDeleteFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_PROGRAM_REFERENCE));
        $logTypeProgramDeleteFail->setSubsystemCode('program');
        $manager->persist($logTypeProgramDeleteFail);

        $logTypeProgramView = new LogType();
        $logTypeProgramView->setTitle('Просмотр программы ДППО');
        $logTypeProgramView->setDescription('Просмотр программы ДППО');
        $logTypeProgramView->setState(LogTypeState::SUCCESS->value);
        $logTypeProgramView->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_VIEW_REFERENCE));
        $logTypeProgramView->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_PROGRAM_REFERENCE));
        $logTypeProgramView->setSubsystemCode('program');
        $manager->persist($logTypeProgramView);

        $logTypeProgramViewFail = new LogType();
        $logTypeProgramViewFail->setTitle('Ошибка просмотра программы ДППО');
        $logTypeProgramViewFail->setDescription('Ошибка просмотра программы ДППО');
        $logTypeProgramViewFail->setState(LogTypeState::FAILURE->value);
        $logTypeProgramViewFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_VIEW_REFERENCE));
        $logTypeProgramViewFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_PROGRAM_REFERENCE));
        $logTypeProgramViewFail->setSubsystemCode('program');
        $manager->persist($logTypeProgramViewFail);

        $logTypeProgramGet = new LogType();
        $logTypeProgramGet->setTitle('Получение программы ДППО');
        $logTypeProgramGet->setDescription('Получение программы ДППО');
        $logTypeProgramGet->setState(LogTypeState::SUCCESS->value);
        $logTypeProgramGet->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_GET_REFERENCE));
        $logTypeProgramGet->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_PROGRAM_REFERENCE));
        $logTypeProgramGet->setSubsystemCode('program');
        $manager->persist($logTypeProgramGet);

        $logTypeProgramGetFail = new LogType();
        $logTypeProgramGetFail->setTitle('Ошибка получения программы ДППО');
        $logTypeProgramGetFail->setDescription('Ошибка получения программы ДППО');
        $logTypeProgramGetFail->setState(LogTypeState::FAILURE->value);
        $logTypeProgramGetFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_GET_REFERENCE));
        $logTypeProgramGetFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_PROGRAM_REFERENCE));
        $logTypeProgramGetFail->setSubsystemCode('program');
        $manager->persist($logTypeProgramGetFail);

        $logTypeProgramSearch = new LogType();
        $logTypeProgramSearch->setTitle('Поиск программ ДППО');
        $logTypeProgramSearch->setDescription('Поиск программ ДППО');
        $logTypeProgramSearch->setState(LogTypeState::SUCCESS->value);
        $logTypeProgramSearch->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_SEARCH_REFERENCE));
        $logTypeProgramSearch->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_PROGRAM_REFERENCE));
        $logTypeProgramSearch->setSubsystemCode('program');
        $manager->persist($logTypeProgramSearch);

        $logTypeProgramSearchFail = new LogType();
        $logTypeProgramSearchFail->setTitle('Ошибка поиска программ ДППО');
        $logTypeProgramSearchFail->setDescription('Ошибка поиска программ ДППО');
        $logTypeProgramSearchFail->setState(LogTypeState::FAILURE->value);
        $logTypeProgramSearchFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_SEARCH_REFERENCE));
        $logTypeProgramSearchFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_PROGRAM_REFERENCE));
        $logTypeProgramSearchFail->setSubsystemCode('program');
        $manager->persist($logTypeProgramSearchFail);

        $logTypeProgramPublish = new LogType();
        $logTypeProgramPublish->setTitle('Публикация программы');
        $logTypeProgramPublish->setDescription('Публикация программы');
        $logTypeProgramPublish->setState(LogTypeState::SUCCESS->value);
        $logTypeProgramPublish->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_REVEAL_REFERENCE));
        $logTypeProgramPublish->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_PROGRAM_REFERENCE));
        $logTypeProgramPublish->setSubsystemCode('program');
        $manager->persist($logTypeProgramPublish);

        $logTypeProgramPublishFail = new LogType();
        $logTypeProgramPublishFail->setTitle('Ошибка публикации программы');
        $logTypeProgramPublishFail->setDescription('Ошибка публикации программы');
        $logTypeProgramPublishFail->setState(LogTypeState::FAILURE->value);
        $logTypeProgramPublishFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_REVEAL_REFERENCE));
        $logTypeProgramPublishFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_PROGRAM_REFERENCE));
        $logTypeProgramPublishFail->setSubsystemCode('program');
        $manager->persist($logTypeProgramPublishFail);

        $logTypeProgramUnpublish = new LogType();
        $logTypeProgramUnpublish->setTitle('Снятие с публикации программы');
        $logTypeProgramUnpublish->setDescription('Снятие с публикации программы');
        $logTypeProgramUnpublish->setState(LogTypeState::SUCCESS->value);
        $logTypeProgramUnpublish->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_HIDE_REFERENCE));
        $logTypeProgramUnpublish->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_PROGRAM_REFERENCE));
        $logTypeProgramUnpublish->setSubsystemCode('program');
        $manager->persist($logTypeProgramUnpublish);

        $logTypeProgramUnpublishFail = new LogType();
        $logTypeProgramUnpublishFail->setTitle('Ошибка снятия с публикации программы');
        $logTypeProgramUnpublishFail->setDescription('Ошибка снятия с публикации программы');
        $logTypeProgramUnpublishFail->setState(LogTypeState::FAILURE->value);
        $logTypeProgramUnpublishFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_HIDE_REFERENCE));
        $logTypeProgramUnpublishFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_PROGRAM_REFERENCE));
        $logTypeProgramUnpublishFail->setSubsystemCode('program');
        $manager->persist($logTypeProgramUnpublishFail);


        $manager->flush();
    }
}