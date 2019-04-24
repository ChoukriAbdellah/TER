<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190422201011 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE cloison ADD cloisons_amovibles DOUBLE PRECISION DEFAULT NULL, ADD cloisons_seches DOUBLE PRECISION DEFAULT NULL, ADD cloisons_pieces_humides DOUBLE PRECISION DEFAULT NULL, ADD cloisons_verre DOUBLE PRECISION DEFAULT NULL, ADD cloisons_japonaises DOUBLE PRECISION DEFAULT NULL, ADD claustra_interieur DOUBLE PRECISION DEFAULT NULL, ADD cloisons_vitrees_style_atelier DOUBLE PRECISION DEFAULT NULL, ADD cloisons_vegetales DOUBLE PRECISION DEFAULT NULL, DROP type_cloisons, DROP surface_totale');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE cloison ADD type_cloisons VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD surface_totale DOUBLE PRECISION NOT NULL, DROP cloisons_amovibles, DROP cloisons_seches, DROP cloisons_pieces_humides, DROP cloisons_verre, DROP cloisons_japonaises, DROP claustra_interieur, DROP cloisons_vitrees_style_atelier, DROP cloisons_vegetales');
    }
}
