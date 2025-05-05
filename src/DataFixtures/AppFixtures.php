<?php

namespace App\DataFixtures;

use registration\src\DataFixtures\LogTypes\LogTypeAttestationFixtures;
use registration\src\DataFixtures\LogTypes\LogTypeCalendarFixtures;
use microservices\eventuse microservices\eventuse microservices\eventuse microservices\eventuse microservices\eventuse microservices\eventuse microservices\eventuse microservices\eventuse microservices\eventuse registration\src\DataFixtures\LogTypes\LogTypeDictionaryAcademicDegreeFixtures;
use registration\src\DataFixtures\LogTypes\LogTypeDictionaryAcademicTitleFixtures;
use registration\src\DataFixtures\LogTypes\LogTypeDictionaryClassFixtures;
use registration\src\DataFixtures\LogTypes\LogTypeDictionaryCourseFixtures;
use registration\src\DataFixtures\LogTypes\LogTypeDictionaryDisciplineFixtures;
use registration\src\DataFixtures\LogTypes\LogTypeDictionaryEducationFormFixtures;
use registration\src\DataFixtures\LogTypes\LogTypeDictionaryEducationLevelFixtures;
use registration\src\DataFixtures\LogTypes\LogTypeDictionaryEventLevelFixtures;
use registration\src\DataFixtures\LogTypes\LogTypeDictionaryFieldFixtures;
use registration\src\DataFixtures\LogTypes\LogTypeDictionaryGeneralEducationLevelFixtures;
use registration\src\DataFixtures\LogTypes\LogTypeDictionaryHoldFormFixtures;
use registration\src\DataFixtures\LogTypes\LogTypeDictionaryParticipationResultFixtures;
use registration\src\DataFixtures\LogTypes\LogTypeDictionaryParticipationTypeFixtures;
use registration\src\DataFixtures\LogTypes\LogTypeDictionaryProfessionFixtures;
use registration\src\DataFixtures\LogTypes\LogTypeDictionaryRegionFixtures;
use registration\src\DataFixtures\LogTypes\LogTypeDictionaryTeacherCategoryFixtures;
use registration\src\DataFixtures\LogTypes\LogTypeMaterialLibraryFixtures;
use registration\src\DataFixtures\LogTypes\LogTypePortfolioFixtures;
use registration\src\DataFixtures\LogTypes\LogTypeProgramCatalogFixtures;
use registration\src\DataFixtures\LogTypes\LogTypeProgramFixtures;
use registration\src\DataFixtures\LogTypes\LogTypeQuestionnaireFixtures;
use registration\src\DataFixtures\LogTypes\LogTypeSearchFixtures;
use registration\src\DataFixtures\LogTypes\LogTypeThematicCollectionFixtures;
use registration\src\DataFixtures\LogTypes\LogTypeTrainingFixtures;
use registration\src\DataFixtures\LogTypes\LogTypeUserManagementFixtures;
use registration\src\Entity\LogType;
use registration\src\Enum\LogTypeState;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $logTypeUserLogin = new LogType();
        $logTypeUserLogin->setTitle('Вход пользователя в систему');
        $logTypeUserLogin->setDescription('Вход пользователя в систему');
        $logTypeUserLogin->setState(LogTypeState::SUCCESS->value);
        $logTypeUserLogin->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_LOGIN_REFERENCE));
        $logTypeUserLogin->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_USER_REFERENCE));
        $logTypeUserLogin->setSubsystemCode('auth');
        $manager->persist($logTypeUserLogin);

        $logTypeUserLoginFail = new LogType();
        $logTypeUserLoginFail->setTitle('Ошибка входа пользователя в систему');
        $logTypeUserLoginFail->setDescription('Ошибка входа пользователя в систему');
        $logTypeUserLoginFail->setState(LogTypeState::FAILURE->value);
        $logTypeUserLoginFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_LOGIN_REFERENCE));
        $logTypeUserLoginFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_USER_REFERENCE));
        $logTypeUserLoginFail->setSubsystemCode('auth');
        $manager->persist($logTypeUserLoginFail);

        $logTypeUserLogout = new LogType();
        $logTypeUserLogout->setTitle('Выход пользователя из системы');
        $logTypeUserLogout->setDescription('Выход пользователя из системы');
        $logTypeUserLogout->setState(LogTypeState::SUCCESS->value);
        $logTypeUserLogout->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_LOGOUT_REFERENCE));
        $logTypeUserLogout->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_USER_REFERENCE));
        $logTypeUserLogout->setSubsystemCode('auth');
        $manager->persist($logTypeUserLogout);

        $logTypeUserLogoutFail = new LogType();
        $logTypeUserLogoutFail->setTitle('Ошибка выхода пользователя из системы');
        $logTypeUserLogoutFail->setDescription('Ошибка выхода пользователя из системы');
        $logTypeUserLogoutFail->setState(LogTypeState::FAILURE->value);
        $logTypeUserLogoutFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_LOGOUT_REFERENCE));
        $logTypeUserLogoutFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_USER_REFERENCE));
        $logTypeUserLogoutFail->setSubsystemCode('auth');
        $manager->persist($logTypeUserLogoutFail);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            LogTypePropertiesFixtures::class,
            LogTypeCalendarFixtures::class,
            LogTypeMaterialLibraryFixtures::class,
            LogTypeProgramCatalogFixtures::class,
            LogTypeTrainingFixtures::class,
            LogTypeProgramFixtures::class,
            LogTypeThematicCollectionFixtures::class,
            LogTypeAttestationFixtures::class,
            LogTypePortfolioFixtures::class,
            LogTypeUserManagementFixtures::class,
            LogTypeDictionaryParticipationTypeFixtures::class,
            LogTypeDictionaryParticipationResultFixtures::class,
            LogTypeDictionaryDisciplineFixtures::class,
            LogTypeDictionaryClassFixtures::class,
            LogTypeDictionaryFieldFixtures::class,
            LogTypeDictionaryCourseFixtures::class,
            LogTypeDictionaryEventLevelFixtures::class,
            LogTypeDictionaryAcademicDegreeFixtures::class,
            LogTypeDictionaryAcademicTitleFixtures::class,
            LogTypeDictionaryEducationFormFixtures::class,
            LogTypeDictionaryEducationLevelFixtures::class,
            LogTypeDictionaryHoldFormFixtures::class,
            LogTypeDictionaryGeneralEducationLevelFixtures::class,
            LogTypeDictionaryProfessionFixtures::class,
            LogTypeDictionaryRegionFixtures::class,
            LogTypeDictionaryTeacherCategoryFixtures::class,
            LogTypeSearchFixtures::class,
            LogTypeQuestionnaireFixtures::class
        ];
    }
}
