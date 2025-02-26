## Requisitos

* PHP 8.2 ou superior
* Composer
* Node.js 22 ou superior

## Sequeincia para criar o projeto

Duplicar o arquivo ".env.exemple" e renomear para ".env".<br>

Instaalr as dependências do PHP
```
composer install
```
Gerar a chave para arquivo .env
```
php artisan key:generate
```

Criar o projeto com Laravel

```
composer create-project laravel/laravel .
```

Iniciar o projeto criando com Laravel
```
php artisan serve
```
