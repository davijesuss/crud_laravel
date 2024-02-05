# Seu Projeto PHP

## Descrição

Este sistema foi desenvolvido com o propósito de colocar em prática meus conhecimentos na linguagem PHP e no framework Laravel. Trata-se de um CRUD simples, sendo o principal objetivo auxiliar uma locadora de filmes.

## Pré-requisitos

Antes de começar, certifique-se de ter o seguinte instalado em seu ambiente de desenvolvimento:

- [PHP](https://www.php.net/)
- [Composer](https://getcomposer.org/)
- Um banco de dados (por exemplo, [MySQL](https://www.mysql.com/))

## Configuração do Projeto

1. Clone o repositório:

   ```bash
   git clone https://github.com/davijesuss/crud_laravel
   
2. Copie o arquivo de ambiente:

    ```bash
   cp .env.example .env
   
Abra o arquivo .env em um editor de texto e configure as variáveis de ambiente, incluindo as configurações do banco de dados.

## Instalação de Dependências

Execute o seguinte comando para instalar as dependências do Composer:

   
    composer install

## Migração do Banco de Dados

Execute as migrações para criar as tabelas no banco de dados:

    
    php artisan migrate

## Iniciando o Servidor

Inicie o servidor de desenvolvimento:

    
    php artisan serve

## Notas Adicionais
Este projeto é um exercício prático e não foi projetado para ser utilizado em um ambiente de produção real.
Personalize as funcionalidades conforme necessário para atender aos requisitos específicos da sua locadora de filmes.
Explore a documentação oficial do Laravel para obter mais informações sobre personalizações avançadas.
Espero que este projeto seja útil para consolidar seus conhecimentos em PHP e Laravel. Boa prática!
