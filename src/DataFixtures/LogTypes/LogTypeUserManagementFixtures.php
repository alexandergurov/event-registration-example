<?php

namespace App\DataFixtures\LogTypes;

use registration\src\DataFixtures\LogTypePropertiesFixtures;
use registration\src\Entity\LogType;
use registration\src\Enum\LogTypeState;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class LogTypeUserManagementFixtures extends Fixture
{

    public function load(ObjectManager $manager): void
    {
        $logTypeUserManagementUpdate = new LogType();
        $logTypeUserManagementUpdate->setTitle('Изменение роли пользователя');
        $logTypeUserManagementUpdate->setDescription('Изменение роли пользователя');
        $logTypeUserManagementUpdate->setState(LogTypeState::SUCCESS->value);
        $logTypeUserManagementUpdate->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_UPDATE_REFERENCE));
        $logTypeUserManagementUpdate->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_USER_MANAGEMENT_REFERENCE));
        $logTypeUserManagementUpdate->setSubsystemCode('user_management');
        $manager->persist($logTypeUserManagementUpdate);

        $logTypeUserManagementFail = new LogType();
        $logTypeUserManagementFail->setTitle('Ошибка изменения роли пользователя');
        $logTypeUserManagementFail->setDescription('Ошибка изменения роли пользователя');
        $logTypeUserManagementFail->setState(LogTypeState::FAILURE->value);
        $logTypeUserManagementFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_UPDATE_REFERENCE));
        $logTypeUserManagementFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_USER_MANAGEMENT_REFERENCE));
        $logTypeUserManagementFail->setSubsystemCode('user_management');
        $manager->persist($logTypeUserManagementFail);

        $logTypeUserManagementBlock = new LogType();
        $logTypeUserManagementBlock->setTitle('Блокировка учетной записи пользователя');
        $logTypeUserManagementBlock->setDescription('Блокировка учетной записи пользователя');
        $logTypeUserManagementBlock->setState(LogTypeState::SUCCESS->value);
        $logTypeUserManagementBlock->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_BLOCK_REFERENCE));
        $logTypeUserManagementBlock->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_USER_MANAGEMENT_REFERENCE));
        $logTypeUserManagementBlock->setSubsystemCode('user_management');
        $manager->persist($logTypeUserManagementBlock);

        $logTypeUserManagementBlockFail = new LogType();
        $logTypeUserManagementBlockFail->setTitle('Ошибка блокировки учетной записи пользователя');
        $logTypeUserManagementBlockFail->setDescription('Ошибка блокировки учетной записи пользователя');
        $logTypeUserManagementBlockFail->setState(LogTypeState::FAILURE->value);
        $logTypeUserManagementBlockFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_BLOCK_REFERENCE));
        $logTypeUserManagementBlockFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_USER_MANAGEMENT_REFERENCE));
        $logTypeUserManagementBlockFail->setSubsystemCode('user_management');
        $manager->persist($logTypeUserManagementBlockFail);

        $logTypeUserManagementUnblock = new LogType();
        $logTypeUserManagementUnblock->setTitle('Разблокировка учетной записи пользователя');
        $logTypeUserManagementUnblock->setDescription('Разблокировка учетной записи пользователя');
        $logTypeUserManagementUnblock->setState(LogTypeState::SUCCESS->value);
        $logTypeUserManagementUnblock->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_UNBLOCK_REFERENCE));
        $logTypeUserManagementUnblock->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_USER_MANAGEMENT_REFERENCE));
        $logTypeUserManagementUnblock->setSubsystemCode('user_management');
        $manager->persist($logTypeUserManagementUnblock);

        $logTypeUserManagementUnblockFail = new LogType();
        $logTypeUserManagementUnblockFail->setTitle('Ошибка разблокировки учетной записи пользователя');
        $logTypeUserManagementUnblockFail->setDescription('Ошибка разблокировки учетной записи пользователя');
        $logTypeUserManagementUnblockFail->setState(LogTypeState::FAILURE->value);
        $logTypeUserManagementUnblockFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_UNBLOCK_REFERENCE));
        $logTypeUserManagementUnblockFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_USER_MANAGEMENT_REFERENCE));
        $logTypeUserManagementUnblockFail->setSubsystemCode('user_management');
        $manager->persist($logTypeUserManagementUnblockFail);

        $logTypeUserManagementDelete = new LogType();
        $logTypeUserManagementDelete->setTitle('Удаление учетной записи пользователя');
        $logTypeUserManagementDelete->setDescription('Удаление учетной записи пользователя');
        $logTypeUserManagementDelete->setState(LogTypeState::SUCCESS->value);
        $logTypeUserManagementDelete->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_DELETE_REFERENCE));
        $logTypeUserManagementDelete->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_USER_MANAGEMENT_REFERENCE));
        $logTypeUserManagementDelete->setSubsystemCode('user_management');
        $manager->persist($logTypeUserManagementDelete);

        $logTypeUserManagementDeleteFail = new LogType();
        $logTypeUserManagementDeleteFail->setTitle('Ошибка удаления учетной записи пользователя');
        $logTypeUserManagementDeleteFail->setDescription('Ошибка удаления учетной записи пользователя');
        $logTypeUserManagementDeleteFail->setState(LogTypeState::FAILURE->value);
        $logTypeUserManagementDeleteFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_DELETE_REFERENCE));
        $logTypeUserManagementDeleteFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_USER_MANAGEMENT_REFERENCE));
        $logTypeUserManagementDeleteFail->setSubsystemCode('user_management');
        $manager->persist($logTypeUserManagementDeleteFail);

        $manager->flush();
    }

}