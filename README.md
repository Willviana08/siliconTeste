# siliconTeste
Desafio Full-Stack - Sillion



# Projeto Laravel - Visualizador de Usuários (com API externa)

Este é um projeto de avaliação que utiliza Laravel para consumir a API pública [randomuser.me](https://randomuser.me) e exibir uma lista de usuários com busca, paginação e responsividade. O projeto está dockerizado para facilitar a execução em qualquer ambiente.

---

## 🚀 Tecnologias Utilizadas

- PHP 8.1+
- Laravel
- HTML/CSS (Bootstrap)
- JavaScript (vanilla)
- Docker + Docker Compose

---

## 📦 Instalação Local com Docker

### Pré-requisitos

- Docker Desktop instalado e em execução
- Git (opcional)

### Passo a passo

1. Clone o repositório ou baixe os arquivos:
   ```bash
   git clone https://github.com/seu-usuario/seu-repo.git
   cd seu-repo
   ```

2. Construa e inicie o container:
   ```bash
   docker compose build
   docker compose up -d
   ```

3. Acesse a aplicação no navegador:
   ```
   http://localhost:8000
   ```

---

## 🔍 Funcionalidades

- Consumo de API externa com 100 usuários aleatórios
- Interface limpa com Bootstrap
- Campo de busca com filtro (pressione Enter para filtrar)
- Paginação client-side com JavaScript
- Código organizado com separação de arquivos (JS externo)
- Responsividade em telas menores
- Dockerfile e Docker Compose configurados

---

## 📁 Estrutura de Pastas

```
.
├── app/
├── public/
│   └── js/
│       └── users.js
├── resources/
│   └── views/
│       └── users/
│           └── index.blade.php
├── .docker/
│   └── vhost.conf
├── Dockerfile
├── docker-compose.yml
├── README.md
└── ...
```

---

## ⚠️ Observações

- Este projeto **não utiliza banco de dados**, pois os dados são consumidos diretamente da API.
- O cache de imagens e dados é feito apenas em memória pelo navegador.
- O código foca em **clareza, legibilidade e boas práticas**.

---

## 🧑‍💻 Autor

Wilkerman Viana  
Desenvolvedor Full Stack | Laravel | PHP | MySQL | JavaScript  
[LinkedIn](https://www.linkedin.com) | [GitHub](https://github.com/seu-usuario)

---

## 📜 Licença

Este projeto está licenciado sob a [MIT License](LICENSE).
