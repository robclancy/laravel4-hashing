Laravel4-Hashing
=============

NOTE: currently this is just using Sha512. See bottom of readme for future plans.

Package for when you can't use Bcrypt in Laravel 4. This drops the minimum PHP version for Laravel 4 to 5.3.2.

[![Build Status](https://secure.travis-ci.org/robclancy/laravel4-hashing.png)](http://travis-ci.org/robclancy/laravel4-hashing)

## Installation

#### Download the library

Add the following to the "require" section of your `composer.json` file:

```json
	"robclancy/laravel4-hashing": "dev-master"
```

Then run `composer update` like usual.

#### Add the new service provider

Go into `app/config/app.php` and fine `Illuminate\Hashing\HashServiceProvider`. Change `Illuminate` to `Robbo`.

That's it, you are now using Sha512 hashing and compatable with PHP 5.3.2+


## Coming soon....

I plan to support all hash functions specified here: https://github.com/ircmaxell/PHP-PasswordLib#specifications

When I do you will be able to choose which one to use from the `app.php` config file.
