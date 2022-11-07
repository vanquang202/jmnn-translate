# jmnn-translate
Package convert [Rapid api](https://rapidapi.com). jmnn-translate

## Installation
```sh
$ composer require jmnn/translate
``` 
### Generate config file
```sh
$ php artisan vendor:publish --tag=jmnn/translate/config --force
``` 

### .ENV
```sh
$  RAPIDAPI_DEFAULT=google
$  RAPIDAPI_KEY=key
$  RAPIDAPI_GOOLE_HOST=host google
$  RAPIDAPI_GOOLE_LANGUAGES=url languages
$  RAPIDAPI_GOOLE_TRANSLATTE=url translate

$  RAPIDAPI_NLP_HOST=host nlp
$  RAPIDAPI_NLP_LANGUAGES=url languages 
$  RAPIDAPI_NLP_TRANSLATE=url ttranslate 
``` 

## Quick Start 

```php
 JTranslate::convert('Hello world','vi');
 JTranslate::driver('nlp')->convert('Hello world','vi');
 
 JTranslate::languages();
 
```

## Local default 
Config/app.php
```php
 'locale' => 'vi',
 
```
