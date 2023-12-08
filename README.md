**Esse é um CRUD que criei para reaver meus conhecimentos em Laravel atendendo os seguintes requisitos propostos em um desafio**

## Instruções
O desafio consiste em implementar uma aplicação web utilizando o framework PHP Laravel, um banco de dados relacional (Mysql, Postgres ou SQLite), que terá como finalidade a inscrição de candidatos a uma oportunidade de emprego.

## Sua aplicação deve possuir:

### CRUD de vagas:
Criar, editar, excluir e listar vagas.
A vaga pode ser CLT, Pessoa Jurídica ou Freelancer.
### CRUD de candidatos:
Criar, editar, excluir e listar candidatos.
Um cadidato pode se inscrever em uma ou mais vagas.
Deve ser ser possível "pausar" a vaga, evitando a inscrição de candidatos.
### Cada CRUD:
Deve possuir formulários para criação e atualização de seus itens.
Deve permitir a deleção de qualquer item de sua lista.
Implementar validações de campos obrigatórios e tipos de dados.
Testes unitários e de unidade.
## Banco de dados
O banco de dados deve ser criado utilizando Migrations do framework Laravel, e também utilizar Seeds e Factorys para popular as informações no banco de dados.
## Tecnologias a serem utilizadas
Devem ser utilizadas as seguintes tecnologias:
-HTML
-CSS
-Javascript
-Framework Laravel (PHP)
-Docker (construção do ambiente de desenvolvimento)
-Mysql, Postgres ou SQLite

## Bônus
-API Rest JSON para todos os CRUDS listados acima.
-Implementar autenticação de usuário na aplicação.


# Pré-requisitos para executar o projeto pela imagem

Certifique-se de ter o Docker e o Docker Compose instalados em sua máquina. 
Caso não tenha, você pode instalá-los seguindo as instruções em:

- [**Docker**](https://docs.docker.com/get-docker/)
- [**Docker Compose**](https://docs.docker.com/compose/install/)

## Configurando o Ambiente

1. Clone este repositório da branch thiagocsoares para o diretório desejado em sua máquina:

execute um git clone do projeto

2. Navegue até o diretório do projeto:

entre na pasta: cd crud-laravel-pleno 

Em seguida crie um arquivo .env a partir do arquivo .env.example:
Edite o arquivo .env e ajuste as variáveis de ambiente conforme necessário.

3. Iniciando a Aplicação

Navegue até o diretório do projeto:

cd crud-laravel-pleno e abra um terminal e execute o seguinte comando para construir os contêineres Docker e iniciar os serviços:

docker-compose up -d

Aguarde até que os contêineres sejam criados e os serviços sejam inicializados.

4. Execute o seguinte comando para instalar as dependências do Laravel:

docker-compose exec app composer install

5 Execute as migrações do banco de dados:

./vendor/bin/sail artisan migrate

6. Execute as Seeds

./vendor/bin/sail artisan db:seed

7. Acessando a Aplicação

Após concluir as etapas acima, você poderá acessar a aplicação em seu navegador em:

``http://localhost:porta``

***

# Características atuais do projeto

## Sistema de login - Registro:
**Registro para Nome, Email, Senha, Confirmação de senha.**

## Dashboard
- Dados do login, menu, opções
- Login e Registro

### Características do Dashboard logado:
- Mensagem de boas vindas e nome do usuário logado
- Menu com opções para ver Vagas, Candidaturas, Perfil

![Dashboard logon](/public/images/dashboard-logado.png)


### Características do Registro:
- Verificação para força da senha
- Bloqueio de registro para e-mail já existente
- Confirmação da senha

![Registro de Usuário](/public/images/registro.png)


### Características do Dashboard login:
- Link para login com dados de entrada e-mail e senha
- Opção para lembrar senha
- Opção para recuperar senha
- Envio de link para recuperação
- *Em construção mensageria para recebimento de e-mails e link de recuperação

![Login de Usuário](/public/images/login.png)


## Listagem de vagas:
- Listagem das vagas por Título, Descrição, Tipo, Status, Ações
- Opção de Editar cada vaga
- Opção de excluir cada vaga
- Paginação para até 10 registros por página

![Listagem de vagas](/public/images/listagem-vagas.png)


### Função editar vaga:
- Editar; Título, Descrição, Tipo, Status
- Opção de tipos; CLT, Freelancer, Pessoa Jurídica (PJ)
- Opção de status; Ativa, Pausada, Encerrada
- Confirmação de Atualização

![Editar de vaga](/public/images/editar-vaga.png)


### Função Criar nova vaga:
- Campos; Título, Descrição, Tipo, Status
- Opção de tipos; CLT, Freelancer, Pessoa Jurídica (PJ)
- Opção de status; Ativa, Pausada, Encerrada
- Opção; Salvar vaga ou voltar para lista de vagas

![Criar vaga](/public/images/criar-vaga.png)


## Listagem de incrições:
- Listagem das inscrições por; ID, Vaga, Candidato, Data de Inscrição, ações
- Opção editar ação
- Opção excluir Ação
- Listagem até 20 registros
- Mensagem de confirmação para exclusão bem sucedida
- *Paginação em contrução

![Listar Inscrições](/public/images/listar-inscricoes.png)


### Criar nova inscrição:
- Menu dropdown para seleção da vaga
- Caixa de texto para Carta de apresentação
- Enviar inscrição

![Criar vaga](/public/images/criar-nova-inscricao.png)


## Link para perfil do usuário
- Opção para Edição de dados do perfil e update.
- Menu suspenso e links

![Menu suspenso e links](/public/images/link-perfil.png)


## Link para status do perfil
- Dados; Nome, Email, Data que foi criado o perfil, Informações de último login
- *Menu em construção para vagas e inscrições dentro do status

![Status do Perfil](/public/images/perfil-status.png)


## Testes unitários criados para testar as funções essenciais
**Criados testes unitários para:**
- Criar vaga
- Atualizar vaga
- Apagar vaga
- Recuperar vaga
- Criar uma incrição
- Criar um candidato
- Atualizar um candidato

![Testes unitários](/public/images/testes-unitarios.png)


## Testes funcionais criados para testar os seguintes recursos:
**Criados testes funcionais / recursos para:**
- Criar vaga
- Criar uma incrição
- Criar um candidato
- Criar usuário
- Criar usuário autenticado
- Criar perfil teste

![Testes funcionais / recursos](/public/images/testes-features.png)


## Criação das migrations
- Criadas as migrations para todas funcionalidades do sistema no banco de dados

## Criação das seed para:
- Candidatos
- Incrições
- Usuários
- Vagas
- Database

## Criação das Factories
- Usuários, Candidatos, Vagas, Inscrições

## Criação das API's, Rotas web e rotas de autenticação para:
- Indexação
- Atualização
- Remoção
- Listagem
- Armazenamento


---

# Veja abaixo sobre o LARAVEL

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
