<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200926210513 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE abonne (id INT AUTO_INCREMENT NOT NULL, adresse VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bon_medical (id INT AUTO_INCREMENT NOT NULL, entreprise VARCHAR(100) NOT NULL, num_bon VARCHAR(20) NOT NULL, nom_agent VARCHAR(50) NOT NULL, mat_agent VARCHAR(20) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE privee (id INT AUTO_INCREMENT NOT NULL, adresse VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_patient (id INT AUTO_INCREMENT NOT NULL, abonne_id INT DEFAULT NULL, privee_id INT DEFAULT NULL, INDEX IDX_32FBB81EC325A696 (abonne_id), INDEX IDX_32FBB81EFFA04552 (privee_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE type_patient ADD CONSTRAINT FK_32FBB81EC325A696 FOREIGN KEY (abonne_id) REFERENCES abonne (id)');
        $this->addSql('ALTER TABLE type_patient ADD CONSTRAINT FK_32FBB81EFFA04552 FOREIGN KEY (privee_id) REFERENCES privee (id)');
        $this->addSql('ALTER TABLE patient ADD type_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE patient ADD CONSTRAINT FK_1ADAD7EBC54C8C93 FOREIGN KEY (type_id) REFERENCES type_patient (id)');
        $this->addSql('CREATE INDEX IDX_1ADAD7EBC54C8C93 ON patient (type_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE type_patient DROP FOREIGN KEY FK_32FBB81EC325A696');
        $this->addSql('ALTER TABLE type_patient DROP FOREIGN KEY FK_32FBB81EFFA04552');
        $this->addSql('ALTER TABLE patient DROP FOREIGN KEY FK_1ADAD7EBC54C8C93');
        $this->addSql('DROP TABLE abonne');
        $this->addSql('DROP TABLE bon_medical');
        $this->addSql('DROP TABLE privee');
        $this->addSql('DROP TABLE type_patient');
        $this->addSql('DROP INDEX IDX_1ADAD7EBC54C8C93 ON patient');
        $this->addSql('ALTER TABLE patient DROP type_id');
    }
}
