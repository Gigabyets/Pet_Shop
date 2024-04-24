# Pet Shop
### This project is a Laravel application to manage a pet shop's inventory, customers, and orders.
#### To install Laravel on Windows, follow these detailed steps:
1. [Install XAMPP](https://www.apachefriends.org/download.html)
2. [Install Composer](https://getcomposer.org/doc/00-intro.md)
3. Verify Composer Installation
4. Install Laravel Using Composer
5. Verify Laravel Installation
6. Start The Server
7. Run The Project In Your Browser
   
_Table of contents_

* Installation
* Configuration
* Usage
* Contributing
* License
## Installation
1. ### Clone the repository:
```bash
git clone https://github.com/Gigabyets/Pet_Shop.git
```
2. ### Install dependencies:
 ```bash
composer install
```
3. ### Copy the environment configuration:
 ```bash
cp .env.example .env
```
Update the .env file with your database credentials and any other configuration settings, such as email settings for order notifications and Create the database.

4. ### Migrate the database:
 ```bash
php artisan migrate
```
## Configuration
Review and update the .env file for database credentials, mail configuration, and other settings.

## Usage
1. ### Start development server:
 ```bash
php artisan serve
```
2. ### Access the application in your browser:
   By default, the development server will be running on http://localhost:8000. You might need to log in to the administration panel using a predefined account (credentials to be set up in the users table or through a seeder).

  # This project is intended to serve as an example for future development and use. Created by Gigabyets.
