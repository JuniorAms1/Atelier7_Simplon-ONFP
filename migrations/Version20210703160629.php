<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210703160629 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE apprenant (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) DEFAULT NULL, prenom VARCHAR(255) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, adresse VARCHAR(255) DEFAULT NULL, niveau VARCHAR(255) DEFAULT NULL, attentes VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE evaluation (id INT AUTO_INCREMENT NOT NULL, apprenant_id INT NOT NULL, discipline VARCHAR(255) DEFAULT NULL, categorie VARCHAR(255) NOT NULL, note INT NOT NULL, INDEX IDX_1323A575C5697D6D (apprenant_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE evaluation ADD CONSTRAINT FK_1323A575C5697D6D FOREIGN KEY (apprenant_id) REFERENCES apprenant (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE evaluation DROP FOREIGN KEY FK_1323A575C5697D6D');
        $this->addSql('DROP TABLE apprenant');
        $this->addSql('DROP TABLE evaluation');
    }
}
