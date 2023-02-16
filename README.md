# How To Set Up Project
* Clone the repository from https://github.com/JAPHETHNYARANGA/UptickNoteApi.git

* run `composer install` in your terminal to install the project dependencies.
* create a .env file create your local db environment.
* create an application key in your terminal with the command `php artisan key:generate`
 * Migrate your database with the command `php artisan migrate` in your terminal.
 * Create passport secret key using the command `php artisan passport:client --personal`

 then add the following to your .env files replacing the values with the generated values:
 `PASSPORT_PERSONAL_ACCESS_CLIENT_ID="client-id-value"` <br>
 `PASSPORT_PERSONAL_ACCESS_CLIENT_SECRET="unhashed-client-secret-value"`

 * Run your application by running `php artisan serve` in your terminal and test your api using postman before consuming it in your client application.

run tests using :

./vendor/bin/phpunit