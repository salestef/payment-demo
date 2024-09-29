<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20240924171230 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Creates tables for callback, invoice and messenger_messages.';
    }

    public function up(Schema $schema): void
    {
        // Prvo kreiramo tabelu invoices
        $this->addSql('CREATE TABLE invoice (
            id INT AUTO_INCREMENT NOT NULL, 
            status VARCHAR(255) NOT NULL, 
            request_data LONGTEXT DEFAULT NULL, 
            response_data LONGTEXT DEFAULT NULL, 
            qr_code VARCHAR(255) DEFAULT NULL, 
            amount DOUBLE PRECISION DEFAULT 0 NOT NULL,
            PRIMARY KEY(id)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');

        // Sada kreiramo tabelu callback koja zavisi od tabele invoice
        $this->addSql('CREATE TABLE callback (
            id INT AUTO_INCREMENT NOT NULL, 
            info LONGTEXT DEFAULT NULL, 
            invoice_id INT NOT NULL, 
            signature VARCHAR(255) NOT NULL, 
            raw_data LONGTEXT NOT NULL, 
            status VARCHAR(50) NOT NULL, 
            PRIMARY KEY(id)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');

        // Dodajemo strani ključ tek nakon što su obe tabele kreirane
        $this->addSql('ALTER TABLE callback ADD CONSTRAINT FK_callback_invoice_id FOREIGN KEY (invoice_id) REFERENCES invoice (id)');
        // Kreiramo indeks za kolonu invoice_id
        $this->addSql('CREATE INDEX IDX_callback_invoice_id ON callback (invoice_id)');

        // Kreiramo tabelu messenger_messages
        $this->addSql('CREATE TABLE messenger_messages (
            id BIGINT AUTO_INCREMENT NOT NULL, 
            body LONGTEXT NOT NULL, 
            headers LONGTEXT NOT NULL, 
            queue_name VARCHAR(190) NOT NULL, 
            created_at DATETIME NOT NULL, 
            available_at DATETIME NOT NULL, 
            delivered_at DATETIME DEFAULT NULL, 
            INDEX IDX_MESSENGER_QUEUE_NAME (queue_name), 
            INDEX IDX_MESSENGER_AVAILABLE_AT (available_at), 
            INDEX IDX_MESSENGER_DELIVERED_AT (delivered_at), 
            PRIMARY KEY(id)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // Uklanjamo strani ključ i indeks pre brisanja tabela
        $this->addSql('ALTER TABLE callback DROP FOREIGN KEY FK_callback_invoice_id');
        $this->addSql('DROP INDEX IDX_callback_invoice_id ON callback');

        // Brišemo tabele u obrnutom redosledu
        $this->addSql('DROP TABLE messenger_messages');
        $this->addSql('DROP TABLE callback');
        $this->addSql('DROP TABLE invoice');
    }
}
