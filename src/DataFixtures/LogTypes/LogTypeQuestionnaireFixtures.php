<?php

namespace App\DataFixtures\LogTypes;

use registration\src\DataFixtures\LogTypePropertiesFixtures;
use registration\src\Entity\LogType;
use registration\src\Enum\LogTypeState;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class LogTypeQuestionnaireFixtures extends Fixture
{

    public function load(ObjectManager $manager): void
    {

        $logTypeQuestionnaireStart = new LogType();
        $logTypeQuestionnaireStart->setTitle('Начать тестирование');
        $logTypeQuestionnaireStart->setDescription('Начать тестирование');
        $logTypeQuestionnaireStart->setState(LogTypeState::SUCCESS->value);
        $logTypeQuestionnaireStart->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_START_REFERENCE));
        $logTypeQuestionnaireStart->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_QUESTIONNAIRE_REFERENCE));
        $logTypeQuestionnaireStart->setSubsystemCode('questionnaire');
        $manager->persist($logTypeQuestionnaireStart);

        $logTypeQuestionnaireStartFail = new LogType();
        $logTypeQuestionnaireStartFail->setTitle('Ошибка при начале тестирования');
        $logTypeQuestionnaireStartFail->setDescription('Ошибка при начале тестирования');
        $logTypeQuestionnaireStartFail->setState(LogTypeState::FAILURE->value);
        $logTypeQuestionnaireStartFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_START_REFERENCE));
        $logTypeQuestionnaireStartFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_QUESTIONNAIRE_REFERENCE));
        $logTypeQuestionnaireStartFail->setSubsystemCode('questionnaire');
        $manager->persist($logTypeQuestionnaireStartFail);

        $logTypeQuestionnairePause = new LogType();
        $logTypeQuestionnairePause->setTitle('Приостановить тестирование');
        $logTypeQuestionnairePause->setDescription('Приостановить тестирование');
        $logTypeQuestionnairePause->setState(LogTypeState::SUCCESS->value);
        $logTypeQuestionnairePause->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_PAUSED_REFERENCE));
        $logTypeQuestionnairePause->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_QUESTIONNAIRE_REFERENCE));
        $logTypeQuestionnairePause->setSubsystemCode('questionnaire');
        $manager->persist($logTypeQuestionnairePause);

        $logTypeQuestionnairePauseFail = new LogType();
        $logTypeQuestionnairePauseFail->setTitle('Ошибка приостановки тестирования');
        $logTypeQuestionnairePauseFail->setDescription('Ошибка приостановки тестирования');
        $logTypeQuestionnairePauseFail->setState(LogTypeState::FAILURE->value);
        $logTypeQuestionnairePauseFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_PAUSED_REFERENCE));
        $logTypeQuestionnairePauseFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_QUESTIONNAIRE_REFERENCE));
        $logTypeQuestionnairePauseFail->setSubsystemCode('questionnaire');
        $manager->persist($logTypeQuestionnairePauseFail);

        $logTypeQuestionnaireResume = new LogType();
        $logTypeQuestionnaireResume->setTitle('Возобновить тестирование');
        $logTypeQuestionnaireResume->setDescription('Возобновить тестирование');
        $logTypeQuestionnaireResume->setState(LogTypeState::SUCCESS->value);
        $logTypeQuestionnaireResume->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_RESUMED_REFERENCE));
        $logTypeQuestionnaireResume->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_QUESTIONNAIRE_REFERENCE));
        $logTypeQuestionnaireResume->setSubsystemCode('questionnaire');
        $manager->persist($logTypeQuestionnaireResume);

        $logTypeQuestionnaireResumeFail = new LogType();
        $logTypeQuestionnaireResumeFail->setTitle('Ошибка возобновления тестирования');
        $logTypeQuestionnaireResumeFail->setDescription('Ошибка возобновления тестирования');
        $logTypeQuestionnaireResumeFail->setState(LogTypeState::FAILURE->value);
        $logTypeQuestionnaireResumeFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_RESUMED_REFERENCE));
        $logTypeQuestionnaireResumeFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_QUESTIONNAIRE_REFERENCE));
        $logTypeQuestionnaireResumeFail->setSubsystemCode('questionnaire');
        $manager->persist($logTypeQuestionnaireResumeFail);

        $logTypeQuestionnaireFinish = new LogType();
        $logTypeQuestionnaireFinish->setTitle('Завершение тестирования');
        $logTypeQuestionnaireFinish->setDescription('Завершение тестирования');
        $logTypeQuestionnaireFinish->setState(LogTypeState::SUCCESS->value);
        $logTypeQuestionnaireFinish->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_FINISH_REFERENCE));
        $logTypeQuestionnaireFinish->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_QUESTIONNAIRE_REFERENCE));
        $logTypeQuestionnaireFinish->setSubsystemCode('questionnaire');
        $manager->persist($logTypeQuestionnaireFinish);

        $logTypeQuestionnaireFinishFail = new LogType();
        $logTypeQuestionnaireFinishFail->setTitle('Ошибка при завершении тестирования');
        $logTypeQuestionnaireFinishFail->setDescription('Ошибка при завершении тестирования');
        $logTypeQuestionnaireFinishFail->setState(LogTypeState::FAILURE->value);
        $logTypeQuestionnaireFinishFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_FINISH_REFERENCE));
        $logTypeQuestionnaireFinishFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_QUESTIONNAIRE_REFERENCE));
        $logTypeQuestionnaireFinishFail->setSubsystemCode('questionnaire');
        $manager->persist($logTypeQuestionnaireFinishFail);

        $logTypeQuestionnaireSelfchecking = new LogType();
        $logTypeQuestionnaireSelfchecking->setTitle('Самопроверка задания');
        $logTypeQuestionnaireSelfchecking->setDescription('Самопроверка задания');
        $logTypeQuestionnaireSelfchecking->setState(LogTypeState::SUCCESS->value);
        $logTypeQuestionnaireSelfchecking->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_SELFCHECKING_REFERENCE));
        $logTypeQuestionnaireSelfchecking->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_QUESTIONNAIRE_REFERENCE));
        $logTypeQuestionnaireSelfchecking->setSubsystemCode('questionnaire');
        $manager->persist($logTypeQuestionnaireSelfchecking);

        $logTypeQuestionnaireSelfcheckingFail = new LogType();
        $logTypeQuestionnaireSelfcheckingFail->setTitle('Ошибка при самопроверке задания');
        $logTypeQuestionnaireSelfcheckingFail->setDescription('Ошибка при самопроверке задания');
        $logTypeQuestionnaireSelfcheckingFail->setState(LogTypeState::FAILURE->value);
        $logTypeQuestionnaireSelfcheckingFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_SELFCHECKING_REFERENCE));
        $logTypeQuestionnaireSelfcheckingFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_QUESTIONNAIRE_REFERENCE));
        $logTypeQuestionnaireSelfcheckingFail->setSubsystemCode('questionnaire');
        $manager->persist($logTypeQuestionnaireSelfcheckingFail);

        $logTypeQuestionnairePassing = new LogType();
        $logTypeQuestionnairePassing->setTitle('Отображение истории прохождения тестирования');
        $logTypeQuestionnairePassing->setDescription('Отображение истории прохождения тестирования');
        $logTypeQuestionnairePassing->setState(LogTypeState::SUCCESS->value);
        $logTypeQuestionnairePassing->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_PASSING_REFERENCE));
        $logTypeQuestionnairePassing->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_QUESTIONNAIRE_REFERENCE));
        $logTypeQuestionnairePassing->setSubsystemCode('questionnaire');
        $manager->persist($logTypeQuestionnairePassing);

        $logTypeQuestionnairePassingFail = new LogType();
        $logTypeQuestionnairePassingFail->setTitle('Ошибка отображения истории прохождения тестирования');
        $logTypeQuestionnairePassingFail->setDescription('Ошибка отображения истории прохождения тестирования');
        $logTypeQuestionnairePassingFail->setState(LogTypeState::FAILURE->value);
        $logTypeQuestionnairePassingFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_PASSING_REFERENCE));
        $logTypeQuestionnairePassingFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_QUESTIONNAIRE_REFERENCE));
        $logTypeQuestionnairePassingFail->setSubsystemCode('questionnaire');
        $manager->persist($logTypeQuestionnairePassingFail);

        $manager->flush();
    }
}