#KESAVAPURAM SREEKRISHNASWAMY TEMPLE
This website is created for **KESAVAPURAM SREEKRISHNASWAMY TEMPLE**<br>
This work was done in laravel and we have used [Voyager](https://packagist.org/packages/tcg/voyager).
<br>To know how to install laravel in your computer please visit [Laravel](https://laravel.com/docs/5.3)</a><br>
For viewing this html please follow the following instructions:
###For windows:
- Clone this Repo
- Make sure you have php and composer installed in your system
- cd to the main folder of the repo
- Then type `composer install`
- Then `copy .env.example .env`
- open the .env file and change the username to root and leave password empty. Rename the database to what ever you want and create a database with that name in [phpmyadmin](http://localhost/phpmyadmin/) or any other
- Type `php artisan voyager:install`
- Type `npm install --no-bin-links`
- Then `php artisan key:generate`
- Type `php artisan serve`
- Goto [localhost:8000](http://localhost:8000/)

###For Linux:
- Clone this Repo
- Make sure you have php and composer installed in your system
- cd to the main folder of the repo
- Type `composer install`
- Type `chmod -R 777 bootstrap/cache`
- Type `cp .env.example .env`
- open the .env file and change the username to root and leave password empty. Rename the database to what ever you want and create a database with that name in [phpmyadmin](http://localhost/phpmyadmin/) or any other
- Type `php artisan voyager:install`
- Type `npm install`
- Type `php artisan key:generate`
- Type `php artisan serve`
- Goto `localhost:8000`
