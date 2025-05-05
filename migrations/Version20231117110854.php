<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231117110854 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE log_type DROP CONSTRAINT fk_9db0b95c833e80ef');
        $this->addSql('DROP SEQUENCE log_source_id_seq CASCADE');
        $this->addSql('DROP TABLE log_source');
        $this->addSql('DROP INDEX idx_9db0b95c833e80ef');
        $this->addSql('ALTER TABLE log_type DROP log_source_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('CREATE SEQUENCE log_source_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE log_source (id INT NOT NULL, title VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE log_type ADD log_source_id INT NOT NULL');
        $this->addSql('ALTER TABLE log_type ADD CONSTRAINT fk_9db0b95c833e80ef FOREIGN KEY (log_source_id) REFERENCES log_source (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX idx_9db0b95c833e80ef ON log_type (log_source_id)');
    }
}
