# Api Crud
Rest-based api for managing users with permission levels.


## TECHNOLOGIES USED
- Docker
- Laravel 10
- Laravel passport (gerete jwt acess token)
- Acl (User Roles and Permissions)



## INITIALIZATION
- 1-CLONE THE PROJECT.

- 2-ENTER THE PROJECT FOLDER.

- 3-RENAME THE FILE .ENV.EXAMPLE TO .ENV

- 4-UPLOAD THE PROJECT CONTAINER. : `docker-compose up -d`

- 5-ENTER INSIDE THE CONTAINER APP: `docker commpose exec app bash`

- 6-DOWNLOAD THE PROJECT DEPENDENCIES: `composer install`

- 7-GENERATE THE PROJECT KEY: `php artisan key:generate`

- 8-RUN THE MIGRATIONS AND SEED OF THE PROJECT: `php artisan migrate`

- 9-INSTALL PASSPORT: `php artisan passport:install`

- 10-START TINKER: `php artisan tinker`

- 11-CONFIGURE A VIRTUAL HOST(OPTIONAL, HELPS IN THE PROCESS OF TESTING THE API): `http://api.com`
