# Project Title

### Test Laravel Admin API

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites
- PHP >= 7.0.0
- Laravel >= 5.5.0
- Laravel-Admin package ([Link](https://github.com/z-song/laravel-admin))

### Installing
- Clone this repository
- Run this commands
    ```
    composer install
    composer require encore/laravel-admin
    php artisan vendor:publish --provider="Encore\Admin\AdminServiceProvider"
    php artisan admin:install
    ```

- Open ```http://localhost/admin/``` in browser,use username ```admin``` and password ```admin``` to login.


## Authors

* **HoangDinh98** - *Initial work* - [Github](https://github.com/HoangDinh98)
