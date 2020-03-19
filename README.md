# Spiral Repl

Spiral Repl is a REPL for Spiral framework, based on [PsySH](https://github.com/bobthecow/psysh) package.

## Installation

You can install it with composer:

``` bash
composer require krwu/spiral-repl
```

Activate the bootloader `Krwu/Repl/ReplBootloader` in your application, normally it is `<project>/app/src/app.php`:

``` php
protected const LOAD = [
    // ...
    Krwu\Repl\ReplBootloader::class,
]
```

## Useage

Spiral Repl allows you to interact with the spiral application on the command line. To enter the REPL environment, run:

``` bash
php app.php repl
```
