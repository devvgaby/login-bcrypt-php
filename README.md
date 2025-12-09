# PHP Login com Bcrypt

Sistema de login e cadastro em PHP, com **hash de senhas usando Bcrypt**.

## Estrutura do projeto

- `config/database.php` → Configuração do banco de dados
---
- `public/cadastro.php` → Cadastro de usuário
- `public/login.php` → Login de usuário
---
- `views/cadastro.html` → Formulário de cadastro
- `views/login.html` → Formulário de login
---
- `src/Usuario.php` → Classe de usuário 
---
## Tecnologias

- PHP 8.4.6
- MySQL
- Bcrypt (password_hash)

## Uso

1. Configure `config/database.php` com seu banco de dados.  
2. Abra o servidor PHP na pasta raiz:

```bash
php -S localhost:8000
```
3. Acesse os formulários:
```bash
http://localhost:8000/views/cadastro.html
http://localhost:8000/views/login.html
```

