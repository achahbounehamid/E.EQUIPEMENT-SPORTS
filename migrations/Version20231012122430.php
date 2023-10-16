<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231012122430 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE orders_details (id INT AUTO_INCREMENT NOT NULL, orders_id_id INT NOT NULL, products_id_id INT NOT NULL, quantity INT NOT NULL, INDEX IDX_835379F13EEE31F6 (orders_id_id), INDEX IDX_835379F19F1D6087 (products_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE orders_details ADD CONSTRAINT FK_835379F13EEE31F6 FOREIGN KEY (orders_id_id) REFERENCES orders (id)');
        $this->addSql('ALTER TABLE orders_details ADD CONSTRAINT FK_835379F19F1D6087 FOREIGN KEY (products_id_id) REFERENCES products (id)');
        $this->addSql('ALTER TABLE orders ADD CONSTRAINT FK_E52FFDEE67B3B43D FOREIGN KEY (users_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE products ADD creat_at DATE NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE orders_details DROP FOREIGN KEY FK_835379F13EEE31F6');
        $this->addSql('ALTER TABLE orders_details DROP FOREIGN KEY FK_835379F19F1D6087');
        $this->addSql('DROP TABLE orders_details');
        $this->addSql('ALTER TABLE orders DROP FOREIGN KEY FK_E52FFDEE67B3B43D');
        $this->addSql('ALTER TABLE products DROP creat_at');
    }
}
