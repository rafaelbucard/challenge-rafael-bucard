## Feito por Rafael Buçard (Voxus Challenger)

## Instalação e requisitos 
Composer
PHP 8.1
Laravel 10

Instale as dependencias do projeto:

```bash
composer install
```

Crie o arquivo .env  e crie uma chave com os comandos:

```bash
cp -i .env.example .env && php artisan key:generate
```

Rodando o projeto
```bash
php artisan serve
```
Rodando o testes
```bash
php artisan test
```
