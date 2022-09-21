# SimpleSAMLphp Composer module example

![Build Status](https://github.com/simplesamlphp/simplesamlphp-module-examplecomposer/workflows/CI/badge.svg?branch=master)
[![Coverage Status](https://codecov.io/gh/simplesamlphp/simplesamlphp-module-examplecomposer/branch/master/graph/badge.svg)](https://codecov.io/gh/simplesamlphp/simplesamlphp-module-examplecomposer)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/simplesamlphp/simplesamlphp-module-examplecomposer/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/simplesamlphp/simplesamlphp-module-examplecomposer/?branch=master)
[![Type Coverage](https://shepherd.dev/github/simplesamlphp/simplesamlphp-module-examplecomposer/coverage.svg)](https://shepherd.dev/github/simplesamlphp/simplesamlphp-module-examplecomposer)
[![Psalm Level](https://shepherd.dev/github/simplesamlphp/simplesamlphp-module-examplecomposer/level.svg)](https://shepherd.dev/github/simplesamlphp/simplesamlphp-module-examplecomposer)

## Install

This package is an example of a SimpleSAMLphp module installable through
[Composer](https://getcomposer.org/). Installation can be as easy as executing:

```bash
vendor/bin/composer require simplesamlphp/simplesamlphp-module-examplecomposer
```

## Configuration

Next thing you need to do is to enable the module:

in `config.php`, search for the `module.enable` key and set `examplecomposer` to true:

```php
'module.enable' => [ 'examplecomposer' => true, … ],
```

You can access the hello-world script at: `/simplesaml/module.php/examplecomposer/helloworld`

See the [SimpleSAMLphp Composer module installer](https://github.com/simplesamlphp/composer-module-installer)
documentation for more information about creating modules installable through Composer.

## Relevant files

This module consists of the following files:

- `composer.json`: The composer configuration file for this module.
- `README.md`: This document describing the module.
- `lib/Controller/ExampleController.php`: Controller outputting `Hello World!` when executed.
