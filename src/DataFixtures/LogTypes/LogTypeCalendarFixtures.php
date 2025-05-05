<?php

namespace App\DataFixtures\LogTypes;

use registration\src\DataFixtures\LogTypePropertiesFixtures;
use registration\src\Entity\LogType;
use registration\src\Enum\LogTypeState;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class LogTypeCalendarFixtures extends Fixture {

    public function load(ObjectManager $manager): void
    {
        $logTypeCalendarCreate = new LogType();
        $logTypeCalendarCreate->setTitle('Создание события');
        $logTypeCalendarCreate->setDescription('Создание события');
        $logTypeCalendarCreate->setState(LogTypeState::SUCCESS->value);
        $logTypeCalendarCreate->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_CREATE_REFERENCE));
        $logTypeCalendarCreate->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_CALENDAR_REFERENCE));
        $logTypeCalendarCreate->setSubsystemCode('calendar');
        $manager->persist($logTypeCalendarCreate);

        $logTypeCalendarCreateFail = new LogType();
        $logTypeCalendarCreateFail->setTitle('Ошибка создания события');
        $logTypeCalendarCreateFail->setDescription('Ошибка создания события');
        $logTypeCalendarCreateFail->setState(LogTypeState::FAILURE->value);
        $logTypeCalendarCreateFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_CREATE_REFERENCE));
        $logTypeCalendarCreateFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_CALENDAR_REFERENCE));
        $logTypeCalendarCreateFail->setSubsystemCode('calendar');
        $manager->persist($logTypeCalendarCreateFail);

        $logTypeCalendarUpdate = new LogType();
        $logTypeCalendarUpdate->setTitle('Редактирование события');
        $logTypeCalendarUpdate->setDescription('Редактирование события');
        $logTypeCalendarUpdate->setState(LogTypeState::SUCCESS->value);
        $logTypeCalendarUpdate->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_UPDATE_REFERENCE));
        $logTypeCalendarUpdate->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_CALENDAR_REFERENCE));
        $logTypeCalendarUpdate->setSubsystemCode('calendar');
        $manager->persist($logTypeCalendarUpdate);

        $logTypeCalendarUpdateFail = new LogType();
        $logTypeCalendarUpdateFail->setTitle('Ошибка редактирование события');
        $logTypeCalendarUpdateFail->setDescription('Ошибка редактирования события');
        $logTypeCalendarUpdateFail->setState(LogTypeState::FAILURE->value);
        $logTypeCalendarUpdateFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_UPDATE_REFERENCE));
        $logTypeCalendarUpdateFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_CALENDAR_REFERENCE));
        $logTypeCalendarUpdateFail->setSubsystemCode('calendar');
        $manager->persist($logTypeCalendarUpdateFail);

        $logTypeCalendarDelete = new LogType();
        $logTypeCalendarDelete->setTitle('Удаление события');
        $logTypeCalendarDelete->setDescription('Удаления события');
        $logTypeCalendarDelete->setState(LogTypeState::SUCCESS->value);
        $logTypeCalendarDelete->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_DELETE_REFERENCE));
        $logTypeCalendarDelete->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_CALENDAR_REFERENCE));
        $logTypeCalendarDelete->setSubsystemCode('calendar');
        $manager->persist($logTypeCalendarDelete);

        $logTypeCalendarDeleteFail = new LogType();
        $logTypeCalendarDeleteFail->setTitle('Ошибка удаления события');
        $logTypeCalendarDeleteFail->setDescription('Ошибка удаления события');
        $logTypeCalendarDeleteFail->setState(LogTypeState::FAILURE->value);
        $logTypeCalendarDeleteFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_DELETE_REFERENCE));
        $logTypeCalendarDeleteFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_CALENDAR_REFERENCE));
        $logTypeCalendarDeleteFail->setSubsystemCode('calendar');
        $manager->persist($logTypeCalendarDeleteFail);

        $logTypeCalendarView = new LogType();
        $logTypeCalendarView->setTitle('Просмотр события');
        $logTypeCalendarView->setDescription('Просмотр события');
        $logTypeCalendarView->setState(LogTypeState::SUCCESS->value);
        $logTypeCalendarView->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_VIEW_REFERENCE));
        $logTypeCalendarView->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_CALENDAR_REFERENCE));
        $logTypeCalendarView->setSubsystemCode('calendar');
        $manager->persist($logTypeCalendarView);

        $logTypeCalendarViewFail = new LogType();
        $logTypeCalendarViewFail->setTitle('Ошибка просмотра события');
        $logTypeCalendarViewFail->setDescription('Ошибка просмотра события');
        $logTypeCalendarViewFail->setState(LogTypeState::FAILURE->value);
        $logTypeCalendarViewFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_VIEW_REFERENCE));
        $logTypeCalendarViewFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_CALENDAR_REFERENCE));
        $logTypeCalendarViewFail->setSubsystemCode('calendar');
        $manager->persist($logTypeCalendarViewFail);

        $logTypeCalendarGet = new LogType();
        $logTypeCalendarGet->setTitle('Получение события');
        $logTypeCalendarGet->setDescription('Получение события');
        $logTypeCalendarGet->setState(LogTypeState::SUCCESS->value);
        $logTypeCalendarGet->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_GET_REFERENCE));
        $logTypeCalendarGet->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_CALENDAR_REFERENCE));
        $logTypeCalendarGet->setSubsystemCode('calendar');
        $manager->persist($logTypeCalendarGet);

        $logTypeCalendarGetFail = new LogType();
        $logTypeCalendarGetFail->setTitle('Ошибка получения события');
        $logTypeCalendarGetFail->setDescription('Ошибка получения события');
        $logTypeCalendarGetFail->setState(LogTypeState::FAILURE->value);
        $logTypeCalendarGetFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_GET_REFERENCE));
        $logTypeCalendarGetFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_CALENDAR_REFERENCE));
        $logTypeCalendarGetFail->setSubsystemCode('calendar');
        $manager->persist($logTypeCalendarGetFail);

        $logTypeCalendarSearch = new LogType();
        $logTypeCalendarSearch->setTitle('Поиск событий в календаре');
        $logTypeCalendarSearch->setDescription('Поиск событий в календаре');
        $logTypeCalendarSearch->setState(LogTypeState::SUCCESS->value);
        $logTypeCalendarSearch->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_SEARCH_REFERENCE));
        $logTypeCalendarSearch->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_CALENDAR_REFERENCE));
        $logTypeCalendarSearch->setSubsystemCode('calendar');
        $manager->persist($logTypeCalendarSearch);

        $logTypeCalendarSearchFail = new LogType();
        $logTypeCalendarSearchFail->setTitle('Ошибка поиска событий в календаре');
        $logTypeCalendarSearchFail->setDescription('Ошибка поиска событий в календаре');
        $logTypeCalendarSearchFail->setState(LogTypeState::FAILURE->value);
        $logTypeCalendarSearchFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_SEARCH_REFERENCE));
        $logTypeCalendarSearchFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_CALENDAR_REFERENCE));
        $logTypeCalendarSearchFail->setSubsystemCode('calendar');
        $manager->persist($logTypeCalendarSearchFail);

        $logTypeCalendarPublish = new LogType();
        $logTypeCalendarPublish->setTitle('Публикация события');
        $logTypeCalendarPublish->setDescription('Публикация события');
        $logTypeCalendarPublish->setState(LogTypeState::SUCCESS->value);
        $logTypeCalendarPublish->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_PUBLISH_REFERENCE));
        $logTypeCalendarPublish->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_CALENDAR_REFERENCE));
        $logTypeCalendarPublish->setSubsystemCode('calendar');
        $manager->persist($logTypeCalendarPublish);

        $logTypeCalendarPublishFail = new LogType();
        $logTypeCalendarPublishFail->setTitle('Ошибка публикации события');
        $logTypeCalendarPublishFail->setDescription('Ошибка публикации события');
        $logTypeCalendarPublishFail->setState(LogTypeState::FAILURE->value);
        $logTypeCalendarPublishFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_PUBLISH_REFERENCE));
        $logTypeCalendarPublishFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_CALENDAR_REFERENCE));
        $logTypeCalendarPublishFail->setSubsystemCode('calendar');
        $manager->persist($logTypeCalendarPublishFail);

        $logTypeCalendarUnpublish = new LogType();
        $logTypeCalendarUnpublish->setTitle('Снятие с публикации события');
        $logTypeCalendarUnpublish->setDescription('Снятие с публикации события');
        $logTypeCalendarUnpublish->setState(LogTypeState::SUCCESS->value);
        $logTypeCalendarUnpublish->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_UNPUBLISH_REFERENCE));
        $logTypeCalendarUnpublish->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_CALENDAR_REFERENCE));
        $logTypeCalendarUnpublish->setSubsystemCode('calendar');
        $manager->persist($logTypeCalendarUnpublish);

        $logTypeCalendarUnpublishFail = new LogType();
        $logTypeCalendarUnpublishFail->setTitle('Ошибка снятия с публикации события');
        $logTypeCalendarUnpublishFail->setDescription('Ошибка снятия с публикации события');
        $logTypeCalendarUnpublishFail->setState(LogTypeState::FAILURE->value);
        $logTypeCalendarUnpublishFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_UNPUBLISH_REFERENCE));
        $logTypeCalendarUnpublishFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_CALENDAR_REFERENCE));
        $logTypeCalendarUnpublishFail->setSubsystemCode('calendar');
        $manager->persist($logTypeCalendarUnpublishFail);

        $logTypeCalendarArchive = new LogType();
        $logTypeCalendarArchive->setTitle('Перевод события Календаря в архив');
        $logTypeCalendarArchive->setDescription('Перевод события Календаря в архив');
        $logTypeCalendarArchive->setState(LogTypeState::SUCCESS->value);
        $logTypeCalendarArchive->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_ARCHIVE_REFERENCE));
        $logTypeCalendarArchive->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_CALENDAR_REFERENCE));
        $logTypeCalendarArchive->setSubsystemCode('calendar');
        $manager->persist($logTypeCalendarArchive);

        $logTypeCalendarArchiveFail = new LogType();
        $logTypeCalendarArchiveFail->setTitle('Ошибка перевода события Календаря в архив');
        $logTypeCalendarArchiveFail->setDescription('Ошибка перевода события Календаря в архив');
        $logTypeCalendarArchiveFail->setState(LogTypeState::FAILURE->value);
        $logTypeCalendarArchiveFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_ARCHIVE_REFERENCE));
        $logTypeCalendarArchiveFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_CALENDAR_REFERENCE));
        $logTypeCalendarArchiveFail->setSubsystemCode('calendar');
        $manager->persist($logTypeCalendarArchiveFail);

        $manager->flush();
    }
}