<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * This migration adds tables for callback, invoice, and messenger messages.
 * - The `callback` table stores signal and info data.
 * - The `invoice` table keeps track of invoice statuses and QR codes.
 * - The `messenger_messages` table stores message queues, timestamps, and other metadata.
 */
final class Version20240924171230 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Creates tables for callback, invoice, and messenger_messages with improved naming conventions for foreign keys and indices.';
    }

    public function up(Schema $schema): void
    {
        // Table for callback information
        $this->addSql('CREATE TABLE callback (
            id INT AUTO_INCREMENT NOT NULL, 
            `signal` VARCHAR(255) DEFAULT NULL, 
            info LONGTEXT DEFAULT NULL, 
            PRIMARY KEY(id)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');

        // Table for invoices
        $this->addSql('CREATE TABLE invoice (
            id INT AUTO_INCREMENT NOT NULL, 
            status VARCHAR(255) NOT NULL, 
            request_data LONGTEXT DEFAULT NULL, 
            response_data LONGTEXT DEFAULT NULL, 
            qr_code VARCHAR(255) DEFAULT NULL, 
            PRIMARY KEY(id)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');

        // Table for messenger messages with meaningful index names
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
        // Drop tables in reverse order
        $this->addSql('DROP TABLE messenger_messages');
        $this->addSql('DROP TABLE invoice');
        $this->addSql('DROP TABLE callback');
    }
}
