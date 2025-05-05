<?php

namespace App\DataFixtures\LogTypes;

use registration\src\DataFixtures\LogTypePropertiesFixtures;
use registration\src\Entity\LogType;
use registration\src\Enum\LogTypeState;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class LogTypeTrainingFixtures extends Fixture
{

    public function load(ObjectManager $manager): void
    {
        $logTypeTrainingCreate = new LogType();
        $logTypeTrainingCreate->setTitle('Создание курса');
        $logTypeTrainingCreate->setDescription('Создание курса');
        $logTypeTrainingCreate->setState(LogTypeState::SUCCESS->value);
        $logTypeTrainingCreate->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_CREATE_REFERENCE));
        $logTypeTrainingCreate->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_TRAINING_REFERENCE));
        $logTypeTrainingCreate->setSubsystemCode('training');
        $manager->persist($logTypeTrainingCreate);

        $logTypeTrainingCreateFail = new LogType();
        $logTypeTrainingCreateFail->setTitle('Ошибка создания курса');
        $logTypeTrainingCreateFail->setDescription('Ошибка создания курса');
        $logTypeTrainingCreateFail->setState(LogTypeState::FAILURE->value);
        $logTypeTrainingCreateFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_CREATE_REFERENCE));
        $logTypeTrainingCreateFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_TRAINING_REFERENCE));
        $logTypeTrainingCreateFail->setSubsystemCode('training');
        $manager->persist($logTypeTrainingCreateFail);

        $logTypeTrainingUpdate = new LogType();
        $logTypeTrainingUpdate->setTitle('Редактирование курса');
        $logTypeTrainingUpdate->setDescription('Редактирование курса');
        $logTypeTrainingUpdate->setState(LogTypeState::SUCCESS->value);
        $logTypeTrainingUpdate->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_UPDATE_REFERENCE));
        $logTypeTrainingUpdate->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_TRAINING_REFERENCE));
        $logTypeTrainingUpdate->setSubsystemCode('training');
        $manager->persist($logTypeTrainingUpdate);

        $logTypeTrainingUpdateFail = new LogType();
        $logTypeTrainingUpdateFail->setTitle('Ошибка редактирования курса');
        $logTypeTrainingUpdateFail->setDescription('Ошибка редактирования курса');
        $logTypeTrainingUpdateFail->setState(LogTypeState::FAILURE->value);
        $logTypeTrainingUpdateFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_UPDATE_REFERENCE));
        $logTypeTrainingUpdateFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_TRAINING_REFERENCE));
        $logTypeTrainingUpdateFail->setSubsystemCode('training');
        $manager->persist($logTypeTrainingUpdateFail);

        $logTypeTrainingDelete = new LogType();
        $logTypeTrainingDelete->setTitle('Удаление курса');
        $logTypeTrainingDelete->setDescription('Удаление курса');
        $logTypeTrainingDelete->setState(LogTypeState::SUCCESS->value);
        $logTypeTrainingDelete->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_DELETE_REFERENCE));
        $logTypeTrainingDelete->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_TRAINING_REFERENCE));
        $logTypeTrainingDelete->setSubsystemCode('training');
        $manager->persist($logTypeTrainingDelete);

        $logTypeTrainingDeleteFail = new LogType();
        $logTypeTrainingDeleteFail->setTitle('Ошибка удаления курса');
        $logTypeTrainingDeleteFail->setDescription('Ошибка удаления курса');
        $logTypeTrainingDeleteFail->setState(LogTypeState::FAILURE->value);
        $logTypeTrainingDeleteFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_DELETE_REFERENCE));
        $logTypeTrainingDeleteFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_TRAINING_REFERENCE));
        $logTypeTrainingDeleteFail->setSubsystemCode('training');
        $manager->persist($logTypeTrainingDeleteFail);

        $logTypeTrainingView = new LogType();
        $logTypeTrainingView->setTitle('Просмотр курса');
        $logTypeTrainingView->setDescription('Просмотр курса');
        $logTypeTrainingView->setState(LogTypeState::SUCCESS->value);
        $logTypeTrainingView->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_VIEW_REFERENCE));
        $logTypeTrainingView->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_TRAINING_REFERENCE));
        $logTypeTrainingView->setSubsystemCode('training');
        $manager->persist($logTypeTrainingView);

        $logTypeTrainingViewFail = new LogType();
        $logTypeTrainingViewFail->setTitle('Ошибка просмотра курса');
        $logTypeTrainingViewFail->setDescription('Ошибка просмотра курса');
        $logTypeTrainingViewFail->setState(LogTypeState::FAILURE->value);
        $logTypeTrainingViewFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_VIEW_REFERENCE));
        $logTypeTrainingViewFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_TRAINING_REFERENCE));
        $logTypeTrainingViewFail->setSubsystemCode('training');
        $manager->persist($logTypeTrainingViewFail);

        $logTypeTrainingGet = new LogType();
        $logTypeTrainingGet->setTitle('Получение курса');
        $logTypeTrainingGet->setDescription('Получение курса');
        $logTypeTrainingGet->setState(LogTypeState::SUCCESS->value);
        $logTypeTrainingGet->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_GET_REFERENCE));
        $logTypeTrainingGet->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_TRAINING_REFERENCE));
        $logTypeTrainingGet->setSubsystemCode('training');
        $manager->persist($logTypeTrainingGet);

        $logTypeTrainingGetFail = new LogType();
        $logTypeTrainingGetFail->setTitle('Ошибка получения курса');
        $logTypeTrainingGetFail->setDescription('Ошибка получения курса');
        $logTypeTrainingGetFail->setState(LogTypeState::FAILURE->value);
        $logTypeTrainingGetFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_GET_REFERENCE));
        $logTypeTrainingGetFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_TRAINING_REFERENCE));
        $logTypeTrainingGetFail->setSubsystemCode('training');
        $manager->persist($logTypeTrainingGetFail);

        $logTypeTrainingSearch = new LogType();
        $logTypeTrainingSearch->setTitle('Поиск курсов');
        $logTypeTrainingSearch->setDescription('Поиск курсов');
        $logTypeTrainingSearch->setState(LogTypeState::SUCCESS->value);
        $logTypeTrainingSearch->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_SEARCH_REFERENCE));
        $logTypeTrainingSearch->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_TRAINING_REFERENCE));
        $logTypeTrainingSearch->setSubsystemCode('training');
        $manager->persist($logTypeTrainingSearch);

        $logTypeTrainingSearchFail = new LogType();
        $logTypeTrainingSearchFail->setTitle('Ошибка поиска курсов');
        $logTypeTrainingSearchFail->setDescription('Ошибка поиска курсов');
        $logTypeTrainingSearchFail->setState(LogTypeState::FAILURE->value);
        $logTypeTrainingSearchFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_SEARCH_REFERENCE));
        $logTypeTrainingSearchFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_TRAINING_REFERENCE));
        $logTypeTrainingSearchFail->setSubsystemCode('training');
        $manager->persist($logTypeTrainingSearchFail);

        $logTypeTrainingPublish = new LogType();
        $logTypeTrainingPublish->setTitle('Публикация курса');
        $logTypeTrainingPublish->setDescription('Публикация курса');
        $logTypeTrainingPublish->setState(LogTypeState::SUCCESS->value);
        $logTypeTrainingPublish->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_REVEAL_REFERENCE));
        $logTypeTrainingPublish->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_TRAINING_REFERENCE));
        $logTypeTrainingPublish->setSubsystemCode('training');
        $manager->persist($logTypeTrainingPublish);

        $logTypeTrainingPublishFail = new LogType();
        $logTypeTrainingPublishFail->setTitle('Ошибка публикации курса');
        $logTypeTrainingPublishFail->setDescription('Ошибка публикации курса');
        $logTypeTrainingPublishFail->setState(LogTypeState::FAILURE->value);
        $logTypeTrainingPublishFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_REVEAL_REFERENCE));
        $logTypeTrainingPublishFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_TRAINING_REFERENCE));
        $logTypeTrainingPublishFail->setSubsystemCode('training');
        $manager->persist($logTypeTrainingPublishFail);

        $logTypeTrainingUnpublish = new LogType();
        $logTypeTrainingUnpublish->setTitle('Снятие с публикации курса');
        $logTypeTrainingUnpublish->setDescription('Снятие с публикации курса');
        $logTypeTrainingUnpublish->setState(LogTypeState::SUCCESS->value);
        $logTypeTrainingUnpublish->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_HIDE_REFERENCE));
        $logTypeTrainingUnpublish->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_TRAINING_REFERENCE));
        $logTypeTrainingUnpublish->setSubsystemCode('training');
        $manager->persist($logTypeTrainingUnpublish);

        $logTypeTrainingUnpublishFail = new LogType();
        $logTypeTrainingUnpublishFail->setTitle('Ошибка снятия с публикации курса');
        $logTypeTrainingUnpublishFail->setDescription('Ошибка снятия с публикации курса');
        $logTypeTrainingUnpublishFail->setState(LogTypeState::FAILURE->value);
        $logTypeTrainingUnpublishFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_HIDE_REFERENCE));
        $logTypeTrainingUnpublishFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_TRAINING_REFERENCE));
        $logTypeTrainingUnpublishFail->setSubsystemCode('training');
        $manager->persist($logTypeTrainingUnpublishFail);

        $manager->flush();
    }
}
