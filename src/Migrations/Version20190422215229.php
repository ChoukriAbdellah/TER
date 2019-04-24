<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190422215229 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE menuiseries_int (id INT AUTO_INCREMENT NOT NULL, portes_pleines INT NOT NULL, portes_vitrees INT NOT NULL, portes_battantes INT NOT NULL, portes_coulissantes INT NOT NULL, portes_placard_pliantes INT NOT NULL, portes_placard_battantes INT NOT NULL, portes_placard_coulissantes INT NOT NULL, materieau_rampes VARCHAR(255) NOT NULL, taille_rampes DOUBLE PRECISION NOT NULL, materieau_balustrades VARCHAR(255) NOT NULL, taille_balustrades DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE menuiseries_int');
    }
}
