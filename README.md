# Laravel UI (with Tailwind css option)

<a href="https://packagist.org/packages/laravel/ui"><img src="https://poser.pugx.org/laravel/ui/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/ui"><img src="https://poser.pugx.org/laravel/ui/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/ui"><img src="https://poser.pugx.org/laravel/ui/license.svg" alt="License"></a>

## Introduction

While Laravel does not dictate which JavaScript or CSS pre-processors you use, it does provide a basic starting point using [Bootstrap](https://getbootstrap.com/) or [Tailwindcss](https://tailwindcss.com/), [React](https://reactjs.org/), and / or [Vue](https://vuejs.org/) that will be helpful for many applications. By default, Laravel uses [NPM](https://www.npmjs.org/) to install both of these frontend packages.

## About Tilwindcss preset

If you wish to use Tailwind CSS in your project and not Bootstrap and jQuery, it is for you!
Also, You will have Tailwind classes styling the initial blade files, but neither Bootstrap nor plain css!

## Usage

This package won't install Bootstrap and jQuery, or remove them if they are already installed if you explitly specify Tailwindcss!

You just need to add `--front=tailwindcss` to have tailwind as front-end framework!

```
    // In addition to the original artisan commands, you can use tailwindcss scaffolding...
    php artisan ui tailwindcss
    php artisan ui vue --front=tailwindcss
```

```
    // Generate login / registration scaffolding...
    php artisan ui tailwindcss --auth
    php artisan ui vue --auth --front=tailwindcss
```

### disclaimer

It is for my personal use but I tried to not break the other functionalities of the package.
So, it suppose to work as normal (install bootstrap and jQuery) if you dont mention `--front=tailwindcss`

## Official Documentation

Documentation can be found on the [Laravel website](https://laravel.com/docs/frontend).

## Contributing

Thank you for considering contributing to UI! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

Please review [our security policy](https://github.com/laravel/ui/security/policy) on how to report security vulnerabilities.

## License

Laravel UI is open-sourced software licensed under the [MIT license](LICENSE.md).

## Known issues
- React styles may be messy!
