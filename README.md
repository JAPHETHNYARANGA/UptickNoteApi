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

* Login endpoitn - `/login` 
* The required parameters for login are `email` and `password`.
* The expected login sucess response is {<br>
   ` "success": true,`
    <br>
   ` "user": {`<br>
        `"id": 1,`<br>
       ` "name": "japheth",`<br>
        `"email": "nyaranga4@gmail.com",`<br>
        `"email_verified_at": null,`<br>
        `"created_at": "2023-02-16T14:32:01.000000Z",`<br>
        `"updated_at": "2023-02-16T14:32:01.000000Z"`<br>
   ` },`<br>
    `"token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiZGJhYmU1OTdjOWJhOWZlZjUwZTgzMmFhMzBkMmI5ZDcxMmY1MGJkYjk0M2U4NjkyODNkZjA5MjczYjJmYjQ3MzM5OGI2MWExMWNmZDY4YzEiLCJpYXQiOjE2NzY1Njc2NjAuNTI0MjY3LCJuYmYiOjE2NzY1Njc2NjAuNTI0MjcyLCJleHAiOjE3MDgxMDM2NjAuNTA4NzkxLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.jfxtwyJNyz0IFM93N-za8Mb1Y2FWL1DH__vNJzLLm1umjVQEkuSkjFNh6SeT_YzAwWCJIlqLxFDO4ID1Fa2-eXT5rRV-AESkv2U4ytfOCkmZxQ8mdjy7OoGjfGaRhq80H07LJnbbN0SLuHbaYvjT_1BeFyGK_6Kt-gN2KQe-1DhLS2tXPgR-2XpvF_pgQ1YRqhzu91IcIiILR8RUkbKO2Mc4P9yqYxu8Imh0JQuLI5EUpdwspR57UVtjz9SWS1v2akcsHlQjuNmcZn1raEaU-6Luuvh35sYEkEIj8s4mkjX1G1L5y_TJL6Dtf9NvTa3dlsEmQLZncB-pR9mpMO9nmeYuO50HRgJ7KAs0I1KlZId4OFNSmIKIPYNt02ssPPDBv8ZHv5IR8g74S7XGfRV8IqnzAVaL8IIqOQQxCCjOa38dq-vXy4DzvQCPKIddi8Qz5vbVYu5r0pElB746BDEVaiBieNYi5m8GYHzSriHZwYz1JKurvBLYwAdz6aF8Y5Z9j7nOfrFSPQRsVG6wYlQijV_NLH9zQ2xCqq3bLtHx0YrHIDnBHyBmrXs9FRCcuZNdspP2rd6N3EQyx8e__1dy-xwbkdGGvaE0iZt_oastNnfWSCDOy_4krXOHIMK9vdjoD8E-RTZCAxSFaMVFQFDmGAAtihuT86vJkgKWtUeFt30"`
} 