<?php

namespace App\DataFixtures\LogTypes;

use registration\src\DataFixtures\LogTypePropertiesFixtures;
use registration\src\Entity\LogType;
use registration\src\Enum\LogTypeState;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class LogTypeMaterialLibraryFixtures extends Fixture {

    public function load(ObjectManager $manager): void
    {
        $logTypeLibraryCreate = new LogType();
        $logTypeLibraryCreate->setTitle('Создание материала библиотеки');
        $logTypeLibraryCreate->setDescription('Создание материала библиотеки');
        $logTypeLibraryCreate->setState(LogTypeState::SUCCESS->value);
        $logTypeLibraryCreate->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_CREATE_REFERENCE));
        $logTypeLibraryCreate->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_LIBRARY_REFERENCE));
        $logTypeLibraryCreate->setSubsystemCode('material_library');
        $manager->persist($logTypeLibraryCreate);

        $logTypeLibraryCreateFail = new LogType();
        $logTypeLibraryCreateFail->setTitle('Ошибка создания материала библиотеки');
        $logTypeLibraryCreateFail->setDescription('Ошибка создания материала библиотеки');
        $logTypeLibraryCreateFail->setState(LogTypeState::FAILURE->value);
        $logTypeLibraryCreateFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_CREATE_REFERENCE));
        $logTypeLibraryCreateFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_LIBRARY_REFERENCE));
        $logTypeLibraryCreateFail->setSubsystemCode('material_library');
        $manager->persist($logTypeLibraryCreateFail);

        $logTypeLibraryUpdate = new LogType();
        $logTypeLibraryUpdate->setTitle('Редактирование материала библиотеки');
        $logTypeLibraryUpdate->setDescription('Редактирование материала библиотеки');
        $logTypeLibraryUpdate->setState(LogTypeState::SUCCESS->value);
        $logTypeLibraryUpdate->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_UPDATE_REFERENCE));
        $logTypeLibraryUpdate->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_LIBRARY_REFERENCE));
        $logTypeLibraryUpdate->setSubsystemCode('material_library');
        $manager->persist($logTypeLibraryUpdate);

        $logTypeLibraryUpdateFail = new LogType();
        $logTypeLibraryUpdateFail->setTitle('Ошибка редактирования материала библиотеки');
        $logTypeLibraryUpdateFail->setDescription('Ошибка редактирования материала библиотеки');
        $logTypeLibraryUpdateFail->setState(LogTypeState::FAILURE->value);
        $logTypeLibraryUpdateFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_UPDATE_REFERENCE));
        $logTypeLibraryUpdateFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_LIBRARY_REFERENCE));
        $logTypeLibraryUpdateFail->setSubsystemCode('material_library');
        $manager->persist($logTypeLibraryUpdateFail);

        $logTypeLibraryDelete = new LogType();
        $logTypeLibraryDelete->setTitle('Удаление материала библиотеки');
        $logTypeLibraryDelete->setDescription('Удаление материала библиотеки');
        $logTypeLibraryDelete->setState(LogTypeState::SUCCESS->value);
        $logTypeLibraryDelete->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_DELETE_REFERENCE));
        $logTypeLibraryDelete->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_LIBRARY_REFERENCE));
        $logTypeLibraryDelete->setSubsystemCode('material_library');
        $manager->persist($logTypeLibraryDelete);

        $logTypeLibraryDeleteFail = new LogType();
        $logTypeLibraryDeleteFail->setTitle('Ошибка удаления материала библиотеки');
        $logTypeLibraryDeleteFail->setDescription('Ошибка удаления материала библиотеки');
        $logTypeLibraryDeleteFail->setState(LogTypeState::FAILURE->value);
        $logTypeLibraryDeleteFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_DELETE_REFERENCE));
        $logTypeLibraryDeleteFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_LIBRARY_REFERENCE));
        $logTypeLibraryDeleteFail->setSubsystemCode('material_library');
        $manager->persist($logTypeLibraryDeleteFail);

        $logTypeLibraryView = new LogType();
        $logTypeLibraryView->setTitle('Просмотр материала библиотеки');
        $logTypeLibraryView->setDescription('Просмотр материала библиотеки');
        $logTypeLibraryView->setState(LogTypeState::SUCCESS->value);
        $logTypeLibraryView->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_VIEW_REFERENCE));
        $logTypeLibraryView->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_LIBRARY_REFERENCE));
        $logTypeLibraryView->setSubsystemCode('material_library');
        $manager->persist($logTypeLibraryView);

        $logTypeLibraryViewFail = new LogType();
        $logTypeLibraryViewFail->setTitle('Ошибка просмотра материала библиотеки');
        $logTypeLibraryViewFail->setDescription('Ошибка просмотра материала библиотеки');
        $logTypeLibraryViewFail->setState(LogTypeState::FAILURE->value);
        $logTypeLibraryViewFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_VIEW_REFERENCE));
        $logTypeLibraryViewFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_LIBRARY_REFERENCE));
        $logTypeLibraryViewFail->setSubsystemCode('material_library');
        $manager->persist($logTypeLibraryViewFail);

        $logTypeLibraryGet = new LogType();
        $logTypeLibraryGet->setTitle('Получение материала библиотеки');
        $logTypeLibraryGet->setDescription('Получение материала библиотеки');
        $logTypeLibraryGet->setState(LogTypeState::SUCCESS->value);
        $logTypeLibraryGet->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_GET_REFERENCE));
        $logTypeLibraryGet->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_LIBRARY_REFERENCE));
        $logTypeLibraryGet->setSubsystemCode('material_library');
        $manager->persist($logTypeLibraryGet);

        $logTypeLibraryGetFail = new LogType();
        $logTypeLibraryGetFail->setTitle('Ошибка получения материала библиотеки');
        $logTypeLibraryGetFail->setDescription('Ошибка получения материала библиотеки');
        $logTypeLibraryGetFail->setState(LogTypeState::FAILURE->value);
        $logTypeLibraryGetFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_GET_REFERENCE));
        $logTypeLibraryGetFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_LIBRARY_REFERENCE));
        $logTypeLibraryGetFail->setSubsystemCode('material_library');
        $manager->persist($logTypeLibraryGetFail);

        $logTypeLibrarySearch = new LogType();
        $logTypeLibrarySearch->setTitle('Поиск материала в библиотеке');
        $logTypeLibrarySearch->setDescription('Поиск материала в библиотеке');
        $logTypeLibrarySearch->setState(LogTypeState::SUCCESS->value);
        $logTypeLibrarySearch->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_SEARCH_REFERENCE));
        $logTypeLibrarySearch->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_LIBRARY_REFERENCE));
        $logTypeLibrarySearch->setSubsystemCode('material_library');
        $manager->persist($logTypeLibrarySearch);

        $logTypeLibrarySearchFail = new LogType();
        $logTypeLibrarySearchFail->setTitle('Ошибка поиска материала в библиотеке');
        $logTypeLibrarySearchFail->setDescription('Ошибка поиска материала в библиотеке');
        $logTypeLibrarySearchFail->setState(LogTypeState::FAILURE->value);
        $logTypeLibrarySearchFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_SEARCH_REFERENCE));
        $logTypeLibrarySearchFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_LIBRARY_REFERENCE));
        $logTypeLibrarySearchFail->setSubsystemCode('material_library');
        $manager->persist($logTypeLibrarySearchFail);

        $logTypeLibraryPublish = new LogType();
        $logTypeLibraryPublish->setTitle('Публикация материала');
        $logTypeLibraryPublish->setDescription('Публикация материала');
        $logTypeLibraryPublish->setState(LogTypeState::SUCCESS->value);
        $logTypeLibraryPublish->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_PUBLISH_REFERENCE));
        $logTypeLibraryPublish->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_LIBRARY_REFERENCE));
        $logTypeLibraryPublish->setSubsystemCode('material_library');
        $manager->persist($logTypeLibraryPublish);

        $logTypeLibraryPublishFail = new LogType();
        $logTypeLibraryPublishFail->setTitle('Ошибка публикации материала');
        $logTypeLibraryPublishFail->setDescription('Ошибка публикации материала');
        $logTypeLibraryPublishFail->setState(LogTypeState::FAILURE->value);
        $logTypeLibraryPublishFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_PUBLISH_REFERENCE));
        $logTypeLibraryPublishFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_LIBRARY_REFERENCE));
        $logTypeLibraryPublishFail->setSubsystemCode('material_library');
        $manager->persist($logTypeLibraryPublishFail);

        $logTypeLibraryDraft = new LogType();
        $logTypeLibraryDraft->setTitle('Перевод материала в черновик');
        $logTypeLibraryDraft->setDescription('Перевод материала в черновик');
        $logTypeLibraryDraft->setState(LogTypeState::SUCCESS->value);
        $logTypeLibraryDraft->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_DRAFT_REFERENCE));
        $logTypeLibraryDraft->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_LIBRARY_REFERENCE));
        $logTypeLibraryDraft->setSubsystemCode('material_library');
        $manager->persist($logTypeLibraryDraft);

        $logTypeLibraryDraftFail = new LogType();
        $logTypeLibraryDraftFail->setTitle('Ошибка перевода материала в черновик');
        $logTypeLibraryDraftFail->setDescription('Ошибка перевода материала в черновик');
        $logTypeLibraryDraftFail->setState(LogTypeState::FAILURE->value);
        $logTypeLibraryDraftFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_DRAFT_REFERENCE));
        $logTypeLibraryDraftFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_LIBRARY_REFERENCE));
        $logTypeLibraryDraftFail->setSubsystemCode('material_library');
        $manager->persist($logTypeLibraryDraftFail);

        $logTypeLibraryArchive = new LogType();
        $logTypeLibraryArchive->setTitle('Перевод материала Библиотеки в архив');
        $logTypeLibraryArchive->setDescription('Перевод материала Библиотеки в архив');
        $logTypeLibraryArchive->setState(LogTypeState::SUCCESS->value);
        $logTypeLibraryArchive->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_ARCHIVE_REFERENCE));
        $logTypeLibraryArchive->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_LIBRARY_REFERENCE));
        $logTypeLibraryArchive->setSubsystemCode('material_library');
        $manager->persist($logTypeLibraryArchive);

        $logTypeLibraryArchiveFail = new LogType();
        $logTypeLibraryArchiveFail->setTitle('Ошибка перевода материала Библиотеки в архив');
        $logTypeLibraryArchiveFail->setDescription('Ошибка перевода материала Библиотеки в архив');
        $logTypeLibraryArchiveFail->setState(LogTypeState::FAILURE->value);
        $logTypeLibraryArchiveFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_ARCHIVE_REFERENCE));
        $logTypeLibraryArchiveFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_LIBRARY_REFERENCE));
        $logTypeLibraryArchiveFail->setSubsystemCode('material_library');
        $manager->persist($logTypeLibraryArchiveFail);

        $manager->flush();
    }
}