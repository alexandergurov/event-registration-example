<?php

namespace App\DataFixtures\LogTypes;

use registration\src\DataFixtures\LogTypePropertiesFixtures;
use registration\src\Entity\LogType;
use registration\src\Enum\LogTypeState;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class LogTypeThematicCollectionFixtures extends Fixture
{

    public function load(ObjectManager $manager): void
    {

        $logTypeThematicCollectionCreate = new LogType();
        $logTypeThematicCollectionCreate->setTitle('Создание тематической подборки');
        $logTypeThematicCollectionCreate->setDescription('Создание тематической подборки');
        $logTypeThematicCollectionCreate->setState(LogTypeState::SUCCESS->value);
        $logTypeThematicCollectionCreate->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_CREATE_REFERENCE));
        $logTypeThematicCollectionCreate->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_THEMATIC_COLLECTION_REFERENCE));
        $logTypeThematicCollectionCreate->setSubsystemCode('thematic_collection');
        $manager->persist($logTypeThematicCollectionCreate);

        $logTypeThematicCollectionCreateFail = new LogType();
        $logTypeThematicCollectionCreateFail->setTitle('Ошибка создания тематической подборки');
        $logTypeThematicCollectionCreateFail->setDescription('Ошибка создания тематической подборки');
        $logTypeThematicCollectionCreateFail->setState(LogTypeState::FAILURE->value);
        $logTypeThematicCollectionCreateFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_CREATE_REFERENCE));
        $logTypeThematicCollectionCreateFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_THEMATIC_COLLECTION_REFERENCE));
        $logTypeThematicCollectionCreateFail->setSubsystemCode('thematic_collection');
        $manager->persist($logTypeThematicCollectionCreateFail);

        $logTypeThematicCollectionUpdate = new LogType();
        $logTypeThematicCollectionUpdate->setTitle('Редактирование тематической подборки');
        $logTypeThematicCollectionUpdate->setDescription('Редактирование тематической подборки');
        $logTypeThematicCollectionUpdate->setState(LogTypeState::SUCCESS->value);
        $logTypeThematicCollectionUpdate->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_UPDATE_REFERENCE));
        $logTypeThematicCollectionUpdate->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_THEMATIC_COLLECTION_REFERENCE));
        $logTypeThematicCollectionUpdate->setSubsystemCode('thematic_collection');
        $manager->persist($logTypeThematicCollectionUpdate);

        $logTypeThematicCollectionUpdateFail = new LogType();
        $logTypeThematicCollectionUpdateFail->setTitle('Ошибка редактирования тематической подборки');
        $logTypeThematicCollectionUpdateFail->setDescription('Ошибка редактирования тематической подборки');
        $logTypeThematicCollectionUpdateFail->setState(LogTypeState::FAILURE->value);
        $logTypeThematicCollectionUpdateFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_UPDATE_REFERENCE));
        $logTypeThematicCollectionUpdateFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_THEMATIC_COLLECTION_REFERENCE));
        $logTypeThematicCollectionUpdateFail->setSubsystemCode('thematic_collection');
        $manager->persist($logTypeThematicCollectionUpdateFail);

        $logTypeThematicCollectionDelete = new LogType();
        $logTypeThematicCollectionDelete->setTitle('Удаление тематической подборки');
        $logTypeThematicCollectionDelete->setDescription('Удаление тематической подборки');
        $logTypeThematicCollectionDelete->setState(LogTypeState::SUCCESS->value);
        $logTypeThematicCollectionDelete->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_DELETE_REFERENCE));
        $logTypeThematicCollectionDelete->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_THEMATIC_COLLECTION_REFERENCE));
        $logTypeThematicCollectionDelete->setSubsystemCode('thematic_collection');
        $manager->persist($logTypeThematicCollectionDelete);

        $logTypeThematicCollectionDeleteFail = new LogType();
        $logTypeThematicCollectionDeleteFail->setTitle('Ошибка удаления тематической подборки');
        $logTypeThematicCollectionDeleteFail->setDescription('Ошибка удаления тематической подборки');
        $logTypeThematicCollectionDeleteFail->setState(LogTypeState::FAILURE->value);
        $logTypeThematicCollectionDeleteFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_DELETE_REFERENCE));
        $logTypeThematicCollectionDeleteFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_THEMATIC_COLLECTION_REFERENCE));
        $logTypeThematicCollectionDeleteFail->setSubsystemCode('thematic_collection');
        $manager->persist($logTypeThematicCollectionDeleteFail);

        $logTypeThematicCollectionView = new LogType();
        $logTypeThematicCollectionView->setTitle('Просмотр тематической подборки');
        $logTypeThematicCollectionView->setDescription('Просмотр тематической подборки');
        $logTypeThematicCollectionView->setState(LogTypeState::SUCCESS->value);
        $logTypeThematicCollectionView->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_VIEW_REFERENCE));
        $logTypeThematicCollectionView->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_THEMATIC_COLLECTION_REFERENCE));
        $logTypeThematicCollectionView->setSubsystemCode('thematic_collection');
        $manager->persist($logTypeThematicCollectionView);

        $logTypeThematicCollectionViewFail = new LogType();
        $logTypeThematicCollectionViewFail->setTitle('Ошибка просмотра тематической подборки');
        $logTypeThematicCollectionViewFail->setDescription('Ошибка просмотра тематической подборки');
        $logTypeThematicCollectionViewFail->setState(LogTypeState::FAILURE->value);
        $logTypeThematicCollectionViewFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_VIEW_REFERENCE));
        $logTypeThematicCollectionViewFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_THEMATIC_COLLECTION_REFERENCE));
        $logTypeThematicCollectionViewFail->setSubsystemCode('thematic_collection');
        $manager->persist($logTypeThematicCollectionViewFail);

        $logTypeThematicCollectionGet = new LogType();
        $logTypeThematicCollectionGet->setTitle('Получение тематической подборки');
        $logTypeThematicCollectionGet->setDescription('Получение тематической подборки');
        $logTypeThematicCollectionGet->setState(LogTypeState::SUCCESS->value);
        $logTypeThematicCollectionGet->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_GET_REFERENCE));
        $logTypeThematicCollectionGet->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_THEMATIC_COLLECTION_REFERENCE));
        $logTypeThematicCollectionGet->setSubsystemCode('thematic_collection');
        $manager->persist($logTypeThematicCollectionGet);

        $logTypeThematicCollectionGetFail = new LogType();
        $logTypeThematicCollectionGetFail->setTitle('Ошибка получения тематической подборки');
        $logTypeThematicCollectionGetFail->setDescription('Ошибка получения тематической подборки');
        $logTypeThematicCollectionGetFail->setState(LogTypeState::FAILURE->value);
        $logTypeThematicCollectionGetFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_GET_REFERENCE));
        $logTypeThematicCollectionGetFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_THEMATIC_COLLECTION_REFERENCE));
        $logTypeThematicCollectionGetFail->setSubsystemCode('thematic_collection');
        $manager->persist($logTypeThematicCollectionGetFail);

        $logTypeThematicCollectionPublish = new LogType();
        $logTypeThematicCollectionPublish->setTitle('Публикация тематической подборки');
        $logTypeThematicCollectionPublish->setDescription('Публикация тематической подборки');
        $logTypeThematicCollectionPublish->setState(LogTypeState::SUCCESS->value);
        $logTypeThematicCollectionPublish->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_PUBLISH_REFERENCE));
        $logTypeThematicCollectionPublish->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_THEMATIC_COLLECTION_REFERENCE));
        $logTypeThematicCollectionPublish->setSubsystemCode('thematic_collection');
        $manager->persist($logTypeThematicCollectionPublish);

        $logTypeThematicCollectionPublishFail = new LogType();
        $logTypeThematicCollectionPublishFail->setTitle('Ошибка публикации тематической подборки');
        $logTypeThematicCollectionPublishFail->setDescription('Ошибка публикации тематической подборки');
        $logTypeThematicCollectionPublishFail->setState(LogTypeState::FAILURE->value);
        $logTypeThematicCollectionPublishFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_PUBLISH_REFERENCE));
        $logTypeThematicCollectionPublishFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_THEMATIC_COLLECTION_REFERENCE));
        $logTypeThematicCollectionPublishFail->setSubsystemCode('thematic_collection');
        $manager->persist($logTypeThematicCollectionPublishFail);

        $logTypeThematicCollectionUnpublish = new LogType();
        $logTypeThematicCollectionUnpublish->setTitle('Снятие с публикации тематической подборки');
        $logTypeThematicCollectionUnpublish->setDescription('Снятие с публикации тематической подборки');
        $logTypeThematicCollectionUnpublish->setState(LogTypeState::SUCCESS->value);
        $logTypeThematicCollectionUnpublish->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_UNPUBLISH_REFERENCE));
        $logTypeThematicCollectionUnpublish->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_THEMATIC_COLLECTION_REFERENCE));
        $logTypeThematicCollectionUnpublish->setSubsystemCode('thematic_collection');
        $manager->persist($logTypeThematicCollectionUnpublish);

        $logTypeThematicCollectionUnpublishFail = new LogType();
        $logTypeThematicCollectionUnpublishFail->setTitle('Ошибка снятия с публикации тематической подборки');
        $logTypeThematicCollectionUnpublishFail->setDescription('Ошибка снятия с публикации тематической подборки');
        $logTypeThematicCollectionUnpublishFail->setState(LogTypeState::FAILURE->value);
        $logTypeThematicCollectionUnpublishFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_UNPUBLISH_REFERENCE));
        $logTypeThematicCollectionUnpublishFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_THEMATIC_COLLECTION_REFERENCE));
        $logTypeThematicCollectionUnpublishFail->setSubsystemCode('thematic_collection');
        $manager->persist($logTypeThematicCollectionUnpublishFail);

        $logTypeThematicCollectionDraft = new LogType();
        $logTypeThematicCollectionDraft->setTitle('Перевод тематической подборки в черновик');
        $logTypeThematicCollectionDraft->setDescription('Перевод тематической подборки в черновик');
        $logTypeThematicCollectionDraft->setState(LogTypeState::SUCCESS->value);
        $logTypeThematicCollectionDraft->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_DRAFT_REFERENCE));
        $logTypeThematicCollectionDraft->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_THEMATIC_COLLECTION_REFERENCE));
        $logTypeThematicCollectionDraft->setSubsystemCode('thematic_collection');
        $manager->persist($logTypeThematicCollectionDraft);

        $logTypeThematicCollectionDraftFail = new LogType();
        $logTypeThematicCollectionDraftFail->setTitle('Ошибка перевода тематической подборки в черновик');
        $logTypeThematicCollectionDraftFail->setDescription('Ошибка перевода тематической подборки в черновик');
        $logTypeThematicCollectionDraftFail->setState(LogTypeState::FAILURE->value);
        $logTypeThematicCollectionDraftFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_DRAFT_REFERENCE));
        $logTypeThematicCollectionDraftFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_THEMATIC_COLLECTION_REFERENCE));
        $logTypeThematicCollectionDraftFail->setSubsystemCode('thematic_collection');
        $manager->persist($logTypeThematicCollectionDraftFail);

        $logTypeThematicCollectionArchive = new LogType();
        $logTypeThematicCollectionArchive->setTitle('Перевод тематической подборки в архив');
        $logTypeThematicCollectionArchive->setDescription('Перевод тематической подборки в архив');
        $logTypeThematicCollectionArchive->setState(LogTypeState::SUCCESS->value);
        $logTypeThematicCollectionArchive->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_ARCHIVE_REFERENCE));
        $logTypeThematicCollectionArchive->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_THEMATIC_COLLECTION_REFERENCE));
        $logTypeThematicCollectionArchive->setSubsystemCode('thematic_collection');
        $manager->persist($logTypeThematicCollectionArchive);

        $logTypeThematicCollectionArchiveFail = new LogType();
        $logTypeThematicCollectionArchiveFail->setTitle('Ошибка перевода тематической подборки в архив');
        $logTypeThematicCollectionArchiveFail->setDescription('Ошибка перевода тематической подборки в архив');
        $logTypeThematicCollectionArchiveFail->setState(LogTypeState::FAILURE->value);
        $logTypeThematicCollectionArchiveFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_ARCHIVE_REFERENCE));
        $logTypeThematicCollectionArchiveFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_THEMATIC_COLLECTION_REFERENCE));
        $logTypeThematicCollectionArchiveFail->setSubsystemCode('thematic_collection');
        $manager->persist($logTypeThematicCollectionArchiveFail);

        $manager->flush();
    }
}