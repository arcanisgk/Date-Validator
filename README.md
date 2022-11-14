# Date-Validator

Validation of format is right for given datetime,date or time string variable.

Acronym: [Date-Validator].

Name: Date-Validator.

Dependencies: Stand Alone / PHP v7.4.

## What does *[Date-Validator]* do?

is a very simple PHP [Date-Validator] implementation that allows you to easily validate if the PHP variable passed is a string with valid datetime, date, time format.

## Why use *[Date-Validator]*?

Developers need the ability to validate if variable meaning a datetime, date or time have a right format, this helps to validate some format dependencies that must have a datetime, date or time string.

## Help to improve *[Date-Validator]*?

if you want to collaborate with the development of the library; You can express your ideas or report any situation related to this in:
https://github.com/arcanisgk/Date-Validator/issues

## *[Date-Validator]* Configuration:

None necessary.

## *[Date-Validator]* Installation:

```cmd
composer require arcanisgk/date-validator
```

## *[Date-Validator]* Usage:

### Instance of Class:

```php

use IcarosNet\DateValidator\DateValidator;
require __DIR__.'\..\vendor\autoload.php';
$date_validator = new DateValidator();

```

### Implementation of Class:

```php

if ($date_validator->ValidateDate('10/10/1999 20:40')) {
    echo 'Correct date string';
}

if ($date_validator->ValidateDate('XXX10/10/1999 20:40')) {
     echo 'incorrect date string';
}

if($date_validator->addFormat('d--m--Y H%i')->ValidateDate('09--09--2010 20%40')){
     echo 'Correct new date format string using % separator';
}

```

### Contributors

- (c) 2020 - 2022 Walter Francisco Núñez Cruz
  icarosnet@gmail.com [![Donate](https://img.shields.io/static/v1?label=Donate&message=PayPal.me/wnunez86&color=brightgreen)](https://www.paypal.me/wnunez86/4.99USD)

