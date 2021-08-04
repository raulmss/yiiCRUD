<p align="center">
    <h1 align="center">Yii 2 CRUD utilizando projeto básico</h1>
    <br>
</p>

Esse projeto contém um sistema de CRUD que utiliza requisições para receber as informações de endereço através do CEP.

Para mais informações sobre o Yii2 Framework:

[![Latest Stable Version](https://img.shields.io/packagist/v/yiisoft/yii2-app-basic.svg)](https://packagist.org/packages/yiisoft/yii2-app-basic)
[![Total Downloads](https://img.shields.io/packagist/dt/yiisoft/yii2-app-basic.svg)](https://packagist.org/packages/yiisoft/yii2-app-basic)
[![build](https://github.com/yiisoft/yii2-app-basic/workflows/build/badge.svg)](https://github.com/yiisoft/yii2-app-basic/actions?query=workflow%3Abuild)

REQUISITOS
------------
O requisito mínimo para esse projeto é que o seu servidor Web suporte PHP 5.6.0.

INSTALAÇÃO
------------
### 1 - Instalar o Xampp/Lamp

Se você não tem o Xampp ou o Lampp instalados, siga as instruções em
[https://www.apachefriends.org/](https://www.apachefriends.org/pt_br/index.html) e instale a aplicação.

### 2 - Realizar o clone da aplicação.
Você deve copiar toda a aplicação para seu computador.
Indico que faça essa clonagem dentro da pasta do /lampp/htdocs (caso esteja no Windows) e
/xampp/htdocs/ (caso esteja no Linux).
~~~
git clone https://github.com/raulmss/yiiCRUD.git
~~~

CONFIGURAÇÃO
-------------

### Database

Edite o arquivo `config/db.php` com conteúdo real de um banco. O próprio Xampp/Lampp dispõe
de um banco em MySql já integrado que poderá ser usado:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yii2basic',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
];
```
Onde há 'dbname=yii2basic', troque o nome yii2basic pelo nome

**NOTA:**
- Isso por si só não irá criar o banco de dados. Após criar o banco, você poderá usar migrações (migrations) para dar continuidade ao uso do projeto.

### Utilizando as migrações

As migrações irão criar as tabelas da maneira correta já com as configurações necessárias para garantir o bom funcionamento da aplicação.

Quando estiver dentro da pasta raiz do projeto, após ter feito as configurações de banco de dados na sessão anterior, 
execute o comando abaixo no CLI para criar as tabelas:
~~~
./yii migrate
~~~

Caso haja a necessidade de reiniciar as tabelas do banco de dados, utilize:
~~~
./yii migrate/fresh
~~~
Com isso, o sistema irá desfazer e refazer as tabelas (apagando todo o seu conteúdo).

**NOTA**
Os passos para utilizar as migrações acontecerão na sessão descrita de configuração do banco, após a sua inicialização e criação.


INICIALIZAÇÃO
-----------

### 1 - Iniciar a aplicação
Na pasta raiz do projeto, vá até o CLI (bash) e utilize o comando:
~~~~
php yii serve
~~~~
Agora a sua aplicação Yii já está inicializada localmente no endereço descrito no prompt, mas ainda precisamos do banco funcionando.
### 2 - Iniciar o MySQL
Ao abrir a aplicação Xampp (ou Lampp), por meio da interface, inicie os módulos 'apache' e  'MySQL';
<br>
- Em um navegador, vá ao endereço "localhost";<br>
- Na barra de navegação, vá até "phpMyAdmin"; <br>
- Crie o banco de dados com o nome desejado; <br>
- Faça as configurações no banco como descrito na sessão Configuração"; <br>
- Inicie as migrações como também descrito na sessão "Configuração";

Pronto, a aplicação está pronta para ser utilizada.