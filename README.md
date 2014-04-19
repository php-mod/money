Money
=====

Fork from [Mathias Verraes implementation of Fowley's money pattern](https://github.com/mathiasverraes/money).

The current version of the fork divverges from Fowley's pattern by using floats as parameters on the Money constructor. This was introduced in order to cater to the issue of large monetary entities overflowing PHP int size on 32 bits platforms. This will be dealt with on later releases of this fork, so expect API breakage on minor releases.

PHP 5.3+ library to make working with money safer, easier, and fun!

> "If I had a dime for every time I've seen someone use FLOAT to store currency, I'd have $999.997634" -- [Bill Karwin](https://twitter.com/billkarwin/status/347561901460447232)

In short: You shouldn't represent monetary values by a float. Wherever
you need to represent money, use this Money value object.

```php
<?php

use Money\Money;

$fiveEur = Money::EUR(5);
$tenEur = $fiveEur->add($fiveEur);

list($part1, $part2, $part3) = $tenEur->allocate(array(1, 1, 1));
assert($part1->equals(Money::EUR(334)));
assert($part2->equals(Money::EUR(333)));
assert($part3->equals(Money::EUR(333)));
```

The documentation is available at http://money.readthedocs.org


Installation
------------

Install the library using [composer][1]. Add the following to your `composer.json`:

```json
{
    "require": {
        "hemeragestao/money": "2.0.*"
    } 
}
```

Now run the `install` command.

```sh
$ composer.phar install
```


Added Features
--------------
This fork replaces the maping of currencies from a simple ISO 4217 map from openexchangerates.org with the data contained in [Ruby's Money](https://github.com/RubyMoney) mapping. This allows for a few additional features, including generating formatted output string for the Money objects.
Also, the Money object constructor takes a float parameter, using it as the amount instead of units. This will be changed on later releases.

```php
<?php

use Money\Money;

echo Money::EUR(5.32);
```

Output:
```
€ 5.32
```


Integration
-----------

See [`MoneyBundle`][2] or [`TbbcMoneyBundle`][4] for [Symfony integration][3].

[1]: http://getcomposer.org/
[2]: https://github.com/pink-tie/MoneyBundle/
[3]: http://symfony.com/
[4]: https://github.com/TheBigBrainsCompany/TbbcMoneyBundle
