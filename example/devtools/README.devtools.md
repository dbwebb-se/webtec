Dev tools
============================

This is a collection of development tools you can install to perform static code analysing and testing of your code.

Some tools are PHP based and installed and run through composer.

Some tools are JavaScript based and installed and run through npm.



General
----------------------------

The files in here is intented to be copied to the top of your development library. In the course repo that would be your `me/` directory.

```
rsync -av example/devtools/ me/
```



PHP tools
----------------------------

Install the tools through composer

```
composer install
```

You can now run the tools through composer, for example like this.

```
composer phpcs
composer phpcbf
composer phpmd
```



JavaScript tools
----------------------------

Tools for static code validation, test, build and minification for HTML, CSS and JavaScript client and server side.

To be done.
