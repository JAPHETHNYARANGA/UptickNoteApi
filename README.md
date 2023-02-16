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

* The test cases can be run using the following command <br>
`php artisan:test`

# Api End Points

* When running the application on local host, the base url for the application is `http://127.0.0.1:8000/api/`

## Authentication Endpoints
