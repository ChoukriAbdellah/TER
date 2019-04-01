<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190401205752 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE preparation_et_acces (id INT AUTO_INCREMENT NOT NULL, nb_pins INT NOT NULL, nb_sapins INT NOT NULL, nb_bouleaux INT NOT NULL, nb_chenes INT NOT NULL, nb_erables INT NOT NULL, nb_frenes INT NOT NULL, nb_noyers INT NOT NULL, nb_autres INT NOT NULL, taille_pins DOUBLE PRECISION NOT NULL, taille_sapins DOUBLE PRECISION NOT NULL, taille_bouleaux DOUBLE PRECISION NOT NULL, taille_chenes DOUBLE PRECISION NOT NULL, taille_erables DOUBLE PRECISION NOT NULL, taille_frenes DOUBLE PRECISION NOT NULL, taille_noyers DOUBLE PRECISION NOT NULL, taille_autres DOUBLE PRECISION NOT NULL, position_terrain VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE excavation (id INT AUTO_INCREMENT NOT NULL, type_terrassement VARCHAR(255) DEFAULT NULL, materiel_utilise VARCHAR(255) DEFAULT NULL, cout_sol_plan DOUBLE PRECISION DEFAULT NULL, murs_peripherique DOUBLE PRECISION DEFAULT NULL, murs_refont DOUBLE PRECISION DEFAULT NULL, profondeur_fouille DOUBLE PRECISION DEFAULT NULL, largeur_fouille DOUBLE PRECISION DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE plancher (id INT AUTO_INCREMENT NOT NULL, plancher_vs DOUBLE PRECISION NOT NULL, plancher_etage DOUBLE PRECISION NOT NULL, plancher_terrasse DOUBLE PRECISION NOT NULL, longueur_entrevous DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE elevation (id INT AUTO_INCREMENT NOT NULL, nb_poutres INT NOT NULL, longueur_poutre DOUBLE PRECISION NOT NULL, taille_poutre DOUBLE PRECISION NOT NULL, type_materiaux_mur VARCHAR(255) NOT NULL, hauteur_mur DOUBLE PRECISION NOT NULL, nombre_fenetre INT NOT NULL, type_fenetre VARCHAR(255) NOT NULL, type_linteaux VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE soubassement (id INT AUTO_INCREMENT NOT NULL, type_soubassement VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vrd (id INT AUTO_INCREMENT NOT NULL, distance_eau_potable DOUBLE PRECISION DEFAULT NULL, pompe_relevage TINYINT(1) DEFAULT NULL, fosse_septique TINYINT(1) DEFAULT NULL, micro_station TINYINT(1) DEFAULT NULL, etude_hydrogeologique TINYINT(1) DEFAULT NULL, distance_electricite DOUBLE PRECISION NOT NULL, distance_telephonique DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fondation (id INT AUTO_INCREMENT NOT NULL, metre_lineaire DOUBLE PRECISION NOT NULL, sismicite TINYINT(1) NOT NULL, quantite_ferraillage DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE preparation_et_acces');
        $this->addSql('DROP TABLE excavation');
        $this->addSql('DROP TABLE plancher');
        $this->addSql('DROP TABLE elevation');
        $this->addSql('DROP TABLE soubassement');
        $this->addSql('DROP TABLE vrd');
        $this->addSql('DROP TABLE fondation');
    }
}
