<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190325212809 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE second_oeuvre (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE projet (id INT AUTO_INCREMENT NOT NULL, id_proprio INT NOT NULL, id_gros_oeuvre INT NOT NULL, id_second_oeuvre INT NOT NULL, nom VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE gros_oeuvre (id INT AUTO_INCREMENT NOT NULL, id_etude_sol INT DEFAULT NULL, id_prep_terrain INT DEFAULT NULL, id_excavation INT DEFAULT NULL, id_fondations INT DEFAULT NULL, id_soubassement INT DEFAULT NULL, id_vrd INT DEFAULT NULL, id_plancher INT DEFAULT NULL, id_elevation INT DEFAULT NULL, id_charpente INT DEFAULT NULL, id_toiture INT DEFAULT NULL, id_menuiseries_ext INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE second_oeuvre');
        $this->addSql('DROP TABLE projet');
        $this->addSql('DROP TABLE gros_oeuvre');
    }
}
