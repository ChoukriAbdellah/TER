<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190419135946 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE cloison (id INT AUTO_INCREMENT NOT NULL, type_cloisons VARCHAR(255) NOT NULL, surface_totale DOUBLE PRECISION NOT NULL, prix DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE domotique (id INT AUTO_INCREMENT NOT NULL, regularisation_chauffage VARCHAR(255) DEFAULT NULL, eclairage_auto VARCHAR(255) DEFAULT NULL, ouverture_fermeture_auto VARCHAR(255) DEFAULT NULL, autonomie_eau VARCHAR(255) DEFAULT NULL, prix DOUBLE PRECISION NOT NULL, detecteur_et_alarme VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE climatisation (id INT AUTO_INCREMENT NOT NULL, type_climatisation VARCHAR(255) NOT NULL, prix DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ventilation (id INT AUTO_INCREMENT NOT NULL, type_ventilation VARCHAR(255) NOT NULL, surface_chambre_salon INT NOT NULL, surface_cuisine_wc INT NOT NULL, prix DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user ADD password_requested_at DATETIME DEFAULT NULL, ADD token VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE menuiserie CHANGE dimensions_bois_rouge dimensions_bois_rouge INT NOT NULL, CHANGE dimensions_bois_hetre dimensions_bois_hetre INT NOT NULL, CHANGE dimensions_aluminium dimensions_aluminium INT NOT NULL, CHANGE prix prix INT NOT NULL');
        $this->addSql('ALTER TABLE toiture CHANGE prix prix INT NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE cloison');
        $this->addSql('DROP TABLE domotique');
        $this->addSql('DROP TABLE climatisation');
        $this->addSql('DROP TABLE ventilation');
        $this->addSql('ALTER TABLE menuiserie CHANGE dimensions_bois_rouge dimensions_bois_rouge INT DEFAULT NULL, CHANGE dimensions_bois_hetre dimensions_bois_hetre INT DEFAULT NULL, CHANGE dimensions_aluminium dimensions_aluminium INT DEFAULT NULL, CHANGE prix prix DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE toiture CHANGE prix prix DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE user DROP password_requested_at, DROP token');
    }
}
