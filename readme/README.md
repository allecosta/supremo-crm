# Desafio Técnico - Supremo CRM

<h2 align="center">
  <img src="/readme/media.gif">
</h2>


### Instale o projeto

```
git clone https://github.com/allecosta/supremo-crm

```
- OBS: Antes de rodar o comando acima, caso ainda não tenha o git instalado, baixe em:

- Download: [https://git-scm.com/downloads](https://git-scm.com/downloads)


*Navegue até o diretório onde está localizado o projeto*

```
cd supremo-crm

```

*Quando estiver na pasta do projeto, execute o comando para iniciar o servidor PHP*

```
php -S localhost:8000

```

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
