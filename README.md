Here are the steps to launch the project :

1. Drop the .env that was given to you at the root of the project
2. Install composer dependencies : `composer install`
3. Install npm dependencies : `npm i`
4. Build assets : `npm run build`
5. Make database migration : `php artisan migrate`
6. Seed the database : `php artisan db:seed`
7. Start development server : `php artisan serve`

You will have 3 pre created accounts that you can use :

-   admin@gmail.com
-   editor@gmail.com
-   viewer@gmail.com

They all have the `password` as their passwords
