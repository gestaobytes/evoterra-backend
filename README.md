<p align="center"><img src="https://drive.google.com/uc?export=view&id=13dNVnvnBqSXD87lBuIrVTUN7Gd-H7_1T"></p>
<hr/>

# Setup Docker Para Projetos Laravel 9 com PHP 8

### Passo a passo
Clone Repositório
```sh
git clone https://github.com/gestaobytes/evoterra-backend evoterra
```

```sh
cd evoterra/
```

Crie o Arquivo .env
```sh
cd evoterra/
cp .env.example .env
```


Atualize as variáveis de ambiente do arquivo .env
```dosini
APP_NAME=gestaobytes
APP_URL=http://localhost:8901 

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=evoterra
DB_USERNAME=root
DB_PASSWORD=root

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379
```


Suba os containers do projeto
```sh
docker-compose up -d
```


Acessar o container
```sh
docker-compose exec app bash
```


Instalar as dependências do projeto
```sh
composer install
```


Gerar a key do projeto Laravel
```sh
php artisan key:generate
```


Acesse o projeto
[http://localhost:8901](http://localhost:8901)


### ATENÇÃO
Existem alguns trechos de códigos que devem ser alterados quando tiverem que ser acessados com login. São eles
- route/api | descomente Route::middleware('auth:sanctum')->group(function ()
- app/Http/Middleware/VerifyCsrfToken/api | comentar ou excluir os dados em except
- app/Http/Controllers/* | descomentar ////$this->commons->userAuthorization($this->gate);
