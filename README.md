SimpleSAMLphp Composer module example
=====================================

This package is an example of a SimpleSAMLphp module installable through
[Composer](https://getcomposer.org/). Installation can be as easy as executing:

```
composer.phar require simplesamlphp/simplesamlphp-module-examplecomposer 2.*
```

That command would install `simplesamlphp/simplesamlphp-module-examplecomposer`
matching version `2.*`.


Once it is installed, you should enable to module in the config.php file. Look for the 'module.enable' setting.
You can access the hello-world script at: `/simplesaml/module.php/examplecomposer/helloworld`

See the [SimpleSAMLphp Composer module installer](https://github.com/simplesamlphp/composer-module-installer)
documentation for more information about creating modules installablethrough Composer.


Relevant files
-----

This module consists of the following files:

- `composer.json`: The composer configuration file for this module.
- `README.md`: This document describing the module.
- `lib/Controller/ExampleController.php`: Controller outputing `Hello World!` when executed.
