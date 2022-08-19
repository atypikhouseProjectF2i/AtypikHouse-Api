<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220819144218 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE accommodation_service_acco (accommodation_id INT NOT NULL, service_acco_id INT NOT NULL, INDEX IDX_2CA6F8308F3692CD (accommodation_id), INDEX IDX_2CA6F830D59E41AD (service_acco_id), PRIMARY KEY(accommodation_id, service_acco_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE accommodation_service_acco ADD CONSTRAINT FK_2CA6F8308F3692CD FOREIGN KEY (accommodation_id) REFERENCES accommodation (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE accommodation_service_acco ADD CONSTRAINT FK_2CA6F830D59E41AD FOREIGN KEY (service_acco_id) REFERENCES service_acco (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE accommodation_service_acco');
    }
}
