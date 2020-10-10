<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200926212614 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE abonne ADD bon_medical_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE abonne ADD CONSTRAINT FK_76328BF050E3010 FOREIGN KEY (bon_medical_id) REFERENCES bon_medical (id)');
        $this->addSql('CREATE INDEX IDX_76328BF050E3010 ON abonne (bon_medical_id)');
        $this->addSql('ALTER TABLE patient CHANGE num_fiche num_fiche VARCHAR(50) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE abonne DROP FOREIGN KEY FK_76328BF050E3010');
        $this->addSql('DROP INDEX IDX_76328BF050E3010 ON abonne');
        $this->addSql('ALTER TABLE abonne DROP bon_medical_id');
        $this->addSql('ALTER TABLE patient CHANGE num_fiche num_fiche INT NOT NULL');
    }
}
