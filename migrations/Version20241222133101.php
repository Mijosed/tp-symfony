<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20241222133101 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE menu (id INT AUTO_INCREMENT NOT NULL, restaurant_id INT NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, price INT NOT NULL, is_available TINYINT(1) NOT NULL, INDEX IDX_7D053A93B1E7706E (restaurant_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation (id INT AUTO_INCREMENT NOT NULL, dining_table_id INT NOT NULL, customer_name VARCHAR(255) NOT NULL, customer_phone VARCHAR(15) NOT NULL, reservation_date DATETIME NOT NULL, numberof_guests INT NOT NULL, INDEX IDX_42C84955695B08DC (dining_table_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE restaurant (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, adress VARCHAR(255) NOT NULL, city VARCHAR(255) NOT NULL, phone VARCHAR(15) NOT NULL, email VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `table` (id INT AUTO_INCREMENT NOT NULL, restaurant_id INT NOT NULL, number INT NOT NULL, seats INT NOT NULL, is_available TINYINT(1) NOT NULL, INDEX IDX_F6298F46B1E7706E (restaurant_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE menu ADD CONSTRAINT FK_7D053A93B1E7706E FOREIGN KEY (restaurant_id) REFERENCES restaurant (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955695B08DC FOREIGN KEY (dining_table_id) REFERENCES `table` (id)');
        $this->addSql('ALTER TABLE `table` ADD CONSTRAINT FK_F6298F46B1E7706E FOREIGN KEY (restaurant_id) REFERENCES restaurant (id)');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE menu DROP FOREIGN KEY FK_7D053A93B1E7706E');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955695B08DC');
        $this->addSql('ALTER TABLE `table` DROP FOREIGN KEY FK_F6298F46B1E7706E');
        $this->addSql('DROP TABLE menu');
        $this->addSql('DROP TABLE reservation');
        $this->addSql('DROP TABLE restaurant');
        $this->addSql('DROP TABLE `table`');
    }
}
