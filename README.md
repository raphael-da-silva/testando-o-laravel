# Teste com laravel

Este é um teste para ter uma noção de como o Laravel funciona. O projeto tem um login básico gerado pela ferramenta Artisan do framework.

### Alguns pontos

* Usei o componente `laravel/ui` para gerar login.
* Criei uma página "sobre" com um link passado para a view.
* Criei uma página de erro 404 customizada.
* Adicionei um comando para ser executado (`./artistan project-info`).
* Criei uma listagem básica de usuários.
* Criei uma visualização de dados do usuário.

### Detalhes técnicos

* A adição dos middlewares foi colocada nas rotas e não dentro dos controllers.
* Usei o container para registrar as dependências para serem resolvidas.
* Injetei as dependências nos controllers.

### Observações

Tive problemas com o cache de configuração do artisan que não leu corretamnte o arquivo .env (lembrar de não usar esse recurso).