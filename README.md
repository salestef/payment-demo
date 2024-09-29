# payment-demo

Payment demo

# docker environment

docker-compose up --build

# command for entering docker php container

docker-compose exec -it php bash

# command for entering docker database(mysql) container

- docker-compose exec -it database mysql -u root -p
- password: secret

# Start project

1. Setup docker environment (php with symfony, nginx, database(mysql) containers).
    - docker-compose up --build
    - or just (if it's already built) - docker-compose up
2. Delete existing database if there is one (optional)(inside php docker container)
    - bin/console doctrine:database:drop --force
3. Create database payment_db (inside database docker container)
   note* you can also create test database see bellow in test environment section
    - CREATE DATABASE payment_db;
4. Run Migrations (inside php docker container)
    - bin/console doctrine:migrations:migrate

# Test environment

1. Delete existing test database if there is one (optional)(inside php docker container)
    - bin/console doctrine:database:drop --force --env=test
2. Create Database for test env (inside database docker container)
    - CREATE DATABASE payment_db_test;
3. Run Migrations for test env (inside php docker container)
    - bin/console doctrine:migrations:migrate --env=test
4. Run tests (inside php docker container)
    - bin/phpunit tests

# Generate CURL request for Callback action (for TEST purposes only)

- NOTE!!! Use route /callback/generate-curl/invoice/{invoiceId} to generate CURL /callback request. This is used for
  TEST purposes only and to make testing of Callback action (simulation of Payment provider request) easier.
    1. Go on browser on /callback/generate-curl/invoice/{invoiceId} route and COPY valid CURL Callback request
    2. Run generated CURL request inside php docker container. Example:
        * curl -H 'Content-Type: application/json' -H 'X-signature:
          MWI4ZWU3Yzg0NGFiZjk5NmNlNTkyOWQxN2QzZTc3NWRhODdkZWI3ZTVmMzQ0YzUyOGIzZDhjOGMzNWQ0MDE5MA==' -d '{"
          merchant_order_id":"10","amount":"340","currency":"USD","status":"SUCCESSFUL","timestamp":
          1727627438}' 'http://nginx/callback'

# Project Description

1. Invoice Controller has 2 routes:
    - Form for Invoice default route "/"
    - Logic for Create Invoice action "/invoice" - Uses services from /src/Service/Payment/Invoice/ set DTO, to create
      invoice,
      simulate
      request to payment provider and mock responses, handles error responses and return success view if payment
      provider response is success 201. Mock is set by default on success response in services.yaml.
2. Callback controller has one route:
    - /callback is API route - Uses services from /src/Service/Payment/Callback/ to handle callback request from
      payment provider, DTO, change invoice status etc...
3. /admin uses Sonata Symfony bundle to create CRUD functionalities and view for Invoice and Callback entities.
   Classes related to Sonata Admin are at src/Admin.
4. Payment demo project has 2 entities (Invoice and Callback) (We could also add User, but it was not part of
   requirements)
5. Tests we have 2 phpunit test Classes one for each action (CreateInvoice and Callback):
    - CreateInvoiceActionTest - tests for each case (3 cases) of different responses from provider that are provided in
      docs by using different mock class (Success, InvalidSignature and AmountRequired)
    - CallbackActionTest - mocks signature and error status to test 3 cases of Callback request (Success, Invalid
      Signature and Error status)

* If You have some questions regarding the project feel free to contact me! Thank You!