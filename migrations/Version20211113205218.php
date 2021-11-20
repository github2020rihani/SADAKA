<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211113205218 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) DEFAULT NULL, created_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE facture_produit');
        $this->addSql('DROP TABLE produit');
        $this->addSql('DROP TABLE produits_vendus');
        $this->addSql('DROP TABLE vente');
        $this->addSql('ALTER TABLE famille ADD etat_f VARCHAR(255) NOT NULL, ADD verif_f VARCHAR(255) NOT NULL, ADD remarque VARCHAR(50) NOT NULL, ADD date_v VARCHAR(50) NOT NULL, DROP cp_f, CHANGE adresse_f pays VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE news ADD event_name VARCHAR(20) NOT NULL, ADD event_dateF VARCHAR(20) NOT NULL, ADD event_image VARCHAR(300) DEFAULT \'NULL\', ADD event_participation TINYINT(1) NOT NULL, CHANGE event_content event_content VARCHAR(500) NOT NULL, CHANGE event_organiser event_organiser VARCHAR(20) DEFAULT \'\'\'Mohammed\'\'\' NOT NULL');
        $this->addSql('ALTER TABLE service MODIFY id_svc INT NOT NULL');
        $this->addSql('ALTER TABLE service DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE service ADD type_id INT DEFAULT NULL, ADD name VARCHAR(255) DEFAULT NULL, ADD created_at DATETIME DEFAULT NULL, ADD status TINYINT(1) DEFAULT NULL, DROP intv_dispo, DROP type, CHANGE description description LONGTEXT DEFAULT NULL, CHANGE num_vert num_vert VARCHAR(255) DEFAULT NULL, CHANGE zone_dispo zone_dispo VARCHAR(255) DEFAULT NULL, CHANGE id_svc id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE service ADD CONSTRAINT FK_E19D9AD2C54C8C93 FOREIGN KEY (type_id) REFERENCES type (id)');
        $this->addSql('CREATE INDEX IDX_E19D9AD2C54C8C93 ON service (type_id)');
        $this->addSql('ALTER TABLE service ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE utilisateur ADD id_u INT AUTO_INCREMENT NOT NULL, ADD pays_u VARCHAR(255) NOT NULL, ADD gouvernorat VARCHAR(255) NOT NULL, ADD ville VARCHAR(255) NOT NULL, ADD profession_u VARCHAR(255) NOT NULL, CHANGE username username VARCHAR(255) NOT NULL, DROP PRIMARY KEY, ADD PRIMARY KEY (id_u)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE service DROP FOREIGN KEY FK_E19D9AD2C54C8C93');
        $this->addSql('CREATE TABLE facture_produit (id_fac INT AUTO_INCREMENT NOT NULL, date_fac VARCHAR(10) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, PRIMARY KEY(id_fac)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE produit (ref_produit INT AUTO_INCREMENT NOT NULL, nom_produit VARCHAR(20) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, prix_produit DOUBLE PRECISION NOT NULL, date_expiration VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, quantite_produit INT NOT NULL, categorie VARCHAR(20) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, PRIMARY KEY(ref_produit)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE produits_vendus (id_v INT AUTO_INCREMENT NOT NULL, date_v VARCHAR(10) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, PRIMARY KEY(id_v)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE vente (id_produit INT AUTO_INCREMENT NOT NULL, prix_produit DOUBLE PRECISION NOT NULL, date_expiration VARCHAR(10) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, quantite_produit INT NOT NULL, categorie_produit VARCHAR(5) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, PRIMARY KEY(id_produit)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE type');
        $this->addSql('ALTER TABLE famille ADD adresse_f VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, ADD cp_f INT NOT NULL, DROP pays, DROP etat_f, DROP verif_f, DROP remarque, DROP date_v');
        $this->addSql('ALTER TABLE news DROP event_name, DROP event_dateF, DROP event_image, DROP event_participation, CHANGE event_content event_content VARCHAR(10) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE event_organiser event_organiser VARCHAR(20) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE service MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX IDX_E19D9AD2C54C8C93 ON service');
        $this->addSql('ALTER TABLE service DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE service ADD intv_dispo VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, ADD type VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, DROP type_id, DROP name, DROP created_at, DROP status, CHANGE description description VARCHAR(20) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE num_vert num_vert VARCHAR(10) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE zone_dispo zone_dispo VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE id id_svc INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE service ADD PRIMARY KEY (id_svc)');
        $this->addSql('ALTER TABLE utilisateur MODIFY id_u INT NOT NULL');
        $this->addSql('ALTER TABLE utilisateur DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE utilisateur DROP id_u, DROP pays_u, DROP gouvernorat, DROP ville, DROP profession_u, CHANGE username username VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE utilisateur ADD PRIMARY KEY (username)');
    }
}
