## Sobre o projeto

O projeto consiste em um CRUD sisples de usuários utilizando [Laravel 8](https://laravel.com).

-   [Tela inicial de listagem de usuários](http://127.0.0.1:8000/users).

## Setup inicial

### Recursos utilizados no projeto:

-   **[PHP ^7.4.3](https://www.php.net)**
-   **[MySql ^8.0.25](https://www.mysql.com)**
-   **[Composer ^2.1.3](https://getcomposer.org)**

### Instalação

#### Na pasta do projeto, execute os seguintes comandos

**Renomeie ou copie o arquivo .env.example para .env**\
**Altere as com as informações necessárias**

```console
~$ cp .env.example .env
```

**instalação dos módulos:**

```console
~$ composer install
```

**Executando as migrations para criação da tabela no banco:**

```console
~$ php artisan migrate
```

**Gere a chave da aplicação**

```console
~$ php artisan key:generate
```

**Iniciando o projeto**

```console
~$ php artisan serve
```

Neste momento o projeto já deve estár sendo executado,
basta acessar o [CRUD de Usuários](http://127.0.0.1:8000/users) para utilizar.
