# Esse é um CRUD que criei para reaver meus conhecimentos em Laravel atendendo os seguintes requisitos propostos em um desafio


## Sistema de login - Registro:
*Registro para Nome, Email, Senha, Confirmação de senha.*

### Características do Registro:
- Verificação para força da senha
- Bloqueio de registro para e-mail já existente
- Confirmação da senha
![Texto Alternativo](/imagens/exemplo.jpg)

## Dashboard
- Dados do login, menu, opções
- Login e Registro

### Características do Dashboard logado:
- Mensagem de boas vindas e nome do usuário logado
- Menu com opções para ver Vagas, Candidaturas, Perfil
![Texto Alternativo](/imagens/dashboard-logado.png)

### Características do Dashboard login:
- Link para login com dados de entrada e-mail e senha
- Opção para lembrar senha
- Opção para recuperar senha
- Envio de link para recuperação
- *Em construção mensageria para recebimento de e-mails e link de recuperação


## Listagem de vagas:
- Listagem das vagas por Título, Descrição, Tipo, Status, Ações
- Opção de Editar cada vaga
- Opção de excluir cada vaga
- Paginação para até 10 registros por página
![Listagem de vagas](/imagens/listagem-vagas.png)

### Função editar vaga:
- Editar; Título, Descrição, Tipo, Status
- Opção de tipos; CLT, Freelancer, Pessoa Jurídica (PJ)
- Opção de status; Ativa, Pausada, Encerrada
- Confirmação de Atualização

### Função Criar nova vaga:
- Campos; Título, Descrição, Tipo, Status
- Opção de tipos; CLT, Freelancer, Pessoa Jurídica (PJ)
- Opção de status; Ativa, Pausada, Encerrada
- Opção; Salvar vaga ou voltar para lista de vagas
![Criar vaga](/imagens/criar-vaga.png)


## Listagem de incrições:
- Listagem das inscrições por; ID, Vaga, Candidato, Data de Inscrição, ações
- Opção editar ação
- Opção excluir Ação
- Listagem até 20 registros
- Mensagem de confirmação para exclusão bem sucedida
- *Paginação em contrução
![Listar Inscrições](/imagens/listar-inscricoes.png)

### Criar nova inscrição:
- Menu dropdown para seleção da vaga
- Caixa de texto para Carta de apresentação
- Enviar inscrição
![Criar vaga](/imagens/criar-nova-inscricao.png)


## Link para perfil do usuário
- Opção para Edição de dados do perfil e update

## Link para status do perfil
- Dados; Nome, Email, Data que foi criado o perfil, Informações de último login
- *Menu em construção para vagas e inscrições dentro do status
![Status do Perfil](/imagens/perfil-status.png)

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
