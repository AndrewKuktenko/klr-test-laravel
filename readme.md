## KOLORO TEST EXERCISE

#### Install:

```sh
# clone git repo:
git clone https://github.com/AndrewKuktenko/klr-test-laravel

# change file rules:
chmod -R u=rw,g=r,o=r,a+X klr-test-laravel

# navigate to project dir
cd klr-test-laravel

# change file rules:
chmod -R ug+rwx storage bootstrap/cache

# install composer dep:
composer install

# create .evn file:
cp .env.example .env

# gen application key:
php artisan key:generate

# install npm dep:
npm i

# build front
npm run dev

# put your DB configuration
...

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret

...

# run server
php artisan serve
```
