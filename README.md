# Sistema de Cadastro de Produtos

## Objetivo

Sistema desenvolvido para realizar o cadastro e gerenciamento de produtos, permitindo inserir, visualizar, editar e excluir produtos.

## Tecnologias utilizadas

- PHP
- MySQL
- HTML
- CSS
- Bootstrap
- XAMPP

## Requisitos

- XAMPP
- PHP
- MySQL
- Navegador web

## Requisitos para execução

- XAMPP instalado.
- Apache e MySQL ativados.
- PHP e MySQL configurados.
- Banco de dados criado e configurado no arquivo de conexão.
- Navegador para acessar o sistema.

## Instalação e configuração

1. Instale o XAMPP.
2. Coloque o projeto dentro da pasta `htdocs`.
3. Inicie o Apache e o MySQL pelo XAMPP.
4. Crie o banco de dados no MySQL.
5. Configure os dados de conexão no arquivo `conexao.php`.
6. Acesse o projeto pelo navegador.

## Estrutura do banco de dados

O sistema utiliza a tabela `produtos` com os seguintes campos:

| Campo | Tipo |
|---|---|
| id | INT |
| nome | VARCHAR |
| categoria | VARCHAR |
| descricao | VARCHAR |
| preco | DECIMAL |
| quantidade | INT |
| dataValidade | DATE |

## Principais funcionalidades

- Cadastro de produtos
- Listagem de produtos
- Edição de produtos
- Exclusão de produtos
- Armazenamento dos dados no MySQL

O sistema permite cadastrar, visualizar, editar e excluir produtos. Os dados são armazenados no banco de dados MySQL e podem ser gerenciados através da interface do sistema.