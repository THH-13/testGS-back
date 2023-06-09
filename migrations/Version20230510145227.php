<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230510145227 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Creation de la table groupe_musique' ;
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE groupe_musique (id INT AUTO_INCREMENT NOT NULL, nom_groupe VARCHAR(255) DEFAULT NULL, origine VARCHAR(255) DEFAULT NULL, ville VARCHAR(255) DEFAULT NULL, annee_debut DATE DEFAULT NULL, annee_separation DATE DEFAULT NULL, fondateurs VARCHAR(255) DEFAULT NULL,membres INT DEFAULT NULL, courant_musical VARCHAR(255) DEFAULT NULL, presentation VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE groupe_musique');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
