

## Configration internet-subscription

You have a list of internet subscription products in your db, each product can have
many properties like upload_speed, download_speed, technology (fiber/dialup),
static_ip (yes/no) etc.

## Technology
	
* Laravel 5.5
* MySQL
* Bootstrap


## Installation

Execute composer command.

    add database name,Db user and Db password in .inv
	composer install
	php artisan migrate
    php artisan db:seed

	



Execute serv command.


	php artisan serv