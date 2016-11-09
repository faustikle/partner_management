## Gerenciador de Sócios
Este projeto tem como objetivo, a resolução de um teste proposto pela empresa Vox Tecnologia.
## Passos para instalação

O projeto foi implementado utilizando um ambiente Homestead, fornecido pelo Laravel. O processo de instalação e configuração do mesmo pode ser visualizado [aqui](https://laravel.com/docs/5.3/homestead#installation-and-setup).

1 - Clone o projeto:
```sh
$ git clone https://github.com/faustikle/partner_management.git
```
2 - Renomear o arquivo **.env.example** para **.env**

3 - Criar um banco e definir as configurações no arquivo **.env**

4 - Instalar as dependências do composer:
```sh
$ composer install
```
5 - Gerar uma **APP_KEY**:
```sh
$ php artisan key:generate
```
6 - Instale a tabela de configuração das migrations:
```sh
$ php artisan migrate:install
```
7 - Execute as **migrations**, para criar as tabelas do projeto:
```sh
$ php artisan migrate:refresh
```
8 - Popule o banco com alguns **seeds** de teste:
```sh
$ php artisan db:seed
```
9 - Para acessar o sistema utilize:
```sh
E-mail: admin@gmail.com
Senha: 12345
```
