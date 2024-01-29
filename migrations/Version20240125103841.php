<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240125103841 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE cv_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE cv (id INT NOT NULL, dil VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, image_path VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE books_user DROP CONSTRAINT fk_ae1a76667dd8ac20');
        $this->addSql('ALTER TABLE books_user DROP CONSTRAINT fk_ae1a7666a76ed395');
        $this->addSql('DROP TABLE books_user');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE cv_id_seq CASCADE');
        $this->addSql('CREATE TABLE books_user (books_id INT NOT NULL, user_id INT NOT NULL, PRIMARY KEY(books_id, user_id))');
        $this->addSql('CREATE INDEX idx_ae1a7666a76ed395 ON books_user (user_id)');
        $this->addSql('CREATE INDEX idx_ae1a76667dd8ac20 ON books_user (books_id)');
        $this->addSql('ALTER TABLE books_user ADD CONSTRAINT fk_ae1a76667dd8ac20 FOREIGN KEY (books_id) REFERENCES books (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE books_user ADD CONSTRAINT fk_ae1a7666a76ed395 FOREIGN KEY (user_id) REFERENCES "user" (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('DROP TABLE cv');
    }
}
