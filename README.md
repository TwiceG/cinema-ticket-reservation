# Cinema Project

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## About

The Cinema project aims to provide a platform for reserving seats in a cinema. Please note that the project is still in progress due to time constraints, and not all features have been implemented yet.

## Table of Contents

- [Prerequisites](#prerequisites)
- [Setup](#setup)
  - [First step](#first-step)
  - [Second step](#second-step)
  - [Third step](#third-step)
- [Conclusion](#conclusion)
- [Contact](#license)

## Prerequisites

Before getting started, make sure you have the following prerequisites installed on your system:

- Composer v2.5.5
- PHP v8+
- Laravel v10+
- MySQL v8

## Setup

Follow these steps to set up the Cinema project:

### First step

1. Create a new file called `.env` and copy the contents from `.env.example`.
2. Fill in the database variables in the `.env` file with the correct database information. Here's a sample:

   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=myDatabase
   DB_USERNAME=root
   DB_PASSWORD=root
   ```

   You may need to modify other variables in the file if necessary.

### Second step

After cloning the repository and opening it, execute the following commands in your terminal:

1. Change directory to the `backend` folder:

`cd backend`

2. Run the `setup.php` script, which performs the following actions:

`php setup.php`

- Installs the project dependencies with Composer:
  ```
  composer install
  ```
- Executes the Laravel migrations:
  ```
  php artisan migrate
  ```
- Seeds the database with initial data:
  ```
  php artisan seed
  ```

Make sure all these commands are successfully executed.

Additionally, check your `.env` file to ensure that the **APP_KEY** variable is filled. If it is not filled, generate a new key by running the following command in the terminal:

`php artisan key:generate`

### Third step

If you are using Apache server, there's no additional setup required. However, if you are not using Apache, run the following command in the terminal:

`php artisan serve`

This command will start the development server, and you will be able to access the home page of the project.

## Conclusion

Because this project is still in progress there is a lot to develop and implement features but there is a basic idea how to get there.

## Contact

If you have any questions about the project feel free to get in touch with me:

**ggabor.gabor25@gmail.com**
