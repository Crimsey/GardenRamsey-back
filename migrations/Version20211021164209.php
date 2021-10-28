<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211021164209 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE plant (plant_id INT UNSIGNED AUTO_INCREMENT NOT NULL, plant_name VARCHAR(30) NOT NULL, plant_type VARCHAR(60) NOT NULL, plant_note VARCHAR(250) DEFAULT NULL, date_planting VARCHAR(10) NOT NULL, plant_picture VARCHAR(255) DEFAULT NULL, plant_insolation INT DEFAULT NULL, soil_humidity VARCHAR(10) DEFAULT NULL, air_humidity INT NOT NULL, plant_nutrient INT NOT NULL, plant_is_poison TINYINT(1) NOT NULL, PRIMARY KEY(plant_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE plant');
    }
}
