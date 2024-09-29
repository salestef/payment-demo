# payment-demo

Payment demo

# docker environment

docker-compose up --build

# command for entering docker php container

docker-compose exec -it php bash

# command for entering docker database(mysql) container

docker-compose exec -it database mysql -u root -p
password: secret

# Start project

1. Setup docker environment (php with symfony, nginx, database(mysql) containers).
    - Command:
      docker-compose up --build
      or just (if it's already built)
      docker-compose up
2. Delete existing database if there is one (inside php docker container)
    - Command:
      bin/console doctrine:database:drop --force
3. Create database payment_db (inside database docker container)
   note* you can also create test database see bellow in test environment section
    - Command:
      CREATE DATABASE payment_db;
4. Run Migrations (inside php docker container)
    - Command:
      bin/console doctrine:migrations:migrate

# Test environment

1. Create Database for test env (inside database docker container)
    - Command:
      CREATE DATABASE payment_db_test;
2. Run Migrations for test env (inside php docker container)
    - Command:
      bin/console doctrine:migrations:migrate --env=test
3. Run tests (inside php docker container)
    - Command:
      bin/phpunit tests

# Example of curl request for Callback Action (inside php docker container)

- Command:
  curl -H 'Content-Type: application/json' -H  'X-signature:
  {signatureNeedsToBeValidUseSignatureService}' -d '{"merchant_order_id":"{invoiceId}","amount":"{invoiceAmount}","
  currency":"USD","status":"
  SUCCESSFUL","timestamp":1726671599}' 'http://nginx/callback'

# Project Description

- Invoice Controller has 2 route:
    1. Form for Invoice
    2. Logic for Create Invoice action - Uses services from /src/Service/Payment/Invoice/ to create invoice, simulate
       request to payment provider and mock responses, handles error responses and return success view if payment
       provider response is success 201.
- Callback controller has one route:
    1. /callback is API route - Uses services from /src/Service/Payment/Callback/ to handle callback request from
       payment provider, change invoice status etc...
- /admin uses Sonata Symfony bundle to create CRUD functionalities and view for Invoice and Callback entities.
  Classes related to Sonata Admin are at src/Admin.
- Payment demo project has 2 entities (Invoice and Callback) (We could also add User, but it was not part of
  requirements)
- Tests we have 2 phpunit test Classes one for each action (CreateInvoice and Callback):
    1. CreateInvoiceActionTest - tests for each case (3 cases) of different responses from provider that are provided in
       docs by using different mock class (Success, InvalidSignature and AmountRequired)
    2. CallbackActionTest - mocks signature and error status to test 3 cases of Callback request (Success, Invalid
       Signature and Error status)

* If You have some questions regarding the project feel free to contact me! Thank You!