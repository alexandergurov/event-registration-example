<?php

namespace App\DataFixtures\LogTypes;

use registration\src\DataFixtures\LogTypePropertiesFixtures;
use registration\src\Entity\LogType;
use registration\src\Enum\LogTypeState;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class LogTypePortfolioFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $logTypePortfolioCreate = new LogType();
        $logTypePortfolioCreate->setTitle('Создание достижения');
        $logTypePortfolioCreate->setDescription('Создание достижения');
        $logTypePortfolioCreate->setState(LogTypeState::SUCCESS->value);
        $logTypePortfolioCreate->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_CREATE_REFERENCE));
        $logTypePortfolioCreate->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_PORTFOLIO_REFERENCE));
        $logTypePortfolioCreate->setSubsystemCode('portfolio');
        $manager->persist($logTypePortfolioCreate);

        $logTypePortfolioCreateFail = new LogType();
        $logTypePortfolioCreateFail->setTitle('Ошибка создания достижения');
        $logTypePortfolioCreateFail->setDescription('Ошибка создания достижения');
        $logTypePortfolioCreateFail->setState(LogTypeState::FAILURE->value);
        $logTypePortfolioCreateFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_CREATE_REFERENCE));
        $logTypePortfolioCreateFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_PORTFOLIO_REFERENCE));
        $logTypePortfolioCreateFail->setSubsystemCode('portfolio');
        $manager->persist($logTypePortfolioCreateFail);

        $logTypePortfolioUpdate = new LogType();
        $logTypePortfolioUpdate->setTitle('Редактирование достижения');
        $logTypePortfolioUpdate->setDescription('Редактирование достижения');
        $logTypePortfolioUpdate->setState(LogTypeState::SUCCESS->value);
        $logTypePortfolioUpdate->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_UPDATE_REFERENCE));
        $logTypePortfolioUpdate->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_PORTFOLIO_REFERENCE));
        $logTypePortfolioUpdate->setSubsystemCode('portfolio');
        $manager->persist($logTypePortfolioUpdate);

        $logTypePortfolioUpdateFail = new LogType();
        $logTypePortfolioUpdateFail->setTitle('Ошибка редактирования достижения');
        $logTypePortfolioUpdateFail->setDescription('Ошибка редактирования достижения');
        $logTypePortfolioUpdateFail->setState(LogTypeState::FAILURE->value);
        $logTypePortfolioUpdateFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_UPDATE_REFERENCE));
        $logTypePortfolioUpdateFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_PORTFOLIO_REFERENCE));
        $logTypePortfolioUpdateFail->setSubsystemCode('portfolio');
        $manager->persist($logTypePortfolioUpdateFail);

        $logTypePortfolioDelete = new LogType();
        $logTypePortfolioDelete->setTitle('Удаление достижения');
        $logTypePortfolioDelete->setDescription('Удаление достижения');
        $logTypePortfolioDelete->setState(LogTypeState::SUCCESS->value);
        $logTypePortfolioDelete->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_DELETE_REFERENCE));
        $logTypePortfolioDelete->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_PORTFOLIO_REFERENCE));
        $logTypePortfolioDelete->setSubsystemCode('portfolio');
        $manager->persist($logTypePortfolioDelete);

        $logTypePortfolioDeleteFail = new LogType();
        $logTypePortfolioDeleteFail->setTitle('Ошибка удаления достижения');
        $logTypePortfolioDeleteFail->setDescription('Ошибка удаления достижения');
        $logTypePortfolioDeleteFail->setState(LogTypeState::FAILURE->value);
        $logTypePortfolioDeleteFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_DELETE_REFERENCE));
        $logTypePortfolioDeleteFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_PORTFOLIO_REFERENCE));
        $logTypePortfolioDeleteFail->setSubsystemCode('portfolio');
        $manager->persist($logTypePortfolioDeleteFail);

        $logTypePortfolioView = new LogType();
        $logTypePortfolioView->setTitle('Просмотр достижения');
        $logTypePortfolioView->setDescription('Просмотр достижения');
        $logTypePortfolioView->setState(LogTypeState::SUCCESS->value);
        $logTypePortfolioView->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_VIEW_REFERENCE));
        $logTypePortfolioView->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_PORTFOLIO_REFERENCE));
        $logTypePortfolioView->setSubsystemCode('portfolio');
        $manager->persist($logTypePortfolioView);

        $logTypePortfolioViewFail = new LogType();
        $logTypePortfolioViewFail->setTitle('Ошибка просмотра достижения');
        $logTypePortfolioViewFail->setDescription('Ошибка просмотра достижения');
        $logTypePortfolioViewFail->setState(LogTypeState::FAILURE->value);
        $logTypePortfolioViewFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_VIEW_REFERENCE));
        $logTypePortfolioViewFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_PORTFOLIO_REFERENCE));
        $logTypePortfolioViewFail->setSubsystemCode('portfolio');
        $manager->persist($logTypePortfolioViewFail);

        $logTypePortfolioGet = new LogType();
        $logTypePortfolioGet->setTitle('Получение достижения');
        $logTypePortfolioGet->setDescription('Получение достижения');
        $logTypePortfolioGet->setState(LogTypeState::SUCCESS->value);
        $logTypePortfolioGet->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_GET_REFERENCE));
        $logTypePortfolioGet->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_PORTFOLIO_REFERENCE));
        $logTypePortfolioGet->setSubsystemCode('portfolio');
        $manager->persist($logTypePortfolioGet);

        $logTypePortfolioGetFail = new LogType();
        $logTypePortfolioGetFail->setTitle('Ошибка получения достижения');
        $logTypePortfolioGetFail->setDescription('Ошибка получения достижения');
        $logTypePortfolioGetFail->setState(LogTypeState::FAILURE->value);
        $logTypePortfolioGetFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_GET_REFERENCE));
        $logTypePortfolioGetFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_PORTFOLIO_REFERENCE));
        $logTypePortfolioGetFail->setSubsystemCode('portfolio');
        $manager->persist($logTypePortfolioGetFail);

        $manager->flush();
    }
}