<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231115043740 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE log_type DROP log_category_id');
        $this->addSql('ALTER TABLE log_type DROP log_object_id');
        $this->addSql('ALTER TABLE log_type DROP log_source_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE log_type ADD log_category_id INT NOT NULL');
        $this->addSql('ALTER TABLE log_type ADD log_object_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE log_type ADD log_source_id INT NOT NULL');
    }
}
