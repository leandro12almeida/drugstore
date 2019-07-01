# Drugstore

Project in Laravel for a drugstore management project.

See more: https://github.com/leandro12almeida/drugstore/

----

## Technologies used
Laravel: 5.8.x, MySQL, PHP: 7.x, Bootstrap: 4.x.


## Getting Started
Perform configuration of the development environment using a web server, database, and PHP dependencies.

### Linux: Ubuntu 16.04 LTS
Perform the installation of Apache, MySQL, PHP and their modules.

```shell
sudo apt-get update
sudo apt-get install php7.2 php7.2-cli php7.2-common php7.2-xml php7.2-mbstring php7.2-pgsql php7.2-mysql php7.2-curl php7.2-gd php7.2-json curl -y
```

Verify PHP version  `php -v`


```
PHP 7.2.17-1+ubuntu16.04.1+deb.sury.org+3 (cli) (built: Apr 10 2019 10:50:19) ( NTS )
Copyright (c) 1997-2018 The PHP Group
Zend Engine v3.2.0, Copyright (c) 1998-2018 Zend Technologies
    with Zend OPcache v7.2.17-1+ubuntu16.04.1+deb.sury.org+3, Copyright (c) 1999-2018, by Zend Technologies
```

Start apache `sudo systemctl start apache2 && systemctl status apache2`

For installation of laravel, you first have to have the composer on your machine, if you can not download an executable from it and install the composer without too much trouble on your machine.

Click on the link to download:

```shell 
https://getcomposer.org/
```

With the composer on your Windows machine, we will install our utility, the Laravel Installer. First open your command prompt, just use the key combination `CTRL + R` and in the window that appears enter: `cmd`. After that press `ENTER` to open the prompt.

With the prompt open, type and execute the command below:

```shell 
composer global require "laravel/installer"
```

To access the application files, you need to download the repository in GitHub.


## Project installation

Perform cloning of the repository through GitHub:

```shell 
git clone https://github.com/leandro12almeida/drugstore.git
```

Navigate through the folders on your computer until you reach the cloned folder:

```shell 
cd drugstore
```

Use the *composer* to perform the installation:

```shell 
composer install
```

You will need to configure the `.env` file for the project by setting the connection values to the database and if necessary, creating a new hash key.

```shell
php artisan key:generate
```

## Creating database:
Create the database in your MySQL database manager environment:

```sql
CREATE DATABASE drugstore;
```

Use migrations to create the database tables:

```shell
php artisan migrate
```

Use seeders to populate the database tables:

```shell
php artisan db:seed
```

## Starting server
Start displaying the application from the server:

```shell
php artisan serve
```

If everything is correct, when running `php artisan serve` in the terminal, something like:

```
Laravel development server started: <http://127.0.0.1:8000>
```
