# Laravel-8-Rest-API-with-Spatie-and-Sanctum

Rest api using spatie roles and permissions with sanctum authentication  
Instalation step

1. Fork the repsitory.
2. Run below command serially  
   composer install  
   cp .env.example .env  
   php artisan key:generate  
   Sync Database  
   php artisan migrate:fresh --seed  
   php artisan db:seed --class=UserSeeder
3. Run php artisan serve
