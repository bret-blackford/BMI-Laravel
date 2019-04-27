## Steps with a New Laravel Project 

1) **Create Project**
1. cd `C:\xampp\htdocs`
`composer create-project laravel/laravel myProject “5.8.*” --prefer-dist`
2) Point Local Server to New App
    1. open `elevate nano C:\Windows\System32\drivers\etc\hosts` file
    2. `nano  C:\Windows\System32\drivers\etc\hosts`
    3. add new line for new project 
```
# localhost name resolution is handled within DNS itself.
#       127.0.0.1       localhost
#       ::1             localhost
#127.0.0.1 hello-world.loc
127.0.0.1 p3.loc
127.0.0.1 BMI-P4.loc
127.0.0.1 foobooks.loc
```
3) **create new VirtualHost block**
4) open `C:\xampp\apache\conf\extra\httpd-vhosts.conf` file `nano C:\xampp\apache\conf\extra\httpd-vhosts.conf `
```
<VirtualHost *:80>
        ServerName foobooks.loc
        DocumentRoot C:/xampp/htdocs/foobooks/public
        <Directory C:/xampp/htdocs/foobooks/public>
                Options Indexes FollowSymLinks MultiViews
                AllowOverride All
                Order allow,deny
                allow from all
        </Directory>
</VirtualHost>
```
6) **Version Control**
7) run this at command line of new project path : `git init`
8) go to github and create a new repository without a README.md file
9) in github note the SSH URL
10) run this at command line of new project path : `git remote add origin git@github.com:username/myProject.git`
 `git add –all`  
 `git commit -m “First commit”`  
 `git push –set-upstream origin master`  
14) **clone Laravel ap to production  (DigitalOcean)**
15) ssh into DigitalOcean Droplet `ssh root@123.456.789.000`
16) navigate to document root at `/var/www/html`
17) run `git clone git@github.com:username/myProject.git`
18) refresh via `composer install --no-dev`
19) Set Environment File (.env) in Prod ( ??? )
20) **Configure Subdomain** 
21) open `/etc/apache2/sites-enabled\000-default.conf`
22) add new VirtualHost block restart Apache via : `service apache2 restart `
23) run `composer install --no-dev`
24) Routes in `\routes\web.php`
25) Controllers created via `php artisan make:controller MyController`
26) controllers in `/app/http/Controllers`
27) Connect Routes to Controllers
28) `Route::get('/view', 'MyController@index');`
29) Install packages via `myProject\composer.json`
```
    "require": {
        "php": "^7.1.3",
        "fideloper/proxy": "^4.0",
        "laravel/framework": "5.8.*",
        "laravel/tinker": "^1.0",
        "ianlchapman/pig-latin-translator": "*"
    },
    "require-dev": {
        "barryvdh/laravel-debugbar": "^3.2",
        "beyondcode/laravel-dump-server": "^1.0",
        "filp/whoops": "^2.0",
        "fzaninotto/faker": "^1.4",
        "mockery/mockery": "^1.0",
        "nunomaduro/collision": "^2.0",
        "phpunit/phpunit": "^7.5"
    },
```
30) run `$ composer require barryvdh/laravel-debugbar --dev`
31) run `$ composer update`
32) run `$ composer install --no-dev`
33) run `$ composer dump-autoload`
34) Views at `myProject/resources/views`
35) Blade Templates at `myProject/layouts/master.blade.php`
36) **ADD DATABASE**
37) create a utf8mb4_unicode_ci Db Table via phpMyAdmin
38) modify `/config/database.php` file
```
        'mysql' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'foobooks'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
```
39) modify `/myProject/.env`
```
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=foobooks
DB_USERNAME=root
DB_PASSWORD=
```
40) test connection via this in web routes file 
```phpRoute::get('/debug', function () {
    $debug = [
        'Environment' => App::environment(),
    ];

    try {
        $databases = DB::select('SHOW DATABASES;');
        $debug['Database connection test'] = 'PASSED';
        $debug['Databases'] = array_column($databases, 'Database');
    } catch (Exception $e) {
        $debug['Database connection test'] = 'FAILED: '.$e->getMessage();
    }

    dump($debug);
});
```
41) **Configure XAMPP for Db Migrations**
42) in `/app/Providers/AppServiceProvider.php` update boot method via
```php
public function boot() {
    \Scema::defaultStringLength(191);
}
```
43) Generate New Migration File
44) `$ php artisan make:migration create_myTable_table`
45) add fields in the `/database/migrations/_create_mtTable_table.php` in the public function up() section
46) run `$ php artisan migrate:fresh` to create fields noted in up() section
47) Create a Model
48) run `$ php artisan make:model Book`
49) Create a Seeder via `$ php artisan make:seeder BooksTableSeeder`
50) in file `/database/seeds/BooksTableSeeder.php` ad info to the run() section and add “use App\Book”
51) run `$ php artisan migrate:fresh --seed`
