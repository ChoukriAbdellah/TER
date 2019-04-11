<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190411115111 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE second_oeuvre ADD id_enduit_facade INT DEFAULT NULL, ADD id_isolation INT DEFAULT NULL, ADD id_revetement INT DEFAULT NULL, ADD id_cloisons INT DEFAULT NULL, ADD id_evacuation INT DEFAULT NULL, ADD id_menuiseries_int INT DEFAULT NULL, ADD id_escaliers INT DEFAULT NULL, ADD id_plomberie INT DEFAULT NULL, ADD id_electricite INT DEFAULT NULL, ADD id_ventilation INT DEFAULT NULL, ADD id_climatisation INT DEFAULT NULL, ADD id_domotique INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE second_oeuvre DROP id_enduit_facade, DROP id_isolation, DROP id_revetement, DROP id_cloisons, DROP id_evacuation, DROP id_menuiseries_int, DROP id_escaliers, DROP id_plomberie, DROP id_electricite, DROP id_ventilation, DROP id_climatisation, DROP id_domotique');
    }
}
