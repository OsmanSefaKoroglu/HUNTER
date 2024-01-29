<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240129125612 extends AbstractMigration
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
        $this->addSql('ALTER TABLE cv ADD telno INT NOT NULL');
        $this->addSql('ALTER TABLE cv ADD tecrube INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE cv DROP ad');
        $this->addSql('ALTER TABLE cv DROP soyad');
        $this->addSql('ALTER TABLE cv DROP gmail');
        $this->addSql('ALTER TABLE cv DROP telno');
        $this->addSql('ALTER TABLE cv DROP tecrube');
    }
}
