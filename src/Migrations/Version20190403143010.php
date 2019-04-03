<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190403143010 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE elevation (id INT AUTO_INCREMENT NOT NULL, nb_poutres INT NOT NULL, longueur_poutre DOUBLE PRECISION NOT NULL, taille_poutre DOUBLE PRECISION NOT NULL, type_materiaux_mur VARCHAR(255) NOT NULL, hauteur_mur DOUBLE PRECISION NOT NULL, nombre_fenetre INT NOT NULL, type_fenetre VARCHAR(255) NOT NULL, type_linteaux VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE menuiserie (id INT AUTO_INCREMENT NOT NULL, dimension_cuivre VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE soubassement (id INT AUTO_INCREMENT NOT NULL, type_soubassement VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE toiture (id INT AUTO_INCREMENT NOT NULL, type_toit VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE fondation DROP metre_lineaire, DROP quantite_ferraillage');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE elevation');
        $this->addSql('DROP TABLE menuiserie');
        $this->addSql('DROP TABLE soubassement');
        $this->addSql('DROP TABLE toiture');
        $this->addSql('ALTER TABLE fondation ADD metre_lineaire DOUBLE PRECISION NOT NULL, ADD quantite_ferraillage DOUBLE PRECISION NOT NULL');
    }
}
