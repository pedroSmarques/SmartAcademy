<h1 align="center">Smart Academy</h1>

<p align="center">
  Sistema de gestão para uma academia fictícia, com cadastro de alunos e de modalidades.
</p>

<p align="center">
  <a href="https://pedrosmarques.github.io/SmartAcademy/index.html">
    <img src="https://img.shields.io/badge/Ver%20as%20telas-online-0A66C2?style=for-the-badge" alt="Ver as telas">
  </a>
</p>

<p align="center">
  <img src="https://img.shields.io/badge/HTML5-E34F26?style=flat&logo=html5&logoColor=white" alt="HTML5">
  <img src="https://img.shields.io/badge/CSS3-1572B6?style=flat&logo=css3&logoColor=white" alt="CSS3">
  <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=flat&logo=javascript&logoColor=black" alt="JavaScript">
  <img src="https://img.shields.io/badge/PHP-777BB4?style=flat&logo=php&logoColor=white" alt="PHP">
  <img src="https://img.shields.io/badge/MySQL-4479A1?style=flat&logo=mysql&logoColor=white" alt="MySQL">
</p>

<!-- Para mostrar um print da tela, salve a imagem como preview.png na raiz do projeto e apague as marcações de comentário desta linha:
<p align="center"><img src="preview.png" alt="Tela inicial do Smart Academy" width="700"></p>
-->

---

## Sobre o projeto

O **Smart Academy** é a base de um CRUD para uma academia fictícia. O sistema tem uma tela inicial e duas áreas de cadastro:

- **Cadastro de alunos:** nome, e-mail, telefone e CPF
- **Cadastro de modalidades:** nome, mensalidade, local, indicação e restrição

Os formulários enviam os dados para o back-end em PHP, que grava as informações em um banco MySQL.

## Sobre a versão online

> **Atenção:** na versão online dá para **navegar por todas as telas**, mas **não é possível cadastrar nada**.

O GitHub Pages hospeda apenas arquivos estáticos (HTML, CSS e JavaScript). Ele não executa PHP e não tem banco de dados. Para o cadastro funcionar, o projeto precisa rodar em uma máquina com PHP e MySQL, como mostrado em [Como rodar localmente](#como-rodar-localmente).

## Funcionalidades

| Funcionalidade | Status |
|---|---|
| Tela inicial com navegação | Pronto |
| Cadastro de alunos (Create) | Pronto |
| Cadastro de modalidades (Create) | Pronto |
| Máscara automática de telefone e CPF | Pronto |
| Listagem de alunos e modalidades (Read) | Planejado |
| Edição de cadastros (Update) | Planejado |
| Exclusão de cadastros (Delete) | Planejado |

## O que pratiquei

- **Formulários HTML** enviando dados com o método `POST`
- **Máscaras com JavaScript e expressões regulares:** o telefone vira `(00) 00000-0000` e o CPF vira `000.000.000-00` enquanto o usuário digita
- **Eventos e navegação** entre páginas com `addEventListener`
- **PHP + MySQL:** conexão com o banco usando `mysqli` e inserção de registros com `INSERT`
- **Organização de pastas**, separando estilos, scripts, back-end e imagens

## Próximos passos

- [ ] Completar o CRUD com listagem, edição e exclusão
- [ ] Usar *prepared statements* nas consultas SQL, para proteger contra SQL Injection
- [ ] Separar a conexão com o banco em um único arquivo, com as credenciais em variáveis de ambiente
- [ ] Validar os dados também no back-end
- [ ] Mostrar a mensagem de sucesso ou erro dentro do próprio layout do sistema

## Como rodar localmente

**Você vai precisar de:** um servidor local com PHP e MySQL, como o [XAMPP](https://www.apachefriends.org/pt_br/index.html).

**1. Clone o projeto dentro da pasta `htdocs` do XAMPP**

```bash
git clone https://github.com/pedroSmarques/SmartAcademy.git
```

**2. Crie o banco de dados.** Abra o phpMyAdmin e execute:

```sql
CREATE DATABASE smartacademy;
USE smartacademy;

CREATE TABLE alunos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100),
    telefone VARCHAR(20),
    cpf VARCHAR(14)
);

CREATE TABLE modalidades (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_modalidade VARCHAR(100) NOT NULL,
    mensalidade DECIMAL(10,2),
    localizacao VARCHAR(100),
    indicacao VARCHAR(100),
    restricao VARCHAR(100)
);
```

**3. Ajuste a conexão.** Confira o usuário e a senha do seu MySQL nos arquivos da pasta `php/`.

**4. Acesse** `http://localhost/SmartAcademy` no navegador.

## Estrutura

```
SmartAcademy/
├── index.html                # Tela inicial
├── cadastroAluno.html        # Formulário de alunos
├── cadastroModalidade.html   # Formulário de modalidades
├── php/                      # Back-end: gravação no banco
├── scripts/                  # Navegação e máscaras de campo
├── styles/                   # Estilos de cada página
└── assets/                   # Logo e ícone
```

## Autor

**Pedro Henrique Marques**
Estudante de Análise e Desenvolvimento de Sistemas (Unisuam) e do Técnico em Desenvolvimento de Sistemas (Senai Firjan)

[LinkedIn](https://www.linkedin.com/in/pedrosmarquess/) · [GitHub](https://github.com/pedroSmarques)
