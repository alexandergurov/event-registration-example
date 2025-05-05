<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240221055225 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('INSERT INTO log_type (id, title, description, log_category_id, log_object_id, subsystem_code, state) VALUES (nextval(\'log_type_id_seq\'), \'Снятие с публикации тематической подборки\', \'Снятие с публикации тематической подборки\', (SELECT id FROM log_category WHERE title = \'unpublish\'), (SELECT id FROM log_object WHERE title = \'thematic_collection/selection\'), \'thematic_collection\', \'SUCCESS\') ');
        $this->addSql('INSERT INTO log_type (id, title, description, log_category_id, log_object_id, subsystem_code, state) VALUES (nextval(\'log_type_id_seq\'), \'Ошибка снятия с публикации тематической подборки\', \'Ошибка снятия с публикации тематической подборки\', (SELECT id FROM log_category WHERE title = \'unpublish\'), (SELECT id FROM log_object WHERE title = \'thematic_collection/selection\'), \'thematic_collection\', \'FAILURE\')');

    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
    }
}
