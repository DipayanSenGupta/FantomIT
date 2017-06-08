<!-- Route(Login/Registraion) -->
php artisan make:auth is used.

<!-- For editing individual post -->
php artisan make:controller PostController --resource is used.
All the CRUD methods are defined in the controller.
Auth middleware is used in the constructor to validate users.

<!-- Migration -->

3 migrations has happened. create_posts_table in addition with create_users_table and create_password_resets_table.

One to Many relation is used , where POSTS belongs to a USER
Database is named "fantom_it"
<!-- Public posts -->

In public post page accordion is used as timestamp as its title with click
it would show into a modal
A "Modal.js" is added too which is in the public directory.

<!-- FB login -->

Fb login had error doing call back.
*No Found HTTP Exception was shown
This is probably due to the Call back from the API

<!-- Views -->
All the views are in View folder with appropriate partials