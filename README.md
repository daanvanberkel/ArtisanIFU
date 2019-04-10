# ```php artisan ifu```

This artisan command for [Laravel](https://laravel.com/) dumps a new autoload file using composer, clears the laravel cached files, migrate a fresh database and run database seeds. So you can start with a fresh laravel instance 😀.

## Installation

To install this artisan command run the following:

```bash
$ composer require daanvanberkel/ifu
```
## Usage

```bash
$ php artisan ifu -h
Description:
  I Fucked Up (dump autoload, clear laravel cache, migrate a fresh database and run database seeds)

Usage:
  ifu [options]

Options:
  -a, --all             Run all options
  -h, --help            Display this help message
  -q, --quiet           Do not output any message
  -V, --version         Display this application version
      --ansi            Force ANSI output
      --no-ansi         Disable ANSI output
  -n, --no-interaction  Do not ask any interactive question
      --env[=ENV]       The environment the command should run under
  -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
```
