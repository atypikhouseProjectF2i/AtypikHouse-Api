<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220819141438 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE service_accommodation (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE service_accommodation_accommodation (service_accommodation_id INT NOT NULL, accommodation_id INT NOT NULL, INDEX IDX_65DE984F2873B5DC (service_accommodation_id), INDEX IDX_65DE984F8F3692CD (accommodation_id), PRIMARY KEY(service_accommodation_id, accommodation_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE service_accommodation_accommodation ADD CONSTRAINT FK_65DE984F2873B5DC FOREIGN KEY (service_accommodation_id) REFERENCES service_accommodation (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE service_accommodation_accommodation ADD CONSTRAINT FK_65DE984F8F3692CD FOREIGN KEY (accommodation_id) REFERENCES accommodation (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE service_accommodation_accommodation DROP FOREIGN KEY FK_65DE984F2873B5DC');
        $this->addSql('DROP TABLE service_accommodation');
        $this->addSql('DROP TABLE service_accommodation_accommodation');
    }
}
