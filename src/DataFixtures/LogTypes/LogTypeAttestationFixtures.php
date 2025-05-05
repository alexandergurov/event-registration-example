<?php

namespace App\DataFixtures\LogTypes;

use registration\src\DataFixtures\LogTypePropertiesFixtures;
use registration\src\Entity\LogType;
use registration\src\Enum\LogTypeState;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class LogTypeAttestationFixtures extends Fixture
{

    public function load(ObjectManager $manager): void
    {
        $logTypeAttestationArchive = new LogType();
        $logTypeAttestationArchive->setTitle('Перевод карточки Аттестации в архив');
        $logTypeAttestationArchive->setDescription('Перевод карточки Аттестации в архив');
        $logTypeAttestationArchive->setState(LogTypeState::SUCCESS->value);
        $logTypeAttestationArchive->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_ARCHIVE_REFERENCE));
        $logTypeAttestationArchive->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_ATTESTATION_REFERENCE));
        $logTypeAttestationArchive->setSubsystemCode('attestation');
        $manager->persist($logTypeAttestationArchive);

        $logTypeAttestationArchiveFail = new LogType();
        $logTypeAttestationArchiveFail->setTitle('Ошибка перевода карточки Аттестации в архив');
        $logTypeAttestationArchiveFail->setDescription('Ошибка перевода карточки Аттестации в архив');
        $logTypeAttestationArchiveFail->setState(LogTypeState::FAILURE->value);
        $logTypeAttestationArchiveFail->setLogCategory($this->getReference(LogTypePropertiesFixtures::LOG_CATEGORY_ARCHIVE_REFERENCE));
        $logTypeAttestationArchiveFail->setLogObject($this->getReference(LogTypePropertiesFixtures::LOG_OBJECT_ATTESTATION_REFERENCE));
        $logTypeAttestationArchiveFail->setSubsystemCode('attestation');
        $manager->persist($logTypeAttestationArchiveFail);

        $manager->flush();
    }
}