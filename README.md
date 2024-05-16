# LP

#restaurar padrão config Linux

docker context use default

#Instalação com mysql

curl -s "https://laravel.build/example-app?with=mysql,redis" | bash

#Iniciar o docker laravel

cd modelo

./vendor/bin/sail up

#Iniciar a base de dados

./vendor/bin/sail artisan migrate

#Instalar o Breeze

composer require laravel/breeze --dev

php artisan breeze:install

php artisan migrate npm install npm run dev

#Criar tabelas

php artisan make:model -mrc produto 

#Verificar o status das tabelas

php artisan migrate:status 

#Excluir todas as tabelas

php artisan migrate:reset

#Voltar 1 ou mais passos

php artisan migrate:rollback --step 1

#Atualizar todas as tabelas

php artisan migrate:refresh --step 1

#Atualizar todas as tabelas sem condição

php artisan migrate:fresh