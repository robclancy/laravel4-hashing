Laravel4-Hashing
=============

Package for when you can't use Bcrypt in Laravel 4. This drops the minimum PHP version for Laravel 4 to 5.3.2.

[![Total Downloads](https://poser.pugx.org/robclancy/laravel4-hashing/downloads.png)](https://packagist.org/packages/robclancy/laravel4-hashing) [![Build Status](https://secure.travis-ci.org/robclancy/laravel4-hashing.png)](http://travis-ci.org/robclancy/laravel4-hashing) [![License](https://poser.pugx.org/robclancy/laravel4-hashing/license.png)](https://packagist.org/packages/robclancy/laravel4-hashing)

## Installation

#### Download with composer

Add the following to the "require" section of your `composer.json` file:

```json
	"robclancy/laravel4-hashing": "1.0.x"
```

Then run `composer update` like usual.

#### Add the new service provider

Go into `app/config/app.php` and find `Illuminate\Hashing\HashServiceProvider`. Change `Illuminate` to `Robbo`. So it will then be `Robbo\Hashing\HashServiceProvider`.

That's it, you are now using Sha512 hashing and compatible with PHP 5.3.2+
