<?php

namespace App\DataFixtures\LogTypes;

use registration\src\DataFixtures\LogTypePropertiesFixtures;
use registration\src\Entity\LogType;
use registration\src\Enum\LogTypeState;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class LogTypeProgramCatalogFixtures extends Fixture {

    public function load(ObjectManager $manager): void
    {
        $logTypeProgramCatalogCreate = new LogType();
        $logTypeProgramCatalogCreate->setTitle('Создание программы каталога');
        $logTypeProgramCatalogCreate->setDescription('Создание программы каталога');
        $logTypeProgramCatalogCreate->setState(LogTypeState::SUCCESS->value);
        $logTypeProgramCatalogCreate->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_CREATE_REFERENCE));
        $logTypeProgramCatalogCreate->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_PROGRAM_CATALOG_REFERENCE));
        $logTypeProgramCatalogCreate->setSubsystemCode('program_catalog');
        $manager->persist($logTypeProgramCatalogCreate);

        $logTypeProgramCatalogCreateFail = new LogType();
        $logTypeProgramCatalogCreateFail->setTitle('Ошибка создания программы каталога');
        $logTypeProgramCatalogCreateFail->setDescription('Ошибка создания программы каталога');
        $logTypeProgramCatalogCreateFail->setState(LogTypeState::FAILURE->value);
        $logTypeProgramCatalogCreateFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_CREATE_REFERENCE));
        $logTypeProgramCatalogCreateFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_PROGRAM_CATALOG_REFERENCE));
        $logTypeProgramCatalogCreateFail->setSubsystemCode('program_catalog');
        $manager->persist($logTypeProgramCatalogCreateFail);

        $logTypeProgramCatalogUpdate = new LogType();
        $logTypeProgramCatalogUpdate->setTitle('Редактирование программы каталога');
        $logTypeProgramCatalogUpdate->setDescription('Редактирование программы каталога');
        $logTypeProgramCatalogUpdate->setState(LogTypeState::SUCCESS->value);
        $logTypeProgramCatalogUpdate->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_UPDATE_REFERENCE));
        $logTypeProgramCatalogUpdate->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_PROGRAM_CATALOG_REFERENCE));
        $logTypeProgramCatalogUpdate->setSubsystemCode('program_catalog');
        $manager->persist($logTypeProgramCatalogUpdate);

        $logTypeProgramCatalogUpdateFail = new LogType();
        $logTypeProgramCatalogUpdateFail->setTitle('Ошибка редактирования программы каталога');
        $logTypeProgramCatalogUpdateFail->setDescription('Ошибка редактирования программы каталога');
        $logTypeProgramCatalogUpdateFail->setState(LogTypeState::FAILURE->value);
        $logTypeProgramCatalogUpdateFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_UPDATE_REFERENCE));
        $logTypeProgramCatalogUpdateFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_PROGRAM_CATALOG_REFERENCE));
        $logTypeProgramCatalogUpdateFail->setSubsystemCode('program_catalog');
        $manager->persist($logTypeProgramCatalogUpdateFail);

        $logTypeProgramCatalogDelete = new LogType();
        $logTypeProgramCatalogDelete->setTitle('Удаление программы каталога');
        $logTypeProgramCatalogDelete->setDescription('Удаление программы каталога');
        $logTypeProgramCatalogDelete->setState(LogTypeState::SUCCESS->value);
        $logTypeProgramCatalogDelete->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_DELETE_REFERENCE));
        $logTypeProgramCatalogDelete->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_PROGRAM_CATALOG_REFERENCE));
        $logTypeProgramCatalogDelete->setSubsystemCode('program_catalog');
        $manager->persist($logTypeProgramCatalogDelete);

        $logTypeProgramCatalogDeleteFail = new LogType();
        $logTypeProgramCatalogDeleteFail->setTitle('Ошибка удаления программы каталога');
        $logTypeProgramCatalogDeleteFail->setDescription('Ошибка удаления программы каталога');
        $logTypeProgramCatalogDeleteFail->setState(LogTypeState::FAILURE->value);
        $logTypeProgramCatalogDeleteFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_DELETE_REFERENCE));
        $logTypeProgramCatalogDeleteFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_PROGRAM_CATALOG_REFERENCE));
        $logTypeProgramCatalogDeleteFail->setSubsystemCode('program_catalog');
        $manager->persist($logTypeProgramCatalogDeleteFail);

        $logTypeProgramCatalogView = new LogType();
        $logTypeProgramCatalogView->setTitle('Просмотр программы каталога');
        $logTypeProgramCatalogView->setDescription('Просмотр программы каталога');
        $logTypeProgramCatalogView->setState(LogTypeState::SUCCESS->value);
        $logTypeProgramCatalogView->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_VIEW_REFERENCE));
        $logTypeProgramCatalogView->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_PROGRAM_CATALOG_REFERENCE));
        $logTypeProgramCatalogView->setSubsystemCode('program_catalog');
        $manager->persist($logTypeProgramCatalogView);

        $logTypeProgramCatalogViewFail = new LogType();
        $logTypeProgramCatalogViewFail->setTitle('Ошибка просмотра программы каталога');
        $logTypeProgramCatalogViewFail->setDescription('Ошибка просмотра программы каталога');
        $logTypeProgramCatalogViewFail->setState(LogTypeState::FAILURE->value);
        $logTypeProgramCatalogViewFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_VIEW_REFERENCE));
        $logTypeProgramCatalogViewFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_PROGRAM_CATALOG_REFERENCE));
        $logTypeProgramCatalogViewFail->setSubsystemCode('program_catalog');
        $manager->persist($logTypeProgramCatalogViewFail);

        $logTypeProgramCatalogGet = new LogType();
        $logTypeProgramCatalogGet->setTitle('Получение программы каталога');
        $logTypeProgramCatalogGet->setDescription('Получение программы каталога');
        $logTypeProgramCatalogGet->setState(LogTypeState::SUCCESS->value);
        $logTypeProgramCatalogGet->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_GET_REFERENCE));
        $logTypeProgramCatalogGet->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_PROGRAM_CATALOG_REFERENCE));
        $logTypeProgramCatalogGet->setSubsystemCode('program_catalog');
        $manager->persist($logTypeProgramCatalogGet);

        $logTypeProgramCatalogGetFail = new LogType();
        $logTypeProgramCatalogGetFail->setTitle('Ошибка получения программы каталога');
        $logTypeProgramCatalogGetFail->setDescription('Ошибка получения программы каталога');
        $logTypeProgramCatalogGetFail->setState(LogTypeState::FAILURE->value);
        $logTypeProgramCatalogGetFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_GET_REFERENCE));
        $logTypeProgramCatalogGetFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_PROGRAM_CATALOG_REFERENCE));
        $logTypeProgramCatalogGetFail->setSubsystemCode('program_catalog');
        $manager->persist($logTypeProgramCatalogGetFail);

        $logTypeProgramCatalogSearch = new LogType();
        $logTypeProgramCatalogSearch->setTitle('Поиск программы каталога');
        $logTypeProgramCatalogSearch->setDescription('Поиск программы каталога');
        $logTypeProgramCatalogSearch->setState(LogTypeState::SUCCESS->value);
        $logTypeProgramCatalogSearch->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_SEARCH_REFERENCE));
        $logTypeProgramCatalogSearch->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_PROGRAM_CATALOG_REFERENCE));
        $logTypeProgramCatalogSearch->setSubsystemCode('program_catalog');
        $manager->persist($logTypeProgramCatalogSearch);

        $logTypeProgramCatalogSearchFail = new LogType();
        $logTypeProgramCatalogSearchFail->setTitle('Ошибка поиска программы каталога');
        $logTypeProgramCatalogSearchFail->setDescription('Ошибка поиска программы каталога');
        $logTypeProgramCatalogSearchFail->setState(LogTypeState::FAILURE->value);
        $logTypeProgramCatalogSearchFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_SEARCH_REFERENCE));
        $logTypeProgramCatalogSearchFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_PROGRAM_CATALOG_REFERENCE));
        $logTypeProgramCatalogSearchFail->setSubsystemCode('program_catalog');
        $manager->persist($logTypeProgramCatalogSearchFail);

        $logTypeProgramCatalogPublish = new LogType();
        $logTypeProgramCatalogPublish->setTitle('Публикация программы каталога');
        $logTypeProgramCatalogPublish->setDescription('Публикация программы каталога');
        $logTypeProgramCatalogPublish->setState(LogTypeState::SUCCESS->value);
        $logTypeProgramCatalogPublish->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_PUBLISH_REFERENCE));
        $logTypeProgramCatalogPublish->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_PROGRAM_CATALOG_REFERENCE));
        $logTypeProgramCatalogPublish->setSubsystemCode('program_catalog');
        $manager->persist($logTypeProgramCatalogPublish);

        $logTypeProgramCatalogPublishFail = new LogType();
        $logTypeProgramCatalogPublishFail->setTitle('Ошибка публикации программы каталога');
        $logTypeProgramCatalogPublishFail->setDescription('Ошибка публикации программы каталога');
        $logTypeProgramCatalogPublishFail->setState(LogTypeState::FAILURE->value);
        $logTypeProgramCatalogPublishFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_PUBLISH_REFERENCE));
        $logTypeProgramCatalogPublishFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_PROGRAM_CATALOG_REFERENCE));
        $logTypeProgramCatalogPublishFail->setSubsystemCode('program_catalog');
        $manager->persist($logTypeProgramCatalogPublishFail);

        $logTypeProgramCatalogUnpublish = new LogType();
        $logTypeProgramCatalogUnpublish->setTitle('Снятие с публикации программы каталога');
        $logTypeProgramCatalogUnpublish->setDescription('Снятие с публикации программы каталога');
        $logTypeProgramCatalogUnpublish->setState(LogTypeState::SUCCESS->value);
        $logTypeProgramCatalogUnpublish->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_UNPUBLISH_REFERENCE));
        $logTypeProgramCatalogUnpublish->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_PROGRAM_CATALOG_REFERENCE));
        $logTypeProgramCatalogUnpublish->setSubsystemCode('program_catalog');
        $manager->persist($logTypeProgramCatalogUnpublish);

        $logTypeProgramCatalogUnpublishFail = new LogType();
        $logTypeProgramCatalogUnpublishFail->setTitle('Ошибка снятия с публикации программы каталога');
        $logTypeProgramCatalogUnpublishFail->setDescription('Ошибка снятия с публикации программы каталога');
        $logTypeProgramCatalogUnpublishFail->setState(LogTypeState::FAILURE->value);
        $logTypeProgramCatalogUnpublishFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_UNPUBLISH_REFERENCE));
        $logTypeProgramCatalogUnpublishFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_PROGRAM_CATALOG_REFERENCE));
        $logTypeProgramCatalogUnpublishFail->setSubsystemCode('program_catalog');
        $manager->persist($logTypeProgramCatalogUnpublishFail);

        $logTypeProgramCatalogArchive = new LogType();
        $logTypeProgramCatalogArchive->setTitle('Перевод программы каталога в архив');
        $logTypeProgramCatalogArchive->setDescription('Перевод программы каталога в архив');
        $logTypeProgramCatalogArchive->setState(LogTypeState::SUCCESS->value);
        $logTypeProgramCatalogArchive->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_ARCHIVE_REFERENCE));
        $logTypeProgramCatalogArchive->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_PROGRAM_CATALOG_REFERENCE));
        $logTypeProgramCatalogArchive->setSubsystemCode('program_catalog');
        $manager->persist($logTypeProgramCatalogArchive);

        $logTypeProgramCatalogArchiveFail = new LogType();
        $logTypeProgramCatalogArchiveFail->setTitle('Ошибка перевода программы каталога в архив');
        $logTypeProgramCatalogArchiveFail->setDescription('Ошибка перевода программы каталога в архив');
        $logTypeProgramCatalogArchiveFail->setState(LogTypeState::FAILURE->value);
        $logTypeProgramCatalogArchiveFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_ARCHIVE_REFERENCE));
        $logTypeProgramCatalogArchiveFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_PROGRAM_CATALOG_REFERENCE));
        $logTypeProgramCatalogArchiveFail->setSubsystemCode('program_catalog');
        $manager->persist($logTypeProgramCatalogArchiveFail);

        $logTypeProgramCatalogDraft = new LogType();
        $logTypeProgramCatalogDraft->setTitle('Перевод программы каталога в черновик');
        $logTypeProgramCatalogDraft->setDescription('Перевод программы каталога в черновик');
        $logTypeProgramCatalogDraft->setState(LogTypeState::SUCCESS->value);
        $logTypeProgramCatalogDraft->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_DRAFT_REFERENCE));
        $logTypeProgramCatalogDraft->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_PROGRAM_CATALOG_REFERENCE));
        $logTypeProgramCatalogDraft->setSubsystemCode('program_catalog');
        $manager->persist($logTypeProgramCatalogDraft);

        $logTypeProgramCatalogDraftFail = new LogType();
        $logTypeProgramCatalogDraftFail->setTitle('Ошибка перевода программы каталога в черновик');
        $logTypeProgramCatalogDraftFail->setDescription('Ошибка перевода программы каталога в черновик');
        $logTypeProgramCatalogDraftFail->setState(LogTypeState::FAILURE->value);
        $logTypeProgramCatalogDraftFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_DRAFT_REFERENCE));
        $logTypeProgramCatalogDraftFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_PROGRAM_CATALOG_REFERENCE));
        $logTypeProgramCatalogDraftFail->setSubsystemCode('program_catalog');
        $manager->persist($logTypeProgramCatalogDraftFail);

        $manager->flush();
    }
}