<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190404121751 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE etude_sol ADD prix DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE menuiserie CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE prix CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE toiture CHANGE id id INT AUTO_INCREMENT NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE etude_sol DROP prix');
        $this->addSql('ALTER TABLE menuiserie CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE prix CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE toiture CHANGE id id INT NOT NULL');
    }
}
