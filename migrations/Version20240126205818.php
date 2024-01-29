<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240126205818 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cv ADD ad VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE cv ADD soyad VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE cv ADD gmail VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE cv ADD telefon_no VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE cv ADD calisma_durumu VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE cv ADD tecrube VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE cv ADD staj_durumu VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE cv DROP ad');
        $this->addSql('ALTER TABLE cv DROP soyad');
        $this->addSql('ALTER TABLE cv DROP gmail');
        $this->addSql('ALTER TABLE cv DROP telefon_no');
        $this->addSql('ALTER TABLE cv DROP calisma_durumu');
        $this->addSql('ALTER TABLE cv DROP tecrube');
        $this->addSql('ALTER TABLE cv DROP staj_durumu');
    }
}
