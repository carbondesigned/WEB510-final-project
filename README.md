# Install Laravel Locally

[https://laravel.com/docs/10.x#your-first-laravel-project](https://laravel.com/docs/10.x#your-first-laravel-project)

```bash
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

```bash
sudo mv composer.phar /usr/local/bin/composer
```

```bash
composer create-project laravel/laravel example-app
```

# Install Project Locally

1. [`https://github.com/carbondesigned/WEB510-final-project.git`](https://github.com/carbondesigned/WEB510-final-project.git)
2. `npm i`
3. `composer install`
4. Create new file `.env`
    1. Copy variables from `.example.env`
    2. Paste into `.env`
5. Run project

    We need to run a Vite development server.

    1. `php artisan serve`
    2. `npm run dev`
