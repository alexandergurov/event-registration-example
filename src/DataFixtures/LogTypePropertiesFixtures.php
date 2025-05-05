<?php


namespace App\DataFixtures;

use registration\src\Entity\LogCategory;
use registration\src\Entity\LogObject;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class LogTypePropertiesFixtures extends Fixture
{

    /* ------------------------ Log Categories --------------------------- */
    public const LOG_CATEGORY_CREATE_REFERENCE = 'log-category-create';
    public const LOG_CATEGORY_UPDATE_REFERENCE = 'log-category-update';
    public const LOG_CATEGORY_DELETE_REFERENCE = 'log-category-delete';
    public const LOG_CATEGORY_VIEW_REFERENCE = 'log-category-view';
    public const LOG_CATEGORY_PUBLISH_REFERENCE = 'log-category-publish';
    public const LOG_CATEGORY_UNPUBLISH_REFERENCE = 'log-category-unpublish';
    public const LOG_CATEGORY_ARCHIVE_REFERENCE = 'log-category-archive';
    public const LOG_CATEGORY_DRAFT_REFERENCE = 'log-category-draft';
    public const LOG_CATEGORY_SEARCH_REFERENCE = 'log-category-search';
    public const LOG_CATEGORY_BLOCK_REFERENCE = 'log-category-block';
    public const LOG_CATEGORY_UNBLOCK_REFERENCE = 'log-category-unblock';
    public const LOG_CATEGORY_REVEAL_REFERENCE = 'log-category-reveal';
    public const LOG_CATEGORY_HIDE_REFERENCE = 'log-category-hide';
    public const LOG_CATEGORY_START_REFERENCE = 'log-category-start';
    public const LOG_CATEGORY_FINISH_REFERENCE = 'log-category-finish';
    public const LOG_CATEGORY_PAUSED_REFERENCE = 'log-category-paused';
    public const LOG_CATEGORY_RESUMED_REFERENCE = 'log-category-resumed';
    public const LOG_CATEGORY_SELFCHECKING_REFERENCE = 'log-category-selfchecking';
    public const LOG_CATEGORY_PASSING_REFERENCE = 'log-category-passing';
    public const LOG_CATEGORY_LOGIN_REFERENCE = 'log-category-login';
    public const LOG_CATEGORY_LOGOUT_REFERENCE = 'log-category-logout';
    public const LOG_CATEGORY_GET_REFERENCE = 'log-category-get';

    /* --------------------------- Log Objects --------------------------------------- */

    public const LOG_OBJECT_CALENDAR_REFERENCE = 'log-object-calendar';
    public const LOG_OBJECT_LIBRARY_REFERENCE = 'log-object-library';
    public const LOG_OBJECT_PROGRAM_CATALOG_REFERENCE = 'log-object-program-catalog';
    public const LOG_OBJECT_TRAINING_REFERENCE = 'log-object-training';
    public const LOG_OBJECT_PROGRAM_REFERENCE = 'log-object-program';
    public const LOG_OBJECT_THEMATIC_COLLECTION_REFERENCE = 'log-object-thematic-collection';
    public const LOG_OBJECT_SEARCH_REFERENCE = 'log-object-search';
    public const LOG_OBJECT_ATTESTATION_REFERENCE = 'log-object-attestation';
    public const LOG_OBJECT_PORTFOLIO_REFERENCE = 'log-object-portfolio';
    public const LOG_OBJECT_USER_MANAGEMENT_REFERENCE = 'log-object-user-management';
    public const LOG_OBJECT_DICTIONARY_PARTICIPATION_TYPE_REFERENCE = 'log-object-dictionary-participation-type';
    public const LOG_OBJECT_DICTIONARY_PARTICIPATION_RESULT_REFERENCE = 'log-object-dictionary-participation-result';
    public const LOG_OBJECT_DICTIONARY_DISCIPLINE_REFERENCE = 'log-object-dictionary-discipline';
    public const LOG_OBJECT_DICTIONARY_CLASS_REFERENCE = 'log-object-dictionary-class';
    public const LOG_OBJECT_DICTIONARY_FIELD_REFERENCE = 'log-object-dictionary-field';
    public const LOG_OBJECT_DICTIONARY_COURSE_REFERENCE = 'log-object-dictionary-course';
    public const LOG_OBJECT_DICTIONARY_EVENT_LEVEL_REFERENCE = 'log-object-dictionary-event-level';
    public const LOG_OBJECT_DICTIONARY_ACADEMIC_DEGREE_REFERENCE = 'log-object-dictionary-academic-degree';
    public const LOG_OBJECT_DICTIONARY_ACADEMIC_TITLE_REFERENCE = 'log-object-dictionary-academic-title';
    public const LOG_OBJECT_DICTIONARY_EDUCATION_FORM_REFERENCE = 'log-object-dictionary-education-form';
    public const LOG_OBJECT_DICTIONARY_EDUCATION_LEVEL_REFERENCE = 'log-object-dictionary-education-level';
    public const LOG_OBJECT_DICTIONARY_HOLD_FORM_REFERENCE = 'log-object-dictionary-hold-form';
    public const LOG_OBJECT_DICTIONARY_GENERAL_EDUCATION_LEVEL_REFERENCE = 'log-object-dictionary-general-education-level';
    public const LOG_OBJECT_DICTIONARY_MINIMUM_AGE_REFERENCE = 'log-object-dictionary-minimum-age';
    public const LOG_OBJECT_DICTIONARY_PROFESSION_REFERENCE = 'log-object-dictionary-profession';
    public const LOG_OBJECT_DICTIONARY_REGION_REFERENCE = 'log-object-dictionary-region';
    public const LOG_OBJECT_DICTIONARY_TEACHER_CATEGORY_REFERENCE = 'log-object-dictionary-teacher-category';
    public const LOG_OBJECT_QUESTIONNAIRE_REFERENCE = 'log-object-questionnaire';
    public const LOG_OBJECT_USER_REFERENCE = 'log-object-user';

    public function load(ObjectManager $manager): void
    {
        $logCategoryCreate = new LogCategory();
        $logCategoryCreate->setTitle('create');
        $manager->persist($logCategoryCreate);

        $logCategoryUpdate = new LogCategory();
        $logCategoryUpdate->setTitle('update');
        $manager->persist($logCategoryUpdate);

        $logCategoryDelete = new LogCategory();
        $logCategoryDelete->setTitle('delete');
        $manager->persist($logCategoryDelete);

        $logCategoryView = new LogCategory();
        $logCategoryView->setTitle('view');
        $manager->persist($logCategoryView);

        $logCategoryPublish = new LogCategory();
        $logCategoryPublish->setTitle('publish');
        $manager->persist($logCategoryPublish);

        $logCategoryUnpublish = new LogCategory();
        $logCategoryUnpublish->setTitle('unpublish');
        $manager->persist($logCategoryUnpublish);

        $logCategoryArchive = new LogCategory();
        $logCategoryArchive->setTitle('archive');
        $manager->persist($logCategoryArchive);

        $logCategoryDraft = new LogCategory();
        $logCategoryDraft->setTitle('draft');
        $manager->persist($logCategoryDraft);

        $logCategorySearch = new LogCategory();
        $logCategorySearch->setTitle('search');
        $manager->persist($logCategorySearch);

        $logCategoryBlock = new LogCategory();
        $logCategoryBlock->setTitle('block');
        $manager->persist($logCategoryBlock);

        $logCategoryUnblock = new LogCategory();
        $logCategoryUnblock->setTitle('unblock');
        $manager->persist($logCategoryUnblock);

        $logCategoryReveal = new LogCategory();
        $logCategoryReveal->setTitle('reveal');
        $manager->persist($logCategoryReveal);

        $logCategoryHide = new LogCategory();
        $logCategoryHide->setTitle('hide');
        $manager->persist($logCategoryHide);

        $logCategoryStart = new LogCategory();
        $logCategoryStart->setTitle('start');
        $manager->persist($logCategoryStart);

        $logCategoryFinish = new LogCategory();
        $logCategoryFinish->setTitle('finish');
        $manager->persist($logCategoryFinish);

        $logCategoryPaused = new LogCategory();
        $logCategoryFinish->setTitle('paused');
        $manager->persist($logCategoryPaused);

        $logCategoryResumed = new LogCategory();
        $logCategoryFinish->setTitle('resumed');
        $manager->persist($logCategoryResumed);

        $logCategorySelfchecking = new LogCategory();
        $logCategorySelfchecking->setTitle('selfchecking');
        $manager->persist($logCategorySelfchecking);

        $logCategoryPassing = new LogCategory();
        $logCategoryPassing->setTitle('passing');
        $manager->persist($logCategoryPassing);

        $logCategoryLogin = new LogCategory();
        $logCategoryLogin->setTitle('login');
        $manager->persist($logCategoryLogin);

        $logCategoryLogout = new LogCategory();
        $logCategoryLogout->setTitle('logout');
        $manager->persist($logCategoryLogout);

        $logCategoryGet = new LogCategory();
        $logCategoryGet->setTitle('get');
        $manager->persist($logCategoryGet);

        $logObjectCalendar = new LogObject();
        $logObjectCalendar->setTitle('calendar/event');
        $manager->persist($logObjectCalendar);

        $logObjectLibrary = new LogObject();
        $logObjectLibrary->setTitle('material_library/material');
        $manager->persist($logObjectLibrary);

        $logObjectProgramCatalog = new LogObject();
        $logObjectProgramCatalog->setTitle('program_catalog/program');
        $manager->persist($logObjectProgramCatalog);

        $logObjectTraining = new LogObject();
        $logObjectTraining->setTitle('training/training');
        $manager->persist($logObjectTraining);

        $logObjectProgram = new LogObject();
        $logObjectProgram->setTitle('program/program');
        $manager->persist($logObjectProgram);

        $logObjectThematicCollection = new LogObject();
        $logObjectThematicCollection->setTitle('thematic_collection/selection');
        $manager->persist($logObjectThematicCollection);

        $logObjectSearch = new LogObject();
        $logObjectSearch->setTitle('search-engine/search');
        $manager->persist($logObjectSearch);

        $logObjectAttestation = new LogObject();
        $logObjectAttestation->setTitle('attestation/attestation');
        $manager->persist($logObjectAttestation);

        $logObjectPortfolio = new LogObject();
        $logObjectPortfolio->setTitle('portfolio/achievement');
        $manager->persist($logObjectPortfolio);

        $logObjectUserManagement = new LogObject();
        $logObjectUserManagement->setTitle('user_management/user');
        $manager->persist($logObjectUserManagement);

        $logObjectDictionaryParticipationType = new LogObject();
        $logObjectDictionaryParticipationType->setTitle('dictionary/participation_type');
        $manager->persist($logObjectDictionaryParticipationType);

        $logObjectDictionaryParticipationResult = new LogObject();
        $logObjectDictionaryParticipationResult->setTitle('dictionary/participation_result');
        $manager->persist($logObjectDictionaryParticipationResult);

        $logObjectDictionaryDiscipline = new LogObject();
        $logObjectDictionaryDiscipline->setTitle('dictionary/discipline');
        $manager->persist($logObjectDictionaryDiscipline);

        $logObjectDictionaryClass = new LogObject();
        $logObjectDictionaryClass->setTitle('dictionary/class');
        $manager->persist($logObjectDictionaryClass);

        $logObjectDictionaryField = new LogObject();
        $logObjectDictionaryField->setTitle('dictionary/field');
        $manager->persist($logObjectDictionaryField);

        $logObjectDictionaryCourse = new LogObject();
        $logObjectDictionaryCourse->setTitle('dictionary/course');
        $manager->persist($logObjectDictionaryCourse);

        $logObjectDictionaryEventLevel = new LogObject();
        $logObjectDictionaryEventLevel->setTitle('dictionary/event_level');
        $manager->persist($logObjectDictionaryEventLevel);

        $logObjectDictionaryAcademicDegree = new LogObject();
        $logObjectDictionaryAcademicDegree->setTitle('dictionary/academic_degree');
        $manager->persist($logObjectDictionaryAcademicDegree);

        $logObjectDictionaryAcademicTitle = new LogObject();
        $logObjectDictionaryAcademicTitle->setTitle('dictionary/academic_title');
        $manager->persist($logObjectDictionaryAcademicTitle);

        $logObjectDictionaryEducationForm = new LogObject();
        $logObjectDictionaryEducationForm->setTitle('dictionary/education_form');
        $manager->persist($logObjectDictionaryEducationForm);

        $logObjectDictionaryEducationLevel = new LogObject();
        $logObjectDictionaryEducationLevel->setTitle('dictionary/education_level');
        $manager->persist($logObjectDictionaryEducationLevel);

        $logObjectDictionaryHoldForm = new LogObject();
        $logObjectDictionaryHoldForm->setTitle('dictionary/hold_form');
        $manager->persist($logObjectDictionaryHoldForm);

        $logObjectDictionaryGeneralEducationLevel = new LogObject();
        $logObjectDictionaryGeneralEducationLevel->setTitle('dictionary/general_education_level');
        $manager->persist($logObjectDictionaryGeneralEducationLevel);

        $logObjectDictionaryMinimumAge = new LogObject();
        $logObjectDictionaryMinimumAge->setTitle('dictionary/minimum_age');
        $manager->persist($logObjectDictionaryMinimumAge);

        $logObjectDictionaryProfession = new LogObject();
        $logObjectDictionaryProfession->setTitle('dictionary/profession');
        $manager->persist($logObjectDictionaryProfession);

        $logObjectDictionaryRegion = new LogObject();
        $logObjectDictionaryRegion->setTitle('dictionary/region');
        $manager->persist($logObjectDictionaryRegion);

        $logObjectDictionaryTeacherCategory = new LogObject();
        $logObjectDictionaryTeacherCategory->setTitle('dictionary/teacher_category');
        $manager->persist($logObjectDictionaryTeacherCategory);

        $logObjectQuestionnaire = new LogObject();
        $logObjectQuestionnaire->setTitle('questionnaire/testing');
        $manager->persist($logObjectQuestionnaire);

        $logObjectUser = new LogObject();
        $logObjectUser->setTitle('user');
        $manager->persist($logObjectUser);

        $manager->flush();

        $this->addReference(self::LOG_CATEGORY_CREATE_REFERENCE, $logCategoryCreate);
        $this->addReference(self::LOG_CATEGORY_UPDATE_REFERENCE, $logCategoryUpdate);
        $this->addReference(self::LOG_CATEGORY_DELETE_REFERENCE, $logCategoryDelete);
        $this->addReference(self::LOG_CATEGORY_VIEW_REFERENCE, $logCategoryView);
        $this->addReference(self::LOG_CATEGORY_PUBLISH_REFERENCE, $logCategoryPublish);
        $this->addReference(self::LOG_CATEGORY_UNPUBLISH_REFERENCE, $logCategoryUnpublish);
        $this->addReference(self::LOG_CATEGORY_ARCHIVE_REFERENCE, $logCategoryArchive);
        $this->addReference(self::LOG_CATEGORY_DRAFT_REFERENCE, $logCategoryDraft);
        $this->addReference(self::LOG_CATEGORY_SEARCH_REFERENCE, $logCategorySearch);
        $this->addReference(self::LOG_CATEGORY_BLOCK_REFERENCE, $logCategoryBlock);
        $this->addReference(self::LOG_CATEGORY_UNBLOCK_REFERENCE, $logCategoryUnblock);
        $this->addReference(self::LOG_CATEGORY_REVEAL_REFERENCE, $logCategoryReveal);
        $this->addReference(self::LOG_CATEGORY_HIDE_REFERENCE, $logCategoryHide);
        $this->addReference(self::LOG_CATEGORY_START_REFERENCE, $logCategoryStart);
        $this->addReference(self::LOG_CATEGORY_FINISH_REFERENCE, $logCategoryFinish);
        $this->addReference(self::LOG_CATEGORY_PAUSED_REFERENCE, $logCategoryPaused);
        $this->addReference(self::LOG_CATEGORY_RESUMED_REFERENCE, $logCategoryResumed);
        $this->addReference(self::LOG_CATEGORY_SELFCHECKING_REFERENCE, $logCategorySelfchecking);
        $this->addReference(self::LOG_CATEGORY_PASSING_REFERENCE, $logCategoryPassing);
        $this->addReference(self::LOG_CATEGORY_LOGIN_REFERENCE, $logCategoryLogin);
        $this->addReference(self::LOG_CATEGORY_LOGOUT_REFERENCE, $logCategoryLogout);
        $this->addReference(self::LOG_CATEGORY_GET_REFERENCE, $logCategoryGet);

        $this->addReference(self::LOG_OBJECT_CALENDAR_REFERENCE, $logObjectCalendar);
        $this->addReference(self::LOG_OBJECT_LIBRARY_REFERENCE, $logObjectLibrary);
        $this->addReference(self::LOG_OBJECT_PROGRAM_CATALOG_REFERENCE, $logObjectProgramCatalog);
        $this->addReference(self::LOG_OBJECT_TRAINING_REFERENCE, $logObjectTraining);
        $this->addReference(self::LOG_OBJECT_PROGRAM_REFERENCE, $logObjectProgram);
        $this->addReference(self::LOG_OBJECT_THEMATIC_COLLECTION_REFERENCE, $logObjectThematicCollection);
        $this->addReference(self::LOG_OBJECT_SEARCH_REFERENCE, $logObjectSearch);
        $this->addReference(self::LOG_OBJECT_ATTESTATION_REFERENCE, $logObjectAttestation);
        $this->addReference(self::LOG_OBJECT_PORTFOLIO_REFERENCE, $logObjectPortfolio);
        $this->addReference(self::LOG_OBJECT_USER_MANAGEMENT_REFERENCE, $logObjectUserManagement);
        $this->addReference(self::LOG_OBJECT_DICTIONARY_PARTICIPATION_TYPE_REFERENCE, $logObjectDictionaryParticipationType);
        $this->addReference(self::LOG_OBJECT_DICTIONARY_PARTICIPATION_RESULT_REFERENCE, $logObjectDictionaryParticipationResult);
        $this->addReference(self::LOG_OBJECT_DICTIONARY_DISCIPLINE_REFERENCE, $logObjectDictionaryDiscipline);
        $this->addReference(self::LOG_OBJECT_DICTIONARY_CLASS_REFERENCE, $logObjectDictionaryClass);
        $this->addReference(self::LOG_OBJECT_DICTIONARY_FIELD_REFERENCE, $logObjectDictionaryField);
        $this->addReference(self::LOG_OBJECT_DICTIONARY_COURSE_REFERENCE, $logObjectDictionaryCourse);
        $this->addReference(self::LOG_OBJECT_DICTIONARY_EVENT_LEVEL_REFERENCE, $logObjectDictionaryEventLevel);
        $this->addReference(self::LOG_OBJECT_DICTIONARY_ACADEMIC_DEGREE_REFERENCE, $logObjectDictionaryAcademicDegree);
        $this->addReference(self::LOG_OBJECT_DICTIONARY_ACADEMIC_TITLE_REFERENCE, $logObjectDictionaryAcademicTitle);
        $this->addReference(self::LOG_OBJECT_DICTIONARY_EDUCATION_FORM_REFERENCE, $logObjectDictionaryEducationForm);
        $this->addReference(self::LOG_OBJECT_DICTIONARY_EDUCATION_LEVEL_REFERENCE, $logObjectDictionaryEducationLevel);
        $this->addReference(self::LOG_OBJECT_DICTIONARY_HOLD_FORM_REFERENCE, $logObjectDictionaryHoldForm);
        $this->addReference(self::LOG_OBJECT_DICTIONARY_GENERAL_EDUCATION_LEVEL_REFERENCE, $logObjectDictionaryGeneralEducationLevel);
        $this->addReference(self::LOG_OBJECT_DICTIONARY_MINIMUM_AGE_REFERENCE, $logObjectDictionaryMinimumAge);
        $this->addReference(self::LOG_OBJECT_DICTIONARY_PROFESSION_REFERENCE, $logObjectDictionaryProfession);
        $this->addReference(self::LOG_OBJECT_DICTIONARY_REGION_REFERENCE, $logObjectDictionaryRegion);
        $this->addReference(self::LOG_OBJECT_DICTIONARY_TEACHER_CATEGORY_REFERENCE, $logObjectDictionaryTeacherCategory);
        $this->addReference(self::LOG_OBJECT_QUESTIONNAIRE_REFERENCE, $logObjectQuestionnaire);
        $this->addReference(self::LOG_OBJECT_USER_REFERENCE, $logObjectUser);
    }
}
