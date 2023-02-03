# Desafio Técnico - Supremo CRM

<h2 align="center">
  <img src="/media/readme.gif">
</h2>


### Instale o projeto

```
git clone https://github.com/allecosta/supremo-crm

```
- OBS: Antes de rodar o comando acima, caso ainda não tenha o git instalado, baixe em:

- Download: [https://git-scm.com/downloads](https://git-scm.com/downloads)


*Crie um banco de dados. Após concluir a criação do banco, execute o script SQL para criar a tabela.*

```
CREATE DATABASE db_supremo_crm;

CREATE TABLE contacts (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    cpf VARCHAR(14) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

```
*OBS: Para acessar o banco de dados, é necessario preencher as credenciais de autenticação (usuário e senha), no arquivo config/Connection.php*

*Navegue até o diretório onde está localizado o projeto*

```
cd supremo-crm

```

*Quando estiver na pasta do projeto, execute o comando para iniciar o servidor PHP*

```
php -S localhost:8000

```

## Stack utilizada ⚙

**Linguagem:**
<img align="center" alt="php" src="https://img.shields.io/badge/-PHP-Wild Blue Yonder?style=for-the-badge&logo=PHP&message=PHP&color=blue&logoColor=white">

**Database:**
<img align="center" alt="mysql" src="https://img.shields.io/badge/-MySQL-Chambray?style=for-the-badge&logo=MySQL&message=MySQL&color=blue&logoColor=white">

**Ferramenta:**
<img align="center" src="https://img.shields.io/badge/Visual_Studio_Code-0078D4?style=for-the-badge&logo=visual%20studio%20code&logoColor=white" alt="Visual Studio">

