<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190426152650 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE preparation_et_acces CHANGE nb_sapins nb_sapins INT DEFAULT NULL, CHANGE nb_bouleaux nb_bouleaux INT DEFAULT NULL, CHANGE nb_chenes nb_chenes INT DEFAULT NULL, CHANGE nb_erables nb_erables INT DEFAULT NULL, CHANGE nb_frenes nb_frenes INT DEFAULT NULL, CHANGE nb_noyers nb_noyers INT DEFAULT NULL, CHANGE nb_autres nb_autres INT DEFAULT NULL, CHANGE taille_pins taille_pins DOUBLE PRECISION DEFAULT NULL, CHANGE taille_sapins taille_sapins DOUBLE PRECISION DEFAULT NULL, CHANGE taille_bouleaux taille_bouleaux DOUBLE PRECISION DEFAULT NULL, CHANGE taille_chenes taille_chenes DOUBLE PRECISION DEFAULT NULL, CHANGE taille_erables taille_erables DOUBLE PRECISION DEFAULT NULL, CHANGE taille_frenes taille_frenes DOUBLE PRECISION DEFAULT NULL, CHANGE taille_noyers taille_noyers DOUBLE PRECISION DEFAULT NULL, CHANGE taille_autres taille_autres DOUBLE PRECISION DEFAULT NULL, CHANGE position_terrain position_terrain VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE preparation_et_acces CHANGE nb_sapins nb_sapins INT NOT NULL, CHANGE nb_bouleaux nb_bouleaux INT NOT NULL, CHANGE nb_chenes nb_chenes INT NOT NULL, CHANGE nb_erables nb_erables INT NOT NULL, CHANGE nb_frenes nb_frenes INT NOT NULL, CHANGE nb_noyers nb_noyers INT NOT NULL, CHANGE nb_autres nb_autres INT NOT NULL, CHANGE taille_pins taille_pins DOUBLE PRECISION NOT NULL, CHANGE taille_sapins taille_sapins DOUBLE PRECISION NOT NULL, CHANGE taille_bouleaux taille_bouleaux DOUBLE PRECISION NOT NULL, CHANGE taille_chenes taille_chenes DOUBLE PRECISION NOT NULL, CHANGE taille_erables taille_erables DOUBLE PRECISION NOT NULL, CHANGE taille_frenes taille_frenes DOUBLE PRECISION NOT NULL, CHANGE taille_noyers taille_noyers DOUBLE PRECISION NOT NULL, CHANGE taille_autres taille_autres DOUBLE PRECISION NOT NULL, CHANGE position_terrain position_terrain VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci');
    }
}
