# Sistema de Gerenciamento de Clínica (PHP/MySQL)

## Descrição do Projeto
Este é um sistema Web completo desenvolvido em **PHP com o driver MySQLi** e estilizado com **Bootstrap 5**. O projeto implementa as operações **CRUD** (Create, Read, Update, Delete) para o gerenciamento de duas entidades principais: **Médicos** e **Pacientes**.

O sistema utiliza a biblioteca **MySQLi** com **prepared statements** para garantir a segurança na manipulação de dados.

## Requisitos
Para rodar este projeto localmente, você precisará de:
* Um servidor web com PHP instalado (Ex: XAMPP, WAMP, MAMP).
* Um banco de dados MySQL.

## Configuração do Banco de Dados
1.  Crie um banco de dados chamado `clinica`.
2.  Importe as tabelas `medicos` e `pacientes` (você precisará criar os comandos SQL de `CREATE TABLE`).
    * **Tabela `medicos`**: id_medico (PK), nome_medico, crm, especialidade.
    * **Tabela `pacientes`**: id_paciente (PK), nome_paciente, cpf, dt_nasc, medico_id_medico (FK).
3.  Edite o arquivo `src/config.php` se suas credenciais MySQL forem diferentes:
    ```php
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'clinica');
    ```

## Como Executar
1.  Clone este repositório para a pasta `htdocs` (ou `www`) do seu servidor web.
2.  Acesse `http://localhost/nome-da-pasta/index.php` no seu navegador.

## Documentação Complementar
A documentação exigida (Pseudocódigo, Algoritmo em Linguagem Estruturada e Fluxograma) está detalhada na pasta `/docs`, com foco na operação CRUD de **Cadastro de Paciente**.

## Autor
Talisson Alves Moraes
