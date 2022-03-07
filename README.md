# Green Kanban

<p align="center"><img src="./resources/img/green-kanban_logo-full.png" width="290"></p>

## Sobre o Projeto

A aplicação consitem um gerenciador de cards de tarefa no estilo kanban e foi desenvolvida utilizando as seguintes tecnologias:
- [Laravel](https://laravel.com/docs/9.x/)
- [Laravel Jetstream](https://jetstream.laravel.com/)
- [Laravel Livewire](https://laravel-livewire.com/)
- [Tailwindcss](https://tailwindcss.com/)
- [Alpine.js](https://alpinejs.dev/)

## Instalação

Instalando as dependências do composer atravez do docker:
```
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs
```

Copiar o arquivo `.env.example` e renomear para `.env`:
```
cp .env.example .env
```

Como se trata de um projeto Laravel Sail, os comandos `php`, `composer` e `npm` precisam ser executados apartir do binario `./vendor/bin/sail`. Por tanto é recomendado criar um alias para tornar esse processo menos custoso.
```
alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'
```

Finalizando a instalação:
```
sail up -d
sail npm install
sail npm run dev
sail artisan migrate
```
