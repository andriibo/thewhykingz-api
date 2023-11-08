### Create docker-compose.override.yml

```console
$ cp docker-compose.override.example.yml docker-compose.override.yml 
```

### Automatic PHPDoc generation for Laravel Facades

You can now re-generate the docs yourself (for future updates)

```bash

php artisan ide-helper:generate

```

_Check out [this Laracasts video](https://laracasts.com/series/how-to-be-awesome-in-phpstorm/episodes/15) for a quick introduction/explanation!_

- [`php artisan ide-helper:generate` - PHPDoc generation for Laravel Facades ](https://github.com/barryvdh/laravel-ide-helper#automatic-phpdoc-generation-for-laravel-facades)
- [`php artisan ide-helper:models` - PHPDocs for models](https://github.com/barryvdh/laravel-ide-helper#automatic-PHPDocs-for-models)
- [`php artisan ide-helper:meta` - PhpStorm Meta file](https://github.com/barryvdh/laravel-ide-helper#phpstorm-meta-for-container-instances)


Note: You do need CodeComplice for Sublime Text: https://github.com/spectacles/CodeComplice

### Swagger

```console
$ php artisan l5-swagger:generate
```

See [usage](https://github.com/DarkaOnLine/L5-Swagger)

### JWT

```console
$ php artisan jwt:secret
```

### Run app

```console
$ docker-compose up -d
```
