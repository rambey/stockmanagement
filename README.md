
This is a fresh Laravel 8 project with  [AdminLTE 3](https://adminlte.io/).

## How to use


- Clone the repository with __git clone__
- Copy __.env.example__ file to __.env__
- Edit database credentials in __.env__
- Run __composer install__
- Run __php artisan key:generate__
- Run __php artisan migrate__
- Run __php artisan serve__ (if you want to use other port add __--port=90__)
- You can __register__ by clicking on top-right


Most used commands

## More

php artisan make:model Model  --migration

php artisan migrate

php artisan make:controller Name_ControllerController --resource

php artisan migrate:refresh

php artisan optimize:clear

php artisan route:clear