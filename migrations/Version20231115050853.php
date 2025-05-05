<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231115050853 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE log_type ADD log_category_id INT NOT NULL');
        $this->addSql('ALTER TABLE log_type ADD log_source_id INT NOT NULL');
        $this->addSql('ALTER TABLE log_type ADD log_object_id INT NOT NULL');
        $this->addSql('ALTER TABLE log_type ADD CONSTRAINT FK_9DB0B95C4EFFE14A FOREIGN KEY (log_category_id) REFERENCES log_category (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE log_type ADD CONSTRAINT FK_9DB0B95C833E80EF FOREIGN KEY (log_source_id) REFERENCES log_source (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE log_type ADD CONSTRAINT FK_9DB0B95C352FCAA5 FOREIGN KEY (log_object_id) REFERENCES log_object (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_9DB0B95C4EFFE14A ON log_type (log_category_id)');
        $this->addSql('CREATE INDEX IDX_9DB0B95C833E80EF ON log_type (log_source_id)');
        $this->addSql('CREATE INDEX IDX_9DB0B95C352FCAA5 ON log_type (log_object_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE log_type DROP CONSTRAINT FK_9DB0B95C4EFFE14A');
        $this->addSql('ALTER TABLE log_type DROP CONSTRAINT FK_9DB0B95C833E80EF');
        $this->addSql('ALTER TABLE log_type DROP CONSTRAINT FK_9DB0B95C352FCAA5');
        $this->addSql('DROP INDEX IDX_9DB0B95C4EFFE14A');
        $this->addSql('DROP INDEX IDX_9DB0B95C833E80EF');
        $this->addSql('DROP INDEX IDX_9DB0B95C352FCAA5');
        $this->addSql('ALTER TABLE log_type DROP log_category_id');
        $this->addSql('ALTER TABLE log_type DROP log_source_id');
        $this->addSql('ALTER TABLE log_type DROP log_object_id');
    }
}
