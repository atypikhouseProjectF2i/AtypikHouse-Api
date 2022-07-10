<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220710083604 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE accommodation ADD region_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE accommodation ADD CONSTRAINT FK_2D38541298260155 FOREIGN KEY (region_id) REFERENCES region (id)');
        $this->addSql('CREATE INDEX IDX_2D38541298260155 ON accommodation (region_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE accommodation DROP FOREIGN KEY FK_2D38541298260155');
        $this->addSql('DROP INDEX IDX_2D38541298260155 ON accommodation');
        $this->addSql('ALTER TABLE accommodation DROP region_id');
    }
}
