# LP

#restaurar padrão config Linux

docker context use default

#Instalação com mysql

curl -s "https://laravel.build/example-app?with=mysql,redis" | bash

#Iniciar o docker laravel

cd modelo

./vendor/bin/sail up

#Iniciar a base de dados

./vendor/bin/sail up 