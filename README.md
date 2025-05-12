
#comando inicial

git clone https://github.com/leobravoe/laravel-dsw2-2025-1.git

cd laravel-dsw2-2025-1

composer update

copy .env.example .env

php artisan key:generate

Configurar o arquivo .env com o nome da base de dados "restaurantedb"

php artisan reset-database

Com o projeto configurado, para atualizar:

git reset --hard

git pull