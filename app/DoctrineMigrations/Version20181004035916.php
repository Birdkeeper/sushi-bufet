<?php declare(strict_types=1);

namespace Application\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181004035916 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE dish (id INT AUTO_INCREMENT NOT NULL, dish_category_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, composition VARCHAR(255) NOT NULL, price DOUBLE PRECISION NOT NULL, INDEX IDX_957D8CB8C057AE07 (dish_category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET UTF8 COLLATE UTF8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE dish_category (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET UTF8 COLLATE UTF8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE dish ADD CONSTRAINT FK_957D8CB8C057AE07 FOREIGN KEY (dish_category_id) REFERENCES dish_category (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE dish DROP FOREIGN KEY FK_957D8CB8C057AE07');
        $this->addSql('DROP TABLE dish');
        $this->addSql('DROP TABLE dish_category');
    }
}
